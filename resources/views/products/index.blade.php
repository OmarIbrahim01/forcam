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
      <div class="col-md-3">
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
      <div class="col-md-9">
        
        <div class="row products products-big">
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6">
            <div class="product">
              <div class="image"><a href="{{route('products.show', $product->id)}}"><img src="{{$product->main_image_path}}" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="{{route('products.show', $product->id)}}">{{$product->name}}</a></h3>
              </div>
              @if($product->new)
              <div class="ribbon-holder">
                <div class="ribbon sale">New</div>
              </div>
              @endif
            </div>
          </div>
          @endforeach
        </div>
        <div class="pages">
          {{-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            <ul class="pagination">
              <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
              <li class="page-item active"><a href="#" class="page-link">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </nav> --}}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection