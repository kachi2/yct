<?php

namespace App\Http\Controllers;
use App\Models\NavDropdown;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Rector;
use App\Models\AdmissionList;
use App\Models\Category;
use App\Models\News;
use App\Models\School;
use App\Models\SchoolGallery;
use App\Models\NoticeBoard;
use App\Models\Department;
use App\Models\Hod;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolDean;
use App\Models\Staff;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //

    public function Index(){
        return view('admin.index');
    }

    public function adminIndex(){
        return view('admin.rectors.index')
            ->with('rectors', Rector::get());
    }

    public function createAdministration(){
       $nav =  NavDropdown::where(['nav_list_id'=>2, 'status'=>1])->get();
        return view('admin.rectors.create', compact('nav', $nav));
    }

    public function StoreAdministration(Request $request){
        
        $valid = Validator::make($request->all(),[
            'designation'=>'required|integer',
            'name'=>'required',
            'about'=>'required',
            'image'=>'required'
        ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }
        //create the route link
        $nav = NavDropdown::where('id', $request->designation)->first();
        $link = explode('.',$nav->link);
                NavDropdown::where('id', $nav->id)->update(['status'=>2]);
        $adm = new Rector;
        $adm->name = $request->name;
        $adm->about = $request->about;
        $adm->designation = $nav->name;
        $adm->message = $request->message;
        $adm->link = $link[1];
        if($request->hasfile('image')){
            $image = $request->image;
            $name =  $image->getClientOriginalName();
            $ext =  $image->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            Image::make($request->image)->resize(417,287)->save('assets/img/site/'.$fileName);
            $adm->image = $fileName;
        }
        if($adm->save()){
            Session::flash('alert', 'success');
            Session::flash('message', $adm->name.' added successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
        }
    }

    public function editAdministration($id){
        $id = decrypt($id);
        $nav =  NavDropdown::where(['nav_list_id'=>2])->get();
        return view('admin.rectors.edit')
                ->with('rector', Rector::where('id', $id)->first())
                ->with('nav', $nav);
    }

    public function updateAdministration(Request $request, $id){
        $id = decrypt($id);
        $nav = NavDropdown::where('id', $request->designation)->first();
        $link = explode('.',$nav->link);
        NavDropdown::where('id', $nav->id)->update(['status'=>2]);

        $rector = Rector::where('id', $id)->first();
        if($request->name){
            $rector->name = $request->name;
        }
        if($request->about){
            $rector->about = $request->about;
        }
        if($request->designation){
            $rector->designation = $nav->name;
        }
        if($request->message){
            $rector->message = $request->message;
        }
        if(isset($link)){
            $rector->link  = $link[1];;
        }
        if($request->hasfile('image')){
            $image = $request->image;
            $name =  $image->getClientOriginalName();
            $ext =  $image->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            Image::make($request->image)->resize(417,287)->save('assets/img/site/'.$fileName);
            $rector->image = $fileName;
        }
       
        if($rector->save()){
            Session::flash('alert', 'success');
            Session::flash('message', $rector->name.' updated successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
        }
    }

    public function disableAdministration($id){
        $admin = Rector::where('id', decrypt($id))->first();
        $admi = Rector::where('id', decrypt($id))->first()
                ->update(['is_active' => 2]);
            if($admi){
                Session::flash('alert', 'success');
                Session::flash('message', $admin->name.' tenure marked as expired'); 
                return back();
            }
            Session::flash('alert', 'eerror');
            Session::flash('message', 'Error processing request, try again'); 
            return back();
    }

    public function enableAdministration($id){
        $admin = Rector::where('id', decrypt($id))->first();
        $admi = Rector::where('id', decrypt($id))->first()
                ->update(['is_active' => 1]);
            if($admi){
                Session::flash('alert', 'success');
                Session::flash('message', $admin->name.' tenure has been returned'); 
                return back();
            }
            Session::flash('alert', 'eerror');
            Session::flash('message', 'Error processing request, try again'); 
            return back();
    }

    public function AdmissionIndex(){
        return view('admin.admission.index')
                ->with('list', Admissionlist::latest()->get());
    }

    public function AdmissionCreate(){
        return view('admin.admission.create');
    }

    public function AdmissionStore(Request $request){

        $valid = Validator::make(request()->all(), [

            'dfile'=>'required',
            'name'=>'required'
        ]);

        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }
        $adm = new AdmissionList;
        $adm->name = $request->name;
        if($request->hasfile('dfile')){
            $file = $request->dfile;
            $name =  $file->getClientOriginalName();
            $FileName = \pathinfo($name, PATHINFO_FILENAME);
            $ext =  $file->getClientOriginalExtension();
            $fileName = $FileName.'.'.$ext;
            $file->move('assets/doc/', $fileName);
        }
        $adm->ad_file = $fileName;
        if($adm->save()){
            Session::flash('alert', 'success');
            Session::flash('message', 'File added successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
        }
    }

    public function AdmissionEdit($id){
        $id = decrypt($id);
        return view('admin.admission.edit')
            ->with('list', AdmissionList::where('id', $id)->first());
    }

    public function AdmissionUpdate(Request $request, $id){
        $id = decrypt($id);
        $list = AdmissionList::where('id', $id)->first();
        $list->name = $request->name;
        if($request->hasfile('dfile')){
            $file = $request->dfile;
            $name =  $file->getClientOriginalName();
            $ext =  $file->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            $file->move('assets/doc/', $fileName);
            $list->ad_file = $fileName;
        }
        if($list->save()){
            Session::flash('alert', 'success');
            Session::flash('message', 'File added successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
        }
    }

    public function StaffList(){
        return view('admin.staffs.index')
            ->with('staff', Staff::get());
    }

    public function StaffCreate(){
        return view('admin.staffs.create')
            ->with('department', Department::get())
            ->with('category', Category::get());
    }

    public function StaffStore(Request $request){
        $valid = Validator::make($request->all(),[
            'name'=>'required',
            'department_id'=>'required|integer',
            'category_id'=>'required|integer'
        ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->image($request->image, $staff);
        $staff->email = $request->email;
        $staff->department_id = $request->department_id;
        $staff->category_id = $request->category_id;
        $staff->designation = $request->designation;
        $staff->qualification = $request->qualification;
        $staff->research_areas = $staff->research_areas;
        if($staff->save()){
                Session::flash('alert', 'success');
                Session::flash('message', $request->name .' added successfully');
                return redirect()->back();
            }else{
                Session::flash('alert', 'error');
                Session::flash('message', 'Request Failed');
                return redirect()->back();
        }
    }

    public function StaffEdit($id){
        $staff = Staff::where('id', decrypt($id))->first();
        return view('admin.staffs.edit', compact('staff', $staff))
        ->with('department', Department::get())
        ->with('category', Category::get());
    }


public function StaffUpdate(Request $request, $id){
    $staff = Staff::where('id', decrypt($id))->first();
    $staff->name = $request->name;
    $staff->image($request->image, $staff);
    $staff->email = $request->email;
    $staff->department_id = $request->department_id;
    $staff->category_id = $request->category_id;
    $staff->designation = $request->designation;
    $staff->qualification = $request->qualification;
    $staff->research_areas = $staff->research_areas;
    if($staff->save()){
            Session::flash('alert', 'success');
            Session::flash('message', $request->name .' updated successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
    }
}

    public function StaffAssign($id){
        $data['staff'] = Staff::where('id', decrypt($id))->first();
        $data['role'] = NavDropdown::where('nav_list_id', 2)->get();
        return view('admin.staffs.assign',$data);
    }

    public function StaffAssignPost(Request $request, $id){
        $link =  explode('.', $request->link);
        $staff = Staff::where('id', decrypt($id))->first();
            $chk = Rector::where('staff_id', $staff->id)->first();
            $chks = Rector::where('link', $link[1])->first();
            if($chk){
                Session::flash('alert', 'error');
                Session::flash('message', 'This User has been asssign an administrative post');
                return back();
            }
            if($chks){
                Session::flash('alert', 'error');
                Session::flash('message', 'Another User has been asssigned this administrative post, delete and try again');
                return back();
            }

        $valid = Validator::make($request->all(), [
                'link' => 'required',
                'designation' => 'required',
        ]);
        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return back();
        }
        DB::BeginTransaction();
        try{
            $rector = new Rector;
            $rector->name = $request->name;
            $rector->designation = $request->designation;
            $rector->about = $request->about;
            $rector->staff_id = $staff->id;
            $rector->message = $request->welcome_message;
            $rector->link = $link[1];
            $rector->is_active = 1;
            $rector->save();
            $staff = Staff::where('id', decrypt($id))->first();
            $staff->name = $request->name;
            $staff->image($request->image, $staff);
            $staff->email = $request->email;
            $staff->department_id = $request->department_id;
            $staff->category_id = $request->category_id;
            $staff->departments = $request->designation;
            $staff->qualification = $request->qualification;
            $staff->Publications  = $request->Publications;
            $staff->research_areas = $request->research_areas;
            $staff->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Request Completed Successfully');
        DB::commit();
        }catch(\Exception $e){
        DB::rollBack();
        throw $e;
        Session::flash('alert', 'error');
        Session::flash('message', 'Request Failed, try again');
        return back();
        }

    }
    public function NewsIndex(){
        return view('admin.news.index')
        ->with('news', News::latest()->get());
    }

    public function NewsCreate(){
        return view('admin.news.create')
            ->with('schools', School::get());
    }

    public function NewsStore(Request $request){
        $valid = Validator::make($request->all(), [
            'title'=>'required',
            'school_id' => 'required|integer',
            'content' => 'required',
            'image'=>'required'
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }

        $news = new News;
        $news->title = $request->title;
        $news->school_id = $request->school_id;
        $news->content = $request->content;
        $news->posted_by = 1;
        $news->status = 1;
        if($request->hasfile('image')){
            $image = $request->image;
            $name =  $image->getClientOriginalName();
            $ext =  $image->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            Image::make($request->image)->resize(400,307)->save('/assets/img/'.$fileName);
           // $image->move('assets/img/', $fileName);
            $news->image = $fileName;
        }
        if($news->save()){
            Session::flash('alert', 'success');
            Session::flash('message','News Published Successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
    }
    }

    public function NewsEdit($id){
        return view('admin.news.edit')
        ->with('news', News::where('id', decrypt($id))->first())
        ->with('schools', School::get());
    }

    public function NewsUpdate(Request $request, $id){
        $news = News::where('id', decrypt($id))->first();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->school_id = $request->school_id;
        if($request->hasfile('image')){
            $image = $request->image;
            $name =  $image->getClientOriginalName();
            $ext =  $image->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            Image::make($request->image)->resize(400,307)->save('assets/img/'.$fileName);
            $news->image = $fileName;
        }  
        if($news->save()){
            Session::flash('alert', 'success');
            Session::flash('message','News Updated Successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
    }
    }

    public function NoticeIndex(){
        return view('admin.news.notice')
        ->with('notice', NoticeBoard::latest()->get());
    }

    public function NoticeCreate(){
        return view('admin.news.noticeCreate')
            ->with('schools', School::get());
    }

    public function NoticeStore(Request $request){
        $valid = Validator::make($request->all(), [
            'headline'=>'required',
            'school_id' => 'required|integer',
            'content' => 'required',
        ]);

        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }
        $notice = new NoticeBoard;
        $notice->headline = $request->headline;
        $notice->school_id = $request->school_id;
        $notice->content = $request->content;
        $notice->posted_by = 1;
        $notice->status = 1;
        if($notice->save()){
            Session::flash('alert', 'success');
            Session::flash('message','News Published Successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
    }
    }

    public function NoticeEdit($id){
        return view('admin.news.noticeEdit')
        ->with('notice', NoticeBoard::where('id', decrypt($id))->first())
        ->with('schools', School::get());
    }

    public function Noticeupdate(Request $request, $id){
        $notice = NoticeBoard::where('id', decrypt($id))->first();
        $notice->headline = $request->title;
        $notice->content = $request->content;
        $notice->school_id = $request->school_id; 
        if($notice->save()){
            Session::flash('alert', 'success');
            Session::flash('message','News Updated Successfully');
            return redirect()->back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request Failed');
            return redirect()->back();
    }
    }


    public function SchoolsIndex(){
        return view('admin.schools.index')
            ->with('schools', School::get());
    }

    public function SchoolCreate(){
        $school_list = NavDropDown::where(['nav_list_id'=> 7, 'status' => 1])->get();
        return view('admin.schools.create')
            ->with('menus', $school_list);
    }

    public function SchoolStore(Request $request){
        $valid = Validator::make($request->all(),[
        'image' => 'required',
        'images' => 'required',
        'school' => 'required|integer',
        'history' => 'required'
        ]);
        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('message', 'Some fields are missing');
            return redirect()->back()->withInput($request->all())->withErrors($valid);
        }
        $nav = NavDropdown::where('id', $request->school)->first();
        $link = explode('.',$nav->link);
                NavDropdown::where('id', $nav->id)->update(['status'=>2]);
        $school = new School;
        $school->name = $nav->name;
        $school->description = $request->history;
        $school->link = $link[1];
        $school->slug = $link[1];
      // $school->save();
      // sleep(2);

        $sk = School::latest()->first();
        $gallery = new SchoolGallery;
       $gallery->school_id = 1;
        if($request->has('image')){
            $image = $request->image;
            $name =  $image->getClientOriginalName();
            $ext =  $image->getClientOriginalExtension();
            $dd = md5(time());
            $fileName = $dd.'.'.$ext;
            Image::make($request->image)->resize(800,307)->save('assets/img/'.$fileName);
           // $image->move('/assets/img/', $fileName);
            $gallery->header_image = $fileName;
        }
        if($request->has('images')){
            foreach($request->images as $image){
                //dd($image);
                $ext =  $image->getClientOriginalExtension();
                $dd = md5(time());
                $fileName = $dd.'.'.$ext;
                Image::make($image)->resize(400,307)->save('assets/img/'.$fileName);
               // $image->move('/assets/img/', $fileName);
                $gg[] = $fileName;
            }
                $gallery->gallery = json_encode($gg);
        }
        $gallery->save();
        return back();

    }

    public function DepartmentIndex(){
        return view('admin.schools.departments')
        ->with('departments', Department::get());
    }

    public function DeansIndex(){
        return view('admin.schools.dean')
        ->with('deans', SchoolDean::get());
    }

    public function StaffAssignOffice($id){
        $data['staff'] = Staff::where('id', decrypt($id))->first();
        return view('admin.staffs.assignPost',$data);
    }

    
    public function StaffAssignOfficeStore(Request $request, $id){
        $staff = Staff::where('id', decrypt($id))->first();
        

        if($request->role == 1){
            $chk = SchoolDean::where(['school_id' => $staff->school->id, 'status' => '1'])->first();
        if($chk){
             Session::flash('alert', 'error');
             Session::flash('message','This post is already assigned to another staff, end staff tenure to assign new staff');
             return redirect()->back();
         }
         $userExist = SchoolDean::where(['staff_id' => $staff->id])->first();
         if($userExist){
             Session::flash('alert', 'error');
             Session::flash('message','This user tenrure is already expired, you cannot reassign');
             return redirect()->back();
         }
         $assignPost = Hod::where(['staff_id' => $staff->id, 'status' => 1])->first();
         if($assignPost){
             Session::flash('alert', 'error');
             Session::flash('message','This user is already assigned another office, you cannot assign this office');
             return redirect()->back();
         }
            //assign the user dean post
            $dean = SchoolDean::create([
                'staff_id' => $staff->id,
                'school_id' => $staff->school->id,
                'image' => $staff->image,
                'message' => $request->message,
                'status' => 1,
            ]);

            if($dean){
                Session::flash('alert', 'success');
                Session::flash('message','Staff assigned as Dean of '.$staff->school->name.' Successfylly');
                return redirect()->back();
            }
        }else{
            $assignPost = Hod::where(['staff_id' => $staff->id, 'status' => 1])->first();
            if($assignPost){
                Session::flash('alert', 'error');
                Session::flash('message', $staff->name.' is already assigned another office, you cannot assign this office');
                return redirect()->back();
            }
            $chk = Hod::where(['department_id' => $staff->department->id, 'status' => '1'])->first();
            if($chk){
                Session::flash('alert', 'error');
                Session::flash('message','This post is already assigned to another staff, end staff tenure to assign new staff');
                return redirect()->back();
            }
            $userExistHod =  Hod::where(['department_id' => $staff->department->id, 'status' => 1])->first();
         if($userExistHod){
             Session::flash('alert', 'error');
             Session::flash('message','This post is already assigned to another staff, end staff tenure to assign new staff');
             return redirect()->back();
         }
            $dean = Hod::create([
                'staff_id' => $staff->id,
                'school_id' => $staff->school->id,
                'department_id' => $staff->department->id,
                'message' => $request->message,
                'status' => 1,
            ]);
            if($dean){
                Session::flash('alert', 'success');
                Session::flash('message',$staff->name.' assigned as HOD of '.$staff->department->name.' Successfylly');
                return redirect()->back();
            }
        }
        
    }

    public function HodsIndex(){
        return view('admin.schools.hod')
            ->with('hods', Hod::get());
    }

    public function DeanEdit($id){
        $dean = SchoolDean::where('id', decrypt($id))->first();
        return view('admin.schools.deanEdit', compact('dean', $dean));
    }

    public function DeanUpdate(Request $request, $id){
        $dean = SchoolDean::where('id', decrypt($id))->first();
        $dean->message = $request->message;
        $dean->save();
        Session::flash('alert', 'success');
        Session::flash('message','Welcome Message updated Successfully');
        return redirect()->back();

    }

    public function HodEdit($id){
        $hod = Hod::where('id', decrypt($id))->first();
        return view('admin.schools.hodEdit', compact('hod', $hod));
    }

    public function HodUpdate(Request $request, $id){
        $hod = hod::where('id', decrypt($id))->first();
        $hod->message = $request->message;
        $hod->save();
        Session::flash('alert', 'success');
        Session::flash('message','Welcome Message updated Successfully');
        return redirect()->back();

    }
}




