@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/tetfund.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Downloads</a></li>
      </ol>
      <h2 class="h1">
    Downloads
      </h2>
     </div>
   </div>
  </div>
</div>


<section class="padding-y-10 border-bottom border-light">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12 mx-auto">
        <div class="table-responsive my-4">
          <table class="table">
            <thead class="thead-light" >
              <tr>
                <th scope="col">Name</th>
                   <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($downloads as $ee )
              <tr>
                <th scope="row">{{$ee->name}}</th>
                 <td><a target="_blank" href="{{asset('/assets/doc/'.$ee->d_file)}}"> <button class="btn btn-primary btn-sm">Download File </button></a></td>
                <td>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>        
      </div>     
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->
    

  
@endsection

