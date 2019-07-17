
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
                     <h1><a class="" href="home">Ice milk<span>Tasty cream</span></a></h1>
               </div>
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ice Cream Store
                <a href="/cart"><img align="right" src="/images/add.jpg"></a></div>

            
            </div>
            

       
               
              
        </div>
    </div>
    
</div>
</div>


<div class="container">
    

<div class="container">
<?php
 $product = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c, 
 tbl_icecreams as d , tbl_prizes as e where d.pid=e.pid AND d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid");
?>
 <div class="row">
@isset($product)
@foreach($product as $ice)

   
        <div class="col-md-4 col-sm-3">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                    <img class="pic-1" src= "{{ asset('/images/icecreams/'.$ice->filename.'') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$ice->recipe}}</a></h3>
                    <div class="price">Rs. {{$ice->prize}}
                        <!-- <span>{{$ice->prize}}</span> -->
                    </div>
                </div>
                <ul class="social">
                    <!-- <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li> -->
                    <!-- <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li> -->
                    <li><a href="/single?pid={{$ice->pid}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        @endforeach
        @endisset  
       
    </div>
</div>
<hr>


          
           

            
           </div> 
@endsection
