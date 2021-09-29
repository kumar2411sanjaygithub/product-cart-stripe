<!doctype html>

<html>
<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Cart</title>
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
<style>
body{margin-top:20px;}
select.form-control:not([size]):not([multiple]) {
    height: 44px;
}
select.form-control {
    padding-right: 38px;
    background-position: center right 17px;
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNv…9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
    background-repeat: no-repeat;
    background-size: 9px 9px;
}
.form-control:not(textarea) {
    height: 44px;
}
.form-control {
    padding: 0 18px 3px;
    border: 1px solid #dbe2e8;
    border-radius: 22px;
    background-color: #fff;
    color: #606975;
    font-family: "Maven Pro",Helvetica,Arial,sans-serif;
    font-size: 14px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.shopping-cart,
.wishlist-table,
.order-table {
    margin-bottom: 20px
}

.shopping-cart .table,
.wishlist-table .table,
.order-table .table {
    margin-bottom: 0
}

.shopping-cart .btn,
.wishlist-table .btn,
.order-table .btn {
    margin: 0
}

.shopping-cart>table>thead>tr>th,
.shopping-cart>table>thead>tr>td,
.shopping-cart>table>tbody>tr>th,
.shopping-cart>table>tbody>tr>td,
.wishlist-table>table>thead>tr>th,
.wishlist-table>table>thead>tr>td,
.wishlist-table>table>tbody>tr>th,
.wishlist-table>table>tbody>tr>td,
.order-table>table>thead>tr>th,
.order-table>table>thead>tr>td,
.order-table>table>tbody>tr>th,
.order-table>table>tbody>tr>td {
    vertical-align: middle !important
}

.shopping-cart>table thead th,
.wishlist-table>table thead th,
.order-table>table thead th {
    padding-top: 17px;
    padding-bottom: 17px;
    border-width: 1px
}

.shopping-cart .remove-from-cart,
.wishlist-table .remove-from-cart,
.order-table .remove-from-cart {
    display: inline-block;
    color: #ff5252;
    font-size: 18px;
    line-height: 1;
    text-decoration: none
}

.shopping-cart .count-input,
.wishlist-table .count-input,
.order-table .count-input {
    display: inline-block;
    width: 100%;
    width: 86px
}

.shopping-cart .product-item,
.wishlist-table .product-item,
.order-table .product-item {
    display: table;
    width: 100%;
    min-width: 150px;
    margin-top: 5px;
    margin-bottom: 3px
}

.shopping-cart .product-item .product-thumb,
.shopping-cart .product-item .product-info,
.wishlist-table .product-item .product-thumb,
.wishlist-table .product-item .product-info,
.order-table .product-item .product-thumb,
.order-table .product-item .product-info {
    display: table-cell;
    vertical-align: top
}

.shopping-cart .product-item .product-thumb,
.wishlist-table .product-item .product-thumb,
.order-table .product-item .product-thumb {
    width: 130px;
    padding-right: 20px
}

.shopping-cart .product-item .product-thumb>img,
.wishlist-table .product-item .product-thumb>img,
.order-table .product-item .product-thumb>img {
    display: block;
    width: 100%
}

@media screen and (max-width: 860px) {
    .shopping-cart .product-item .product-thumb,
    .wishlist-table .product-item .product-thumb,
    .order-table .product-item .product-thumb {
        display: none
    }
}

.shopping-cart .product-item .product-info span,
.wishlist-table .product-item .product-info span,
.order-table .product-item .product-info span {
    display: block;
    font-size: 13px
}

.shopping-cart .product-item .product-info span>em,
.wishlist-table .product-item .product-info span>em,
.order-table .product-item .product-info span>em {
    font-weight: 500;
    font-style: normal
}

.shopping-cart .product-item .product-title,
.wishlist-table .product-item .product-title,
.order-table .product-item .product-title {
    margin-bottom: 6px;
    padding-top: 5px;
    font-size: 16px;
    font-weight: 500
}

.shopping-cart .product-item .product-title>a,
.wishlist-table .product-item .product-title>a,
.order-table .product-item .product-title>a {
    transition: color .3s;
    color: #374250;
    line-height: 1.5;
    text-decoration: none
}

.shopping-cart .product-item .product-title>a:hover,
.wishlist-table .product-item .product-title>a:hover,
.order-table .product-item .product-title>a:hover {
    color: #0da9ef
}

.shopping-cart .product-item .product-title small,
.wishlist-table .product-item .product-title small,
.order-table .product-item .product-title small {
    display: inline;
    margin-left: 6px;
    font-weight: 500
}

.wishlist-table .product-item .product-thumb {
    display: table-cell !important
}

@media screen and (max-width: 576px) {
    .wishlist-table .product-item .product-thumb {
        display: none !important
    }
}

.shopping-cart-footer {
    display: table;
    width: 100%;
    padding: 10px 0;
    border-top: 1px solid #e1e7ec
}

.shopping-cart-footer>.column {
    display: table-cell;
    padding: 5px 0;
    vertical-align: middle
}

.shopping-cart-footer>.column:last-child {
    text-align: right
}

.shopping-cart-footer>.column:last-child .btn {
    margin-right: 0;
    margin-left: 15px
}

@media (max-width: 768px) {
    .shopping-cart-footer>.column {
        display: block;
        width: 100%
    }
    .shopping-cart-footer>.column:last-child {
        text-align: center
    }
    .shopping-cart-footer>.column .btn {
        width: 100%;
        margin: 12px 0 !important
    }
}

.coupon-form .form-control {
    display: inline-block;
    width: 100%;
    max-width: 235px;
    margin-right: 12px;
}

.form-control-sm:not(textarea) {
    height: 36px;
}

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container padding-bottom-3x mb-1">
        <h2 style="text-align: center;">Shopping Cart</h2>
    <!-- Shopping Cart-->
    <div class="table-responsive shopping-cart">
        <!-- Items list with quantity and Price Start -->    
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $sum=0;@endphp
                @if(count($cartData)>0)
                @foreach($cartData as $cart)
                <tr>
                    <td>

                        @foreach($productData as $product)
                        @if($cart->product_id==$product['id'])
                        <div class="product-item">
                            <a class="product-thumb" href="#"><img src="@if(isset($product['image'])&& !empty($product['image'])){{$product['image']}} @else {{url('img/no-image.jpg')}} @endif" alt="Product"></a>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">{{$product['title']}}</a></h4>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </td>
                    <td class="text-center">
                        {{$cart->qty}}
                    </td>
                    <td class="text-center text-lg text-medium">{{$cart->total_price}}</td>
                    @php $sum=$cart->total_price+$sum;@endphp
                </tr>
                @endforeach
                @else
                <tr>
                    <th colspan="10" style="text-align: center;color: red;">No data found</th>
                </tr>
                @endif
            </tbody>
        </table>
        <!-- Items list with quantity and Price End -->            
    </div>
    <div class="shopping-cart-footer">
        <!-- Items Subtotal Start -->    
        <div class="column text-lg">Subtotal: <span class="text-medium">{{$sum}}</span></div>
        <!-- Items Subtotal End -->    
    </div>
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="{{url('/')}}"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="column">  
            @if($sum>0)
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="background-color:green">Buy Now</button>
            @endif
        </div>
    </div>
  <!-- User Information Modal Start-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Information</h4>
        </div>
        <form method="post" action="{{url('save-details')}}">
            @csrf
        <div class="modal-body">
          <input type="type" name="name" class="form-control" placeholder="Name" required="">
          <input type="hidden" name="price" class="form-control" value="{{$sum}}" >
          </br>
          <input class="form-control"  type="email" name="email" placeholder="email" required="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" style="background-color:green">Submit</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  <!-- User Information Modal End-->

</div>
</body>
</html>