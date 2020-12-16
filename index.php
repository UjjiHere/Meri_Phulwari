<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>



<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>:: Meri Phulwari | Home :: </title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Charmonman:700&amp;subset=latin-ext" rel="stylesheet">

   </head>
   <body>
    

      <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(91)7838056411</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">meriphulwarinoida@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                     <li>   </li>
                     <li>

                     	<div id="profile">
                     	             
                     	<b id="welcome" >Hi, <i><?php echo $login_session; ?></i></b>
					 <b id="logout"><a href="logout.php">Log Out</a></b>
					
 					    </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <img id="navimg" src="images/logonav.jpg">
                     <h1 id="h1"><a class="navbar-brand" href="landingpage.html">Meri Phulwari</a></h1>
                                       </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                          
                        </ul>
                        
                          
                     </div>
                  </div>
                  	        
 
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="landingpage.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.php" class="nav-link">Pots & Planters</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.php" class="nav-link">Garden Kits</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vertical Garden
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="shop.html">Accessories</a>
                           <a class="nav-link " href="shop.html">Good Luck Plants</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link " href="shop.html">Tool Bag</a>
                           <a class="nav-link " href="shop.html">Sprinkler</a>
                           <a class="nav-link " href="shop.html">Cutting Tools</a>
                           <a class="nav-link " href="shop.html">Plant Stands</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Pick The Best Tools For <br>Your Green Kids</h5>
                              <div class="bottom-info">
                                 <p></p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Sort Premium And Exclusive Kits <br> For Your Garden</h5>
                              <div class="bottom-info">
                                 <p></p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Best Plant Saplings And Accessories<br> For Your Garden</h5>
                              <div class="bottom-info">
                                 <p></p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Best Products</h3>
            <div class="row banner-below-w3l">
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/ceramic.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Designer Ceramic Pots</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/p1.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Premium Kit</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/selfp2.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Self Watering Kit</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/plant3.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Hanging Plants</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/pp1.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Baby Plants</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/kit1.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">All-In-One Kit</h4>
                  </div>
               </div>
               <div class="toys-grids-upper">
                  <div class="about-toys-off">
                     <h2>Get Up to <span>20% Off </span>On Selected Items</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //about -->
      <!--new Arrivals -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">New Arrivals</h3>
            <div class="slid-img">
               <ul id="flexiselDemo1">
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/rail.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Railing Pots</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/cp1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Designer Ceramic Pots</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/stand1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">6-Tier Steel Stand</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/kit11.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Multi-Purpose ToolKit</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/goodluck.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Good Luck Plants</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/sprinklers1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Sprinklers</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <!--//about -->
      <!--Customers Review -->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Customers Review</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Priya Singh
                                    </h4>
                                    <span class="mt-2">Delhi, India</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/b21.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  Best Ideal gift for plant lovers. <br>
                                    Good basic tools combo along with complementary lovely hat.  <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Mehta
                                    </h4>
                                    <span class="mt-2">Noida, Uttar Pradesh</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tower.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  
                                    This the Best Plant Tower Stand i have ever seen.<br> The material is very good.<br>
                                    It looks very cute :* Thanks Meri-Phulwari <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Bobby Kumar
                                    </h4>
                                    <span class="mt-2">New Delhi, India</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/b2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  Faster shipping...! 
                                    Got this item at an awesome price.<br> Thank you Meri Phulwari Team...! :) <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Akshita Gupta
                                    </h4>
                                    <span class="mt-2">Noida, Uttar Pradesh</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  Premium Quality steel tools at afordable price, only because of you meri phulwari.
                                    <br>
                                    Great work done!  <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Rahul Jain 
                                    </h4>
                                    <span class="mt-2">Delhi, India</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span> This 9 piece garden kit is all you need. 
                                    <br> I bought this kit during the Blockbuster Sale.
                                    <br> Loving It. <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/tp3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sanjay Malhotra 
                                    </h4>
                                    <span class="mt-2">Delhi, India</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/b1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>Bought these Good Luck Plants for my Wife along with garden gloves. <br>
                                    The products are amazing, gloves fits very well, perfect size.<br>
                                    No Complaints at all. <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//Customers Review -->
      <!-- Product-view -->
      <section class="product py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Latest Kits</h3>
            <div class=" img-toy-w3l-top">
            </div>
            <div class="mt-lg-4 mt-3 product-info-img">
               <p>Basic Regular Premium Quality Garden Tools with basic Flower Pots and Gardening Gloves (Brown Shade). 
               </p>
               <div class="clients_more-buttn">
                  <a href="shop.html">Shop Now</a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 img-toy-w3l-left">
                  <div class="toys-img-one">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p><b><em>Stunning Red Anthurium,</em></b> heart shaped leaves and red heart flower makes a stunning gift for your loved ones. Exotic and contemporary, this plant is a perfect addition to your home and office.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 img-toy-agile-right">
                  <div class="toys-img-one-two">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p><b><em>Indoor Good Lucky Plants</em></b>, beautiful multi-color lucky plants along with Classical Shovel, Rake, Spade and Complementary Hat.
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div>
                  <div class="toys-img-one-three">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p><b><em>Coral Bells</em></b> are perennial plants that are priced for their beautiful leaves that provide color all year long. 
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//Product-view-->
      <!--//Product-view-->
      <section class="premium py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Premium Tool kits</h3>
            <div class="row">
               <div class="col-lg-6 agileits-toys-left"></div>
               <div class="col-lg-6 agileits-toys-right">
                  <div class="sub-agile-info-toys">
                     <p><b><em>Stainless Stand Premium Class Shovel, Rake, Spade   (3 piece).</em></b>
                      <br>* Light Weight. <br>
 * Ideal for kinds of works including pruning branches, weeding, digging, loosening soil, transplanting, aerating and more.
