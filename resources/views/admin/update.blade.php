<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Ice milk</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <link href="css1/styledmin.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
     </div><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   </head>
   <body>
  
      <div class="main-top" id="home">
         <!-- header -->
        
         <div class="headder-top">
    
            <div class="container-fluid">
               <!-- nav -->

               <nav >
                  <div id="logo">
                     <h1><a class="" href="/home">Ice milk<span>Tasty cream</span></a></h1>
               </div>
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="panel-body">
   
                    <div class="row">
                        <div class="col-xs-6 col-md-6"> <br>
                        <a href="/home" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>HOME</a>
                          <a href="/add" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>ADD +</a>
                          <a href="/view" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>VIEW</a><br> 
                          <a href="/update" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>UPDATE</a>
                          <a href="/view" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>DELETE</a><br> 
                        
                         
                        </div>
                    </div>
                  
                </div>
        <div class="col-md-8">
        
            <div class="card">
            <div class="card-header">UPDATE PRIZE</div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

            
  
    @isset($recipe)
    @foreach($recipe as $ice)
    <form action="{{url('/updateprize/'.$ice->rid)}}" method="POST">
    @csrf
  <label>
  <p class="label-txt">Amount</p>
    <input type="label" class="input" value="{{$ice->recipe}}" id="recipe" name="recipe" readonly >
   <div class="line-box">
     <div class="line"></div>
   </div>
 </label>
 <label>
 <p class="label-txt">Shape</p>
    <input type="text" class="input"  id="shape" name="shape" value="{{$ice->shape}}" readonly >

    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
<label>
<p class="label-txt">Size</p>
    <input type="text" class="input"  id="size" name="size" value="{{$ice->size}}" readonly>
    <input type="hidden"   id="pid" name="pid" value="{{$ice->pid}}" readonly>
    <input type="hidden"   id="rid" name="rid" value="{{$ice->rid}}" readonly>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <label>
    <p class="label-txt">Enter Amount</p>
    <input type="text" class="input"  id="prize" name="prize" required="" >
   
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">Submit</button>
  </form>
  @endforeach
  @endisset

       
        
               
              
        </div>
    </div>
    
</div>

          
           
@endsection

</body>