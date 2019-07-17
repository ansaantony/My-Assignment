
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
        if(itemID.value >=0 ){
		if (typeof itemID === 'undefined' || itemID === null || itemID <= 0 ) {
			alert("No such item - " + "qnt_"+i);
		} else {
			total = total * parseInt(itemID.value) +  parseInt(itemID.getAttribute("data-price")  );
		}
    }
        else {
            alert("Enter Valid Number - " + "qnt_"+i);
        }
	}
	document.getElementById("ItemsTotal").innerHTML = "Rs." + total;
	
}

var total_items = 1;

function CalculateItemsValues() {
	var total = 0;
	for (i=1; i<=total_items; i++) {
		
		itemID = document.getElementById("qnt_"+i);
        if(itemID.value >=0 ){
		if (typeof itemID === 'undefined' || itemID === null || itemID <= 0 ) {
			alert("No such item - " + "qnt_"+i);
		} else {
			total = total + parseInt(itemID.value) * parseInt(itemID.getAttribute("data-price"));
		}
        }
        else {
            alert("Enter Valid Number - " + "qnt_"+i);
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
    
    <div class="card-header">ADD TO CART
    <a href="/cart"><img align="right" src="/images/add.jpg"></a></div></div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
                            <form  method="post" action="/cartt">@csrf
                            <div class="cart-btn d-flex mb-50">
                            @if($row->shape == 'Cup')        
                            <p>Quarter  : </p>
                                    <div class="quantity">
                                    <tr>
		<td>Item A</td>
		<td>
		<input name="qnt_1" type="text" min="1" max="100" id="qnt_1" value="" size="3" data-price="{{$row->prize}}" onkeyup="CalculateItemsValue()" /></td>
		<td>{{$row->prize}}</td>
	</tr>
	
    <tr>
		<td bgcolor="#CCCCCC">&nbsp;</td>
		<td align="right" bgcolor="#CCCCCC"><strong><br>Total:<div id="ItemsTotal">Rs.0</div></strong></td>
	</tr>
    <input type="hidden" value=" <?php echo"<script>document.writeln(total);</script>"; ?> " id="total">
                                    </div>   

     @else
     <p>Quantity  :</p>
     <div class="quantity">
      <tr>
		<td>Item A</td>
		<td>
		<input name="qnt_1" type="text" min="1" max="100" id="qnt_1" value="" size="3" data-price="{{$row->prize}}" onkeyup="CalculateItemsValues()" required=" "/></td>
		<td>{{$row->prize}}</td>
	</tr>
	
    <tr>
		<td bgcolor="#CCCCCC">&nbsp;</td>
		<td align="right" bgcolor="#CCCCCC"><strong><br>Total:<div id="ItemsTotal">Rs.0</div></strong></td>
	</tr>
    <input type="hidden" value=" <?php echo"<script>document.writeln(total);</script>"; ?> " id="total">
                                    </div>     
     @endif
                            <!-- Add to Cart Form -->
      </div>
     </div>
     <input type="hidden" value="{{$row->pid}}" name="pid">
     <?php
   $email = Auth::user()->email;
 $st=DB::select("select * from users where users.email='$email'");
  ?>
  @foreach($st as $rowwww)
   <input type="hidden"  name="id" value="{{$rowwww->id}}">
@endforeach
     <input type="hidden" value="{{$rowwww->id}}" name="id">
     <input type="hidden" id="prize" name="prize" value="{{$row->prize}}">
                        
    <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
   
                            </form>
                            <a href="/home"><button type="cancel" value="5" class="btn amado-btn">Cancel</button></a>
                        </div> @endforeach
                    </div>
                </div>   
            </div>
                                                         
        </div>
        <!-- Product Details Area End -->
    </div>
    
						
</div>

</div>
</div>
<hr>
 </div> 
@endsection
