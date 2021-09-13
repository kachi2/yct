@extends('users.layout.app')
@section('content')

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('./assets/img/site/categ.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">News</a></li>
      </ol>
      <h2 class="h1">
       College News
      </h2>
     </div>
   </div>
  </div>
</div>
    





<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
     <aside class="col-lg-3 order-2 order-lg-2">
       <div class="widget widget_search">
        <form action="" method="POST"> 
          <div class="input-group">
            <input type="text" class="form-control border-0 pr-0 pl-3 u-py-15" placeholder="Search for News" required="">
            <button type="submit" class="input-group-btn btn bg-white">
              <span class="ti-search"></span>
            </button>
          </div>
        </form>
       </div>
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-white text-black mb-0">Top News</h4>

    @foreach ($latest as $lats)
      <div href="{{route('news.details',encrypt($lats->id))}}" class="card text-gray shadow-v1 p-2">
          <img class="card-img-top" src="{{asset('/assets/img/'.$lats->image)}}" alt="">
          <div class="p-1">
            <a href="#" class="h6">
              {{substr($lats->title,0,20)}}{{strlen($lats->title) > 40? '...':''}}
            </a> 
          </div>
        </div>
         
    @endforeach
     
        
       </div>

       <div class="card shadow-v2 marginTop-30 hover:parent">
        <img class="hover:zoomin" src="assets/img/262x230/9.jpg" alt="">
        <div class="card-img-overlay text-white bg-black-0_6">
          <h4 class="card-title">
            Computer science sport Academy
          </h4>
          <p class="my-3">
          Are you interested in been part of the college sporting team, click on the link to register
          </p>
          <a href="#" class="btn btn-white">Register</a>
        </div>
       </div>
     </aside> <!-- END col-lg-3 -->
     <div class="col-lg-9 order-1 order-lg-1">
       <div class="row">

       @foreach ($news as $new )
      <div class="col-md-6 marginTop-30">
        <div href="{{route('news.details',encrypt($new->id))}}" class="card text-gray shadow-v1">
          <img class="card-img-top" src="{{asset('/assets/img/'.$new->image)}}" width="100px" height="200px" alt="{{$new->title}}">
          <div class="card-body">
           <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
       {{$new->created_at->DiffForHumans()}} <i class="fa fa-clock"></i>  <span class="pl-4"><i class="fa fa-calendar"></i> {{$new->created_at->format('M d, Y h:iA')}}</span>
           </span>
            <a href="{{route('news.details',encrypt($new->id))}}" class="h5">
                {{substr($new->title,0,40)}}{{strlen($new->title) > 40? '...':''}}
            </a>
          </div>
        </div>
      </div>
      @endforeach
       </div> <!-- END row-->
     </div> <!-- END col-lg-9 -->
     
   </div> <!-- END row-->
    
  </div> <!-- END container-->
</section>
   



@endsection