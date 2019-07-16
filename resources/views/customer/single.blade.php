
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Ice milk</title>
      <!--meta tags -->
      <meta charset="UTF-8">
     
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--booststrap-->
      <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css1/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css1/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="css1/cust.css" rel='stylesheet' type='text/css' media="all">
   </head>
   <body>
  
      <div class="main-top" id="home">
         <!-- header -->
        
         <div class="headder-top">
    
            <div class="container-fluid">
               <!-- nav -->

               <nav >
                  <div id="logo">
                     <h1><a class="" href="/chome">Ice milk<span>Tasty cream</span></a></h1>
               </div>
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ice Cream Store</div>

                </div>
            </div>
    </div>
  </div>
</div>
<div class="container">
@foreach($recipe as $row)
<div class="single-product-area section-padding-100 clearfix">
<div class="container-fluid">

            
            <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
        
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                           
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <a class="gallery_img" href="/images/icecreams/{{$row->filename}}">
                                <center>
    <img  style="display:block;" width="70%" height="75%" src="/images/icecreams/{{$row->filename}}" /></center>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
					
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line">Prize</div>
                                <p class="product-price">Rs.{{$row->prize}}</p>
                                <div class="line">Recipe</div>
                                <p class="product-price">{{$row->recipe}}</p>
                                <div class="line">Shape</div>
                                <p class="product-price">{{$row->shape}}</p>
                                <div class="line">Size</div>
                                <p class="product-price">{{$row->size}}</p>
                                
                                <h6></h6>
                                </a>
                               
                            </div>
                            <form class="cart clearfix" method="post" action="/cartt">@csrf
                            <div class="cart-btn d-flex mb-50">
                            @if($row->shape == 'Cup')        
                            <p>Quarter  : </p>
                                    <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); 
                                    var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                    <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" min="1" max="" required autocomplete="off" name="quantity" id="qty" value="" onChange="copy()"/>
                                     <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                     <i class="fa fa-caret-up" aria-hidden="true"></i></span>         
                             @else
                             <p>Quantity  :</p>
                                    <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty');
                                     var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                    <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                   <input type="number" min="1" max="" required autocomplete="off" name="quantity" id="qty" value="" onChange="copy()"/>
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                    <i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            @endif
                            <!-- Add to Cart Form -->
                           </div>
                        </div>
                              
                            <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form>
                        </div> @endforeach
                    </div>
                </div>   
            </div>
                                                         
        </div>
        <!-- Product Details Area End -->
    </div>
    
						
</div>
             
 <script>
 function copy()
{
	var qua=document.getElementById("qtr").value;
	var pr=document.getElementById("pr").value;
	var c=pr * qua;
	//alert(c);
	tot.value=c;
	//document.setElementById("tot").value=c;
	return c;
}
function copy()
{
	var qua=document.getElementById("qty").value;
	var pr=document.getElementById("pr").value;
	var c=pr * qua;
	//alert(c);
	tot.value=c;
	//document.setElementById("tot").value=c;
	return c;
}
</script>
</div>
</div>
<hr>
 </div> 
@endsection
