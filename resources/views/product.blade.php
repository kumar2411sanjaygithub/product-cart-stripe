<!doctype html>

<html>
<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Product</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Language" content="en-us">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="shortcut icon" href="{{URL::asset('filter/images/favicon.png')}}">  
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('filter/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('filter/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('filter/css/magnific-popup.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('filter/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('filter/css/jquery-ui.css')}}">
<style type="text/css">
#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.75) url(https://flevix.com/wp-content/uploads/2019/07/Comp-2.gif) no-repeat center center;
  z-index: 10000;
}
.as{
  display: none;
}
.sa
{
  display: block;
}
</style>

</head>

<body>
    <!-- =====  HEADER START  ===== -->
    <header id="header">
      <div class="header">
        <div class="container">
          <nav class="navbar">

            <div class="header-right pull-right mtb_10">

              <div class="main-search pull-right">
                  <!-- For Success/ Error Message Start -->
                  <div class="container">
                      @if (\Session::has('success'))
                          <div class="alert alert-success">
                              <ul>
                                  <li style="font-size: 20px;font-weight: 600;">{!! \Session::get('success') !!}</li>
                              </ul>
                          </div>
                      @endif

                      @if (\Session::has('error'))
                          <div class="alert alert-danger">
                              <ul>
                                  <li style="font-size: 20px;font-weight: 600;">{!! \Session::get('error') !!}</li>
                              </ul>
                          </div>
                      @endif
                  </div>
                  <!-- For Success/ Error Message Start -->
              </div>
            </div>
            <div class="header-left pull-left mtb_10">

              <div class="main-search pull-left">
                  <!-- Total No of items in Cart and cart link Start -->
                  <div class="container">
                    <b><a href="{{url('/cart')}}" style="color: red;font-size: 25px;">Cart ({{$cartData->items}})</a></b>
                  </div>
                  <!-- Total No of items in Cart and cart link End -->
              </div>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        </div>
      </div>
    </header>

  <div class="wrapper">

    <!-- =====  CONTAINER START  ===== -->
            <!-- Product list with add to cart button Start -->    
            @if(count($productData)>0)
            @foreach($productData as $product)

            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="item">
                <div class="product-thumb clearfix mb_30">
                  <div class="image product-imageblock"> <a href="#"> <img data-name="product_image" src="@if(isset($product['image']) && !empty($product['image'])){{$product['image']}} @else {{url('img/no-image.jpg')}} @endif" alt="iPod Classic" title="iPod Classic" style="height: 80px;" class="img-responsive"> <img src="@if(isset($product['image'])&& !empty($product['image'])){{$product['image']}} @else {{url('img/no-image.jpg')}} @endif" alt="iPod Classic" title="iPod Classic" class="img-responsive" style="height: 80px;"> </a> </div>
                  <div class="caption product-detail text-left">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{$product['title']}}</a></h6>
                    <span class="price"><span class="amount"><span class="currencySymbol">Rs.</span>{{$product['price']}}</span>
                    </span>
                    <input type="hidden" name="id" value="{{$product['id']}}">
                    <span class="price">
                      <a type="button" id="buttonClick"  href="{{url('addtocart',['id'=>$product['id']])}}" class="btn btn-primary" style="background: #3c71e7 none repeat scroll 0 0;">Add to cart</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="item">
                <div class="product-thumb clearfix mb_30">               
                   No Data Found
                 </div>
               </div>
              </div>
            </div>
            @endif
            <!-- Product list with add to cart button End -->                
    <!-- =====  CONTAINER END  ===== -->

  </div>
  <a id="scrollup" style="display: inline;">Scroll</a>

</body>
  <script src="{{ asset('filter/js/jQuery_v3.1.1.min.js') }}"></script>
  <script src="{{ asset('filter/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('filter/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('filter/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('filter/js/custom.js') }}"></script>
  <script src="{{ asset('filter/js/jquery-ui.js') }}"></script>

</html>

<!-- http://html.lionode.com/healthcare/hc001/ -->