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
                        
                          <!-- <a href="/users" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>USERS</a>
                          <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Notes</a><br>  -->
                          <!-- <a href="/pics" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>PHOTOS</a> --> 
                          <!-- <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a> -->
                        </div>
                    </div>
                  
                </div>
        <div class="col-md-8">
        
            <div class="card">
            <div class="card-header">ADD RECIPE</div><br>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <form action="/recipe" method="POST">
@csrf
<label>
<p class="label-txt">Add New Recipe</p>
<input type="text" class="input"  id="recipe" name="recipe" required="" >

<div class="line-box">
  <div class="line"></div>
</div>
</label>
<button type="submit">Submit</button>
</form>
</div>



        <div class="card">
        <div class="card-header">ADD RECIPE SHAPE</div><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
    <form action="/shape" method="POST">
@csrf
<label>   
<select class="input" id="rid" name="rid" required="">
<option >Select Cream Recipe</option>
<?php

$st1=DB::select("SELECT * FROM `tbl_recipe`");
foreach($st1 as $row)
{
$rid= $row->rid;
?>
<option value="<?php echo $rid; ?>"><?php echo $row->recipe; ?></option>
 <?php
}
?> </select>
<label>
<p class="label-txt">Add Shape of Recipe</p>
<input type="text" class="input"  id="shape" name="shape" required="" >

<div class="line-box">
  <div class="line"></div>
</div>
</label>
<button type="submit">Submit</button>
</form>
</div>



    
        <div class="card">
        <div class="card-header">ADD RECIPE SIZE</div><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
    <form action="/size" method="POST">
@csrf
<label>
   
   <select name="recipe" class="input" id="recipe">
   <option>Select Cream Recipe</option>
           
   @foreach ($recipe as $key => $value)	
           <option value="{{ $key }}">{{ $value }}</option>
   @endforeach
               
               </select>
   <div class="line-box">
     <div class="line"></div>
   </div>
 </label>
 <label>
   
    <select name="shape" class="input" id="shape">>
   <option>Select Cream Shape</option>
     <option></option>
	</select>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
<div class="line-box">
 <div class="line"></div>
</div>
</label>
<label>
<p class="label-txt">Add Shape of Recipe</p>
<input type="text" class="input"  id="size" name="size" required="">

<div class="line-box">
  <div class="line"></div>
</div>
</label>
<button type="submit">Submit</button>
</form>
</div>
</div>
</div>

</div>

      
       
@endsection
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        
    }
});

    $(document).ready(function() {
        $('select[name="recipe"]').on('change', function() {
            var rID = $(this).val();
            if(rID) {
                $.ajax({
                    url: '/createrecipe/ajax/'+rID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="shape"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="shape"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="shape"]').empty();
            }
        });
    });
    </script>