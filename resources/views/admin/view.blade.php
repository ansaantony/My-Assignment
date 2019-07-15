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
<script src="js/new.js"></script>
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
            <div class="card-header">VIEW ICE CREAMS</div>
           
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

            <table border=1>
				<thead>
					<tr >
						
						<th class="text-center">
							Recipe
						</th>
						<th class="text-center">
							Shape
						</th>
    					<th class="text-center">
							Size
						</th>
                        <!-- <th class="text-center">
							Image
						</th> -->
                        <th class="text-center">
							Actions
						</th>
                       
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
				</thead>
               
				<tbody>
                @isset($icecream)
                @foreach($icecream as $ice)
    				<tr id='addr0' data-id="0" class="hidden">
						
						<td data-name="mail">
						    <label>{{$ice->recipe}}</label>
						</td>
						<td data-name="mail">
                        <label>{{$ice->shape}}</label>
						</td>
    					<td data-name="mail">
                        <label>{{$ice->size}}</label>
						</td>
                        <!-- <td data-name="mail">
                        <img  style="display:block;" width="25%" height="15%" src="/images/icecreams/{{$ice->filename}}" />
						</td> -->
                        
                         
                        <td data-name="del">
                            <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove' >
                            <a  href="/Editt?pid={{$ice->pid}}"><span aria-hidden="true">Edit</span></button></a>
                        
                            <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'>
                   <a href="{{url('/delete-ice/'.$ice->pid)}}" class="submit"><span aria-hidden="true">Remove</span> </div> </Button></td>
                   </a>  </td>
						</th>
					</tr>@endforeach
                          @endisset
				</tbody> 
			</table>


          
               
              
        </div>
    </div>
    
</div>

          
           
@endsection