all you need to use when gardening outside or tending to indoor plants. <br>
 * Perfect for novice to experienced gardeners as the kit includes the 3 hand tools.  
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-lg-4 mt-md-4 mt-3">
               <div class="col-lg-6 agileits-toys-right">
                  <div class="sub-agile-info-toys">
                     <p><b><em>Stainless Stand Premium Class Shovel, Rake, Spade    (3 piece).</em></b>
                      <br>* Light Weight. <br>
 * Ideal for kinds of works including pruning branches, weeding, digging, loosening soil, transplanting, aerating and more.
all you need to use when gardening outside or tending to indoor plants. <br>
 * Perfect for novice to experienced gardeners as the kit includes the 3 hand tools. 
                     </p>
                     <div class="clients_more-buttn ">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 agileits-toys-left"></div>
            </div>
         </div>
      </section>
      <!--Product-about-->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">THE VISION AND MISSION</h3>
            <div class="about-products-w3layouts">
               <p>
               </p>
               <p class="my-lg-4 my-md-3 my-3">
<b><em>Vision :</em></b>
<br>
To make this world a Greener Place.<br>

<b><em>Mission :</em></b>
<br>

To make plants and other accessories available at your doorstep within
affordable prices. The company is registered in India as per govt rules and
regulations.
               </p>
            </div>
         </div>
      </section>
      <!--//Product-about-->
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.0677694476776!2d77.31587931508315!3d28.65768943240795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb164ba0330f%3A0x80a36f4f99cf573f!2sShreshtha+Vihar%2C+Anand+Vihar%2C+Delhi%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1544865208007" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>Plot No.-123,<br>Shreshtha Vihar, Delhi-110092
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(91)7838056411<br>+(011)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">meriphulwarinoida@gmail.com</a>
                     <br><a href="mailto:info@example.com">meriphulwari2@gmail.com</a>
                  </p>
               </div>
            </div>
         </div>
       </div>
      </section>
      <!--//subscribe-address-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch With Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">Join the Conversation. Sign up to receive Emails for Special Offers, New Products, and Blockbuster Deals.  
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Meri-Phulwari. All Rights Reserved | Design by <a href="#" target="_blank">Ujjwal Malhotra</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>

                           <button type="submit" class="btn subscrib-btnn"><a href="signup.html">Register</a></button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
            var items, len, i;
         
            if (this.subtotal() > 0) {
               items = this.items();
         
               for (i = 0, len = items.length; i < len; i++) {}
            }
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
               auto: true,
               pager:false,
               nav:true ,
               speed: 900,
               namespace: "callbacks",
               before: function () {
                  $('.events').append("<li>before event fired.</li>");
               },
               after: function () {
                  $('.events').append("<li>after event fired.</li>");
               }
            });
         
         });
      </script>
      <!--// responsiveslides banner-->    
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
            $("#flexiselDemo1").flexisel({
               visibleItems: 3,
               animationSpeed: 3000,
               autoPlay:true,
               autoPlaySpeed: 2000,          
               pauseOnHover: true,
               enableResponsiveBreakpoints: true,
               responsiveBreakpoints: { 
                  portrait: { 
                     changePoint:480,
                     visibleItems: 1
                  }, 
                  landscape: { 
                     changePoint:640,
                     visibleItems:2
                  },
                  tablet: { 
                     changePoint:768,
                     visibleItems: 2
                  }
               }
            });
            
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 900);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear'
            };
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>