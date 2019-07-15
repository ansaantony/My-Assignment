
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
   </head>
   <body>
  
      <div class="main-top" id="home">
         <!-- header -->
        
         <div class="headder-top">
    
            <div class="container-fluid">
               <!-- nav -->

               <nav >
                  <div id="logo">
                     <h1><a class="" href="/">Ice milk<span>Tasty cream</span></a></h1>
               </div>
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="/">Home</a></li>
                   
                   
            @if (Route::has('login'))
               
                    @auth
                    <li class="mx-lg-3 mx-md-2 my-md-0 my-1"> <a href="{{ url('/home') }}">Home</a> </li>
                    @else
                    <li class="mx-lg-3 mx-md-2 my-md-0 my-1"> <a href="{{ route('login') }}">Login</a> </li>
                   @if (Route::has('register'))
                    <li class="mx-lg-3 mx-md-2 my-md-0 my-1">   <a href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif

                  </ul>
               </nav>
               <!-- //nav -->
            </div>
           

            
         </div> 
         <!-- //header -->
         <!-- banner -->
         <div class="slider-img one-img">
            <div class="container">
               <div class="slider-info">
                  <div class="row">
                     <div class="col-lg-7 txt-caption">
                        <div class="binner-mid">
                           <h4>Awesome Tasty  ice cream</h4>
                        </div>
                       
                     </div>
                     <div class="col-lg-5 register">
                     </div>
                  </div>
               </div>
               <div class="banner-main">
         <div class="banner-bottom">
            <div class="container">
               <div class="row w3layout-abt-info text-center">
                  <div class="col-lg-4 col-md-6 col-sm-6 abut-list-w3layouts p-0 color-four">
                     <div class="abtr-inner-sub">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        <div class="abt-icon-list-wls mt-3">
                           <h4>Cherry Vanilla</h4>
                          
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 abut-list-w3layouts p-0 color-one">
                     <div class="abtr-inner-sub">
                        <span class="fa fa-smile-o" aria-hidden="true"></span>
                        <div class="abt-icon-list-wls mt-3">
                           <h4>Chocolate</h4>
                          
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 abut-list-w3layouts p-0 color-two">
                     <div class="abtr-inner-sub">
                        <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                        <div class="abt-icon-list-wls mt-3">
                           <h4>Butter Pecan</h4>
                        
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
            </div>
            
         </div>
         
      </div>
      
      </div>
      
      <!-- //banner -->
     
   
      
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-3 col-md-6 footer-left-grid">
                  <div class="footer-w3layouts-head">
                     <h2><a href="index.html">Ice Milk</a></h2>
                  </div>
                  <div class="mb-3 pt-lg-4 pt-3 footer-address">
                     <h4>Get In Touch</h4>
                    
                 
                  <div class="mb-3 footer-address">
                   
                     <div class="pt-2 footer_grid_left">
                     <p>Ansa Antony
                        </p>
                        <p><a href="mailto:info@example.com">ansaantony001@gmail.com</a> 
                        </p>
                        <p>+91 9605648387</p>
                     </div>
                  </div>
                  </div>
               </div>
              
              
            </div>
            <div class="bottem-wthree-footer text-center pt-lg-4 pt-3">
               <p> 
                  © 2019 ice milk. All Rights Reserved 
               </p>
            </div>
            <!-- move icon -->
            <div class="text-center">
               <a href="#home" class="move-top text-center mt-3"></a>
            </div>
            <!--//move icon -->
         </div>
      </footer>
      <!--// footer -->
     
   </body>
</html>