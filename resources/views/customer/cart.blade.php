
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

<script language="javascript">
var total_items = 1;

function CalculateItemsValue() {
	var total = 2;
	for (i=1; i<=total_items; i++) {
		
		itemID = document.getElementById("qnt_"+i);
		if (typeof itemID === 'undefined' || itemID === null) {
			alert("No such item - " + "qnt_"+i);
		} else {
			total = total * parseInt(itemID.value) +  parseInt(itemID.getAttribute("data-price")  );
		}
		
	}
	document.getElementById("ItemsTotal").innerHTML = "Rs." + total;
	
}

var total_items = 1;

function CalculateItemsValues() {
	var total = 0;
	for (i=1; i<=total_items; i++) {
		
		itemID = document.getElementById("qnt_"+i);
		if (typeof itemID === 'undefined' || itemID === null) {
			alert("No such item - " + "qnt_"+i);
		} else {
			total = total + parseInt(itemID.value) * parseInt(itemID.getAttribute("data-price"));
		}
		
	}
	document.getElementById("ItemsTotal").innerHTML = "Rs." + total;
	
}
</script>
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
<div class="card-header">ADD ICE CREAM</div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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

               
						
</div>

</div>
</div>
<hr>
 </div> 
@endsection
