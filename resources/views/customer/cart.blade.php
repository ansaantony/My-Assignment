
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
<div class="card-header">ICE CREAM CART</div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
  </div>
</div>
<div class="container">

<div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        

                        <div class="cart-table clearfix">
                      

  <table class="table table-responsive">
 <thead>
 <tr>

 <th>Product</th>
 <th>Quantity</th>
 <!-- <th>Product Name</th> -->
 <th>Price</th>
 <th>Action</th>
 
 </tr>
 </thead>
 <?php 
 $total = 0;
  $count=1; 
 ?>
 

            @foreach($cart as $row)

             <?php $total += $row->total; 
         ?>
 
            
           
 <tbody>
 <tr class="rem1">
     
 <!-- <td class="invert">{{$count++}}</td> -->
 <td class="invert-image"><a href="/single?pid={{$row->pid}}">
 <img style="display:block;" width="20%" height="15%" 
 src="{{ asset('/images/icecreams/'.$row->filename.'') }}"></a></td>

 <td class="invert">
                           <div class="quantity">
                              <div class="quantity-select"  id="quan">
                                 
                                 <div class="entry value">
                                <center>    <span>{{$row->quantity}}</span> </center>
                                 </div>
 <input type="hidden" name="id" value="{{$row->pid}}"/>
                              </div>
                           </div>
                        </td>
                              
 
 
 </div>
 </div>
 </td>
 <td class="invert" id="tot"  >Rs.{{$row->total}}</td>
 

 
 </div>
 </td>
 
                           <div class="rem">
 
                          
 <td > 
  <button class="submit check_out btn" > <a href="{{url('/delete-product/'.$row->pid)}}" class="submit">Remove</a>
   </div> </Button></td>
 
 </div> 
 </div>
  </td>
 </tr>
 </form>
 
 </tbody>
 @endforeach

        
 
 </table>
 </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5> <br>
                          
                            
                               <span>Total:</span> <span> <td>Rs.{{$total}}</td><br>
                               <td class="invert" id="tot"  >Collect It From Your Nearest Store
 </td>
  </span>
                             
   </span>
                           

                    </div>
                </div>
            </div>
        </div>
    </div>
           
						
</div>

</div>
</div>
<hr>
 </div> 
@endsection
