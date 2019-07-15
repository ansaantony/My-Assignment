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
                        
                        
                        </div>
                    </div>
                  
                </div>
        <div class="col-md-8">
        
            <div class="card">
            <div class="card-header">ADD ICE CREAM</div>
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
@isset($st)
                @foreach($st as $ice)
            <form action="{{url('/edit/'.$ice->pid)}}" method="POST" >
    @csrf
  
    <label>
    
  <select class="input" id="rid" name="recipe">
  <option>{{$ice->recipe}}</option>
     <?php
 
 $st1=DB::select("SELECT * FROM `tbl_recipe`");
 foreach($st1 as $row)
 {
	$rid= $row->rid;
	?>
	<option value="<?php echo $rid; ?>"><?php echo $row->recipe; ?></option>
	 <?php
    }
    ?>
      </select>
    
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <select name="shape" class="input" id="shape">>
    <option>{{$ice->shape}}</option>
       <option></option>
	</select>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
  
  <select name="size" class="input" id="size">>
  
 <option>{{$ice->size}}</option>
                
                
     <option></option>
	</select>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
    
  
  <label>
    <center>
    <img  style="display:block;" width="50%" height="45%" src="/images/icecreams/{{$ice->filename}}" /></center>
    
   
    
  </label>
  <button type="submit">Submit</button>
</form>
@endforeach
                          @endisset
 
    
               
              
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
    $(document).ready(function() {
        $('select[name="shape"]').on('change', function() {
            var sid = $(this).val();
            if(sid) {
                $.ajax({
                    url: '/createsize/ajax/'+sid,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="size"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="size"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="size"]').empty();
            }
        });
    });
    </script>