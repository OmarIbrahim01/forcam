@extends('layouts.main')


@section('breadcrumb')
<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row d-flex align-items-center flex-wrap">
      <div class="col-md-7">
        <h1 class="h2">Products</h1>
      </div>
      <div class="col-md-5">
        <ul class="breadcrumb d-flex justify-content-end">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Category with left sidebar</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection



@section('content')

<div id="content">
  <div class="container">
    <div class="row bar">
      
      <div class="col-lg-3">
        <!-- MENUS AND FILTERS-->
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="h4 panel-title">Categories</h3>
          </div>
          <div class="panel-body">
            <ul class="nav nav-pills flex-column text-sm category-menu">
              @foreach($categories as $category)
              <a href="#" class="nav-link d-flex align-items-center justify-content-between"><span>{{$category->name}} </span><span class="badge badge-secondary">{{count($category->products)}}</span></a>
              @endforeach
            </ul>
          </div>
        </div>
        
       
      </div>
      <!-- LEFT COLUMN _________________________________________________________-->
      <div class="col-lg-9">
        
        <div id="productMain" class="row">
          <div class="col-sm-5">
            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
              @foreach($product->product_images as $image)
              <div> <img src="{{$image->image_path}}" alt="" class="img-fluid"></div>
              @endforeach
            </div>
            <div data-slider-id="1" class="owl-thumbs">
              @foreach($product->product_images as $image)
              <button class="owl-thumb-item"><img src="{{$image->image_path}}" alt="" class="img-fluid"></button>
              @endforeach
            </div>
          </div>
          <div class="col-sm-6">
            <div >
              <p></p>
              <h2>{{$product->name}}</h2>
              <h4>Product details</h4>
              <p>{{$product->description}}</p>
            </div>
          </div>
        </div>
        
        <hr>
      </div>
    </div>
  </div>
</div>

@endsection