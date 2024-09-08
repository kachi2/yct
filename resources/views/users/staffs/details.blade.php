@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" padding="-200px" style="background:url({{ asset('/assets/profile/'.$staff->image)}})  no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Staff</a></li>
      </ol>
      <h2 class="h1">
        Staff Profile
      </h2>
      
     </div>
      <form class="col-lg-5 my-2 ml-auto">
        <div class="input-group bg-white rounded p-1">
          <input type="text" class="form-control border-white" placeholder="Search for a staff" required="">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div>
      </form>
   </div>
  </div>
</div>
    
 <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center pt-5 mb-4">
             <img class="rounded-circle mb-4" src="{{asset('/assets/profile/'.$staff->image)}}" width="200" height="200" alt="">
             <h4>
              {{$staff->name}}
             </h4>
              <p>
               {{$staff->department->name}}, <br> @if(isset($staff->departments)) {{$staff->departments}} @endif
              </p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item m-2">
                  <i class="ti-email text-primary"></i>
                  {{$staff->email}}
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-8 mt-4">
          <div class="card shadow-v1 padding-30">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                About
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
                Department
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-3" role="tab" aria-selected="true">
                 Academic Qualifications 
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-4" role="tab" aria-selected="true">
             Publications
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-5" role="tab" aria-selected="true">
              Research Areas
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
                <div class=" mb-4 pb-4">
                   <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <h6 class="mb-0">Designation</h6>
                      <p class="mb-2">{{$staff->designation}}.</p>
                     
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <h6 class="mb-0">Category</h6>
                      <p class="mb-2">{{$staff->category->name}}</p>
                      
                    </li>
                  </ul>
               
                </div>
         
              </div>
              <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
              <div class=" mb-4 pb-4">
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <h6 class="mb-0">Department</h6>
                      <p class="mb-2">{{$staff->department->name}}.</p>
                     
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <h6 class="mb-0">Office</h6>
                      <p class="mb-2">{{$staff->departments}}</p>
                      
                    </li>
                  </ul>
                </div>
              </div> <!-- END tab-pane -->
              <div class="tab-pane fade" id="Tabs_1-3" role="tabpanel">
                <div class=" mb-4 pb-4">
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <h6 class="mb-0">Qualifications</h6>
                      <p class="mb-2">{{$staff->qualification}}</p>
                     
                    </li>
                  
                  </ul>
                </div>

              </div>
              <div class="tab-pane fade" id="Tabs_1-4" role="tabpanel">
                <div class=" mb-4 pb-4">
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <h6 class="mb-0">Publications</h6>
                      <p class="mb-2">{{$staff->Publications}}</p>
                     
                    </li>
                  
                  </ul>
                </div>
              </div>
              
              <div class="tab-pane fade" id="Tabs_1-5" role="tabpanel">
               <div class=" mb-4 pb-4">
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <h6 class="mb-0">Research Areas</h6>
                      <p class="mb-2">{{$staff->research_areas}}</p>  
                    </li>
                  </ul>
                </div>
             <!--  -->
                           
              </div> <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>
   



 

@endsection
