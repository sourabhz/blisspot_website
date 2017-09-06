<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="/web/css/find_food.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

     <link rel="stylesheet" href="/web/font-awesome/css/font-awesome.min.css">
  
  </head>

<body>
   <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="background-color: #3794eb">
         <a class="navbar-brand" href="/index.php"><font size="5">PictureTowns</font></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
             <li class="nav-item active">
               <a class="btn btn-space btn-primary" href="#" role="button">Get The App</a>
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

   <div class="food_item">
       <div class="search">
                  <form class="form-inline">
                      <label><h5>Search for food</h5></label>
                      <input class="form-control mr-sm-2" type="text" placeholder="Search by tags,name..." aria-label="Search">
                      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                 </form>
       </div>
   </div>

   <div class="search_results">
      
   </div>

   <div id="map-container">
        <div id="map">
        </div>
   </div>

         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9W_bN0Dh0bood-l-D3YU1wrXQD2d4I-c&callback=initMap">
    </script>

</body>
</html>