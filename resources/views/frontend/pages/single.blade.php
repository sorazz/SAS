@extends('frontend.includes.app')
<style>
    /* Custom styling for the related services section */
.related-services {
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
}

.related-services h3 {
  color: #333;
  font-size: 20px;
  margin-bottom: 15px;
}

.list-group {
  margin-top: 10px;
}

.list-group-item {
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 5px;
  margin-bottom: 5px;
  transition: background-color 0.3s ease;
}

.list-group-item:hover {
  background-color: #f0f0f0;
}

.list-group-item a {
  color: #333;
  text-decoration: none;
  padding: 10px;
  display: block;
}

.list-group-item a:hover {
  color: #555;
  text-decoration: none;
}

/* Adjusting styles for larger screens */
@media (min-width: 768px) {
  .related-services h3 {
    font-size: 24px;
  }

  .list-group-item {
    padding: 15px;
  }

  .list-group-item a {
    padding: 15px;
  }
}

    </style>
@section('content')
<div class="all-page-title" style="background-image:url(images/pattern-4.png);">
    <div class="container text-center">
        <h1>{{$data->title}}</h1>
    </div>
    <!--Page -->
    <div class="page-info">
        <div class="container">
            <div class="inner-container">
                <ul class="bread-crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/'.$slug)}}">{{$slug}}</a></li>
                    <li><span>{{$data->title}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Page-->
</div><!-- end section -->

<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
    <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
    </path>
</svg>
<div id="about" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m40">
                <div class="message-box">
                    <h2> {{$data->title ? $data->title : $data->name}} </h2>
                  
                  <div style="text-align: justify;">  {!!$data->description!!} </div>

                </div><!-- end messagebox -->
            </div><!-- end col -->
            <div class="col-md-3 m40">
                <div class="post-media wow fadeIn">
                    <img src="{{asset('/uploads/'.$slug .'/'.$data->image)}}" alt="" class="img-responsive img-rounded">
                </div><!-- end media -->
                <div class="row ">
                    <div class="col-12 related-services">
                        <h3>Related </h3>
                        <div class="list-group" id="list-tab" role="tablist">
                            @foreach($related as $r)
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="{{url('/page/'.$r->id .'/service')}}" role="tab" aria-controls="list-home">{{$r->title ? $r->title : $r->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="support" class="section db">
    <div class="container">
        <div class="section-title text-center">
    
        </div><!-- end title -->

        <div class="row">
            <div id="logo-carousel" class="owl-carousel">
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection