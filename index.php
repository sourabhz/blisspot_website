<?php

  
   require_once('/app/init.php');
          $sql = 'SELECT * from items order by likes DESC';
          $result = $db->query($sql);

            $top_food = array();
            while($top_f = mysqli_fetch_object($result)){
                   $top_food[] = $top_f;
            }
      
?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <!-- Required meta tags -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css" type="text/css">

     <link href="https://fonts.googleapis.com/css?family=Oxygen|Roboto|Mukta+Mahee" rel="stylesheet">

     <link rel="stylesheet" href="/web/font-awesome/css/font-awesome.min.css">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
  </head>
  <body>


        <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="background-color: #3794eb">
            <a class="navbar-brand" href="index.php"><font size="5">PictureTowns</font></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                <!-- Example single danger button -->
                  <div class="btn-group">
                       <button type="button" class="btn btn-space btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"        style="background-color: #3794eb !important
                               mt-0: 1 !important">
                                                    Gwalior
                       </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Indore</a>
                          <a class="dropdown-item" href="#">Bhopal</a>
                      </div>
                 </div>
             </li>
           </ul>
           <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                   <li class="nav-item active">
                       <a class="btn btn-space btn-primary" href="/web/php/for_restaurants.php" role="button">Add My Restaurant</a>
                   </li>
                   <li class="nav-item active">
                       <a class="btn btn-space btn-primary" href="#" role="button">Log In</a>
                   </li>
                   <li class="nav-item active">
                       <a class="btn btn-space btn-primary" href="#" role="button">Sign Up</a>
                   </li>
           </ul>
        </div>
      </nav>

  <div class="container-fluid">
       <div id="main_background_index" class="row" >
           <!--image index background-->
            <div id="container">
                 <div class="main_text">       
                      <p class="text-center"><h1>For a seamless wait-free<br> dining experience</h1></p>     
                 </div>
                 <div class="below_main_text">       
                 <p class="lead"><h3><font size="4">Get delicious choices, book a table and order your meal before you arrive at the restaurant.</font></h3></p>  </div>
                 <div class="find_food">       
                         <a class="btn btn-space btn-primary" href="/web/php/find_food.php" role="button"><font size="4">Find Food</font></a>
                         <div class="or"></div>
                         <a class="btn btn-space btn-primary" href="/web/php/find_food.php" role="button"><font size="4">Find Restaurants</font></a> 
                 </div>
           </div>
      </div>

      <div id="workflow" class="row">
           <div class="first col-sm-4">
               <div class="heading"><strong><h4>Find best food</h4></strong></div><div class="under_heading"><h6>Search for
                  name, kind of food, tags, places,etc.</h6></div>
               </div>
              <div class="first col-sm-4">
                    <div class="heading"><strong><h4>3 step process</h4></strong></div><div class="under_heading"><h6>Book a table, order food and pay online with &#8377; 0 service fee.</h6></div>
             </div>
             <div class="first col-sm-4">
                   <div class="heading"><strong><h4>Get PictureTowns hospitality</h4></strong></div><div class="under_heading"><h6>PictureTowns gurantee best customer experience and hospitality 
                   services in its restaurants.</h6></div>
             </div>
     </div>  

 <div class="wrapper">
 <h3>Trending food items in Gwalior</h3>
  <div class="caro" > 
    <?php foreach($top_food as $food):?>

      <div class="carousel">
      <div class="card">
        <img lazy-data="/app/Item_images/<?php echo $food->IMAGE_NAME?>.jpg" src="/app/Item_images/<?php echo $food->IMAGE_NAME?>.jpg">
         <div class="card-block">
           <h6 class="card-title"><strong>&#8377; <?php echo $food->PRICE?></strong>&nbsp;<font size="2"><?php echo $food->ITEM_NAME?></font>
          </h6>
             <div class="likes">
                  <i class="heart material-icons">favorite</i>
                 <h6><?php echo $food->LIKES?></h6>
           </div>
         </div>
        </div>
      </div> 

   <?php endforeach; ?>
  </div>   
 </div>  



      <div id="app" class="row">
           <div class="app_content col-sm-12">
               <div class="app_img">
                    <img src="/web/img/app_screenshot.png" height="550px" width="325px" />
               </div>   
                 <div class="app_elements">
                      <div class="container">     
                          <div class="heading_text">
                                <div>
                                    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div>
                                   <h3>How PictureTowns works</h3>
                                </div>
                          </div>

                          <div class="ins_app">
                               <div class="how_it_works"><img src="/web/img/one.png" height="54px" width="54px" /><h5>Browse best food in your city with PictureTowns.</h5></div>
                               <div class="how_it_works"><img src="/web/img/two.png" height="54px" width="54px"/><h5>Book a table and place your order.</h5></div>
                               <div class="how_it_works"><img src="/web/img/three.png" height="54px" width="54px"/><h5>Visit restaurant, tell your name and enjoy wait free dining experience.</h5></div>
                          </div>

                          <div class="get_android">
                             <div class="android"><i class="fa fa-android fa-2x" aria-hidden="true"></i><h5>Android App</h5></div>
                          </div>
                          <div class="text_link">
                             <div class="google_play"><img src="/web/img/google_play.png"></div>
                          </div>
                          <div class="text_link">
                          <div class="ins_desktop"><h6>We serve best with our App</h6></div>
                          </div>
                     </div>
             </div>
        </div>
  </div>
  <div id="site" class="row"> 
           <div id="con" class="container col-sm-3"> 
                 <div class="brand_name">
                              <a href="/index.php"><font size="6"><strong>PictureTowns</strong></font></a>
                 </div>
                 <div class="company_name">
                               <font size="2">2017 &#169; PictureTowns Worldwide Inc.</font>
                 </div>
           </div>  
           <div class="container col-sm-2"> 
                 <div class="list">
                                <div class="list-heading">PictureTowns</div>
                                <div class="list-item">
                                  <a href="/web/php/about_us.php">About Us</a>
                                </div>
                                <div class="list-item">
                                  <a href="/web/php/terms_of_service.php">Terms Of Service</a>
                                </div>
                                <div class="list-item">
                                  <a href="/web/php/privacy_policy.php">Privacy Policy</a>
                                </div>
                 </div>
           </div>  
           <div class="container col-sm-2"> 
                 <div class="list">
                                <div class="list-heading">PARTNER WITH US</div>
                                <div class="list-item">
                                  <a href="/web/php/for_restaurants.php">Add My Restaurant</a>
                                </div>
                                <div class="list-item">
                                  <a href="#">For Business</a>
                                </div>
                 </div>
           </div>  
           <div class="container col-sm-2"> 
                <div class="list">
                                <div class="list-heading">CONNECT WITH US</div>
                                 <div class="list-item">
                                  <a href="#">Contact Us</a>
                                </div>
                                 <div class="list-item">
                                  <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                  <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                                  <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                                </div>
                 </div>
           </div>  
           <div id="con_1" class="container col-sm-3"> 
                 <div  class="list">
                             <div class="android"><i class="fa fa-android fa-2x" aria-hidden="true"></i><h6>Android App</h6></div>
                 </div>
           </div>  
  </div>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
            $(document).ready(function(){
            $('.caro').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: false,
                draggable: false,
                mobileFirst: true,
                responsive: [
                            {
                              breakpoint: 1200,
                              settings: {
                                slidesToShow: 5,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 992,
                              settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 768,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                              }
                            },
                             {
                              breakpoint: 576,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 400,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000
                              }
                            },
                            {
                              breakpoint: 200,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000
                              }
                            }

                          ]
            });
          });
       /*   $('.lazy').slick({
          lazyLoad: 'ondemand',
          slidesToShow: 3,
          slidesToScroll: 1
           });  */
           
          $(window).resize(function () {
              $('.caro').slick('resize');
          });

          $(window).on('orientationchange', function () {
              $('.caro').slick('resize');
          });
  </script>


  </body>
</html>