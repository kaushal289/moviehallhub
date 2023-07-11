<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>PHP Page</title>
    <style>
    .navbar {
      background-color: #000000;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.8);
    }
    .navbar-brand {
      color: #ffffff;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .navbar-nav {
      margin-left: auto;
      
    }
    .middle{
      text-align: center;
    }
    .navbar-nav .nav-link {
      color: #ffffff !important;
      margin: 0 10px;
      border: 1px solid #ffffff;
      width: 80px; /* Set a fixed width for the buttons */
      border-radius: 30px;
      display: inline-block;
      text-align: center; /* Center align the text */
      line-height: 1.5; /* Adjust line-height as needed */
      transition: background-color 0.3s;
      font-size:large; /* Add a smooth transition effect */
    }
    .navbar-nav{
      color: black !important; /* Set the background color to green on hover */
    }
    .nav-link:hover {
      color: black !important;
      background-color: white; /* Set the background color to green on hover */
    }
    .navbar-toggler-icon{
        color: #ffffff !important;
    }
    .right{
      text-align: -webkit-right;
    }
    .carousel-item img {
      width: 100%;
      height: 80vh;
      background-size: cover;
      transition: transform 7s;
      
    }
    .carousel-item.active img {
      transform: scale(1.12); 

    }
    .carousel-inner{
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5), 0 6px 30px 0 rgba(0, 0, 0, 1);
    }
    .sliderimage{
      margin-top: 50px;
      padding:50px !important;

      
    }
    table.table-dark tr {
      border: 10px solid rgba(0, 0, 0, 1);
      padding: 100px !important;
      margin: 100px !important;
    }
    .imagtext{
      text-align: center;
    }
    body{
      background-image: linear-gradient(to top left, #003366, black);
    }
    .halltable{
      padding:60px !important;
      padding:60px !important;
    }
    
    .carousel-indicators > li {
      border-radius: 100%;
      height: 15px;
      width: 15px;
      margin: 20px;
      

    }
    .carousel-indicators .active {
    opacity: 1;
    background-color: rgba(0, 255, 0, 1) !important;
}
  </style>
  <script>
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 7000,
        // Slide interval in milliseconds (5 seconds)
      });
    });
  </script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <img src="images/logo.png" alt="Logo" height="50">
    <a class="navbar-brand" href="#">MOVIEHALLHUB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mx-auto middle">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hall</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <ul class="navbar-nav right">
        <li class="nav-item">
          <a class="nav-link" href="#">Signup</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="imageSlider" class="container-fluid carousel slide sliderimage" data-ride="carousel">

  <!-- Slides -->
  <div id="imageSlider" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
      <li data-target="#imageSlider" data-slide-to="1"></li>
      <li data-target="#imageSlider" data-slide-to="2"></li>
      <li data-target="#imageSlider" data-slide-to="3"></li>
    </ul>

    <!-- Slides -->
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="images/1.png" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="images/2.png" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="images/3.png" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="images/4.png" alt="Image 4">
      </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  
    <h1>
    <?php
        include('simple_html_dom.php');
        $html = str_get_html(file_get_contents("https://www.showtimenepal.com/p/now-showing.html"));
    ?>
    </h1>
    <div class="container-fluid halltable">
    <div class="row">
      <div class="col-md-12">
        
        <div class="table-responsive">
          <table class="table table-dark table-bordered">
            <thead>
              <tr>
                <th>Theater/Cinema Hall Name &amp; Location</th>
                <th>Contact Number</th>
                <th>Movie/Show Time</th>
                <th>Ticket Price/Special Offer</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td class="imagtext">
                <img src="images/bigmovies.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 6)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 15)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 8)->innertext;
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 9)->innertext;
                  $tdContent2 = $html->find('.MovieSchedule tr td', 13)->innertext;
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                  $tdContent2 = str_replace('Ticket Rate', '', $tdContent2);
                  
                  echo $tdContent1;
                  echo $tdContent2;
              ?>

                </td>
              </tr>
              <tr>
                <td class="imagtext">
                <img src="images/fcube.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 29)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 30)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 31)->innertext;
                     echo $html->find('.MovieSchedule tr td', 35)->innertext;
                     echo $html->find('.MovieSchedule tr td', 38)->innertext;
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 32)->innertext;
                  
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>

                </td>
              </tr>
              <tr>
                <td class="imagtext">
                <img src="images/fcube.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 29)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 30)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 31)->innertext;
                     echo $html->find('.MovieSchedule tr td', 35)->innertext;
                     echo $html->find('.MovieSchedule tr td', 38)->innertext;
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 32)->innertext;
                  
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>

                </td>
              </tr>
              <tr>
                <td class="imagtext">
                <img src="images/qcinemas.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 101)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 102)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 31)->innertext;
                     echo $html->find('.MovieSchedule tr td', 35)->innertext;
                     echo $html->find('.MovieSchedule tr td', 38)->innertext;
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 32)->innertext;
                  
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
