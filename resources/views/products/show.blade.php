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
              <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Men </span><span class="badge badge-secondary">42</span></a>
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Shirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Ladies  </span><span class="badge badge-light">123</span></a>
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="h4 panel-title">Brands</h3>
          </div>
          <div class="panel-body">
            <ul class="nav nav-pills flex-column text-sm category-menu">
              <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Men </span><span class="badge badge-secondary">42</span></a>
                
              </li>
              <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Ladies  </span><span class="badge badge-light">123</span></a>
                
              </li>
              <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                
              </li>
            </ul>
          </div>
        </div>
       
      </div>
      <!-- LEFT COLUMN _________________________________________________________-->
      <div class="col-lg-9">
        
        <div id="productMain" class="row">
          <div class="col-sm-5">
            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
              <div> <img src="/img/detailbig1.jpg" alt="" class="img-fluid"></div>
              <div> <img src="/img/detailbig2.jpg" alt="" class="img-fluid"></div>
              <div> <img src="/img/detailbig3.jpg" alt="" class="img-fluid"></div>
            </div>
            <div data-slider-id="1" class="owl-thumbs">
              <button class="owl-thumb-item"><img src="/img/detailsquare.jpg" alt="" class="img-fluid"></button>
              <button class="owl-thumb-item"><img src="/img/detailsquare2.jpg" alt="" class="img-fluid"></button>
              <button class="owl-thumb-item"><img src="/img/detailsquare3.jpg" alt="" class="img-fluid"></button>
            </div>
          </div>
          <div class="col-sm-6">
            <div >
              <p></p>
              <h2>Product Name</h2>
              <h4>Product details</h4>
              <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
              <h4>Material & care</h4>
              <ul>
                <li>Polyester</li>
                <li>Machine wash</li>
              </ul>
              <h4>Size & Fit</h4>
              <ul>
                <li>Regular fit</li>
                <li>The model (height 5'8 "and chest 33") is wearing a size S</li>
              </ul>
              
            </div>
          </div>
        </div>
        
        <hr>
      </div>
    </div>
  </div>
</div>

@endsection