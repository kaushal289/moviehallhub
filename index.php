<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>PHP Page</title>
    <style>
    .navbar {
      background-color: rgba(0, 0, 0, 0.9);
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
      text-align: -webkit-left;
    }
    .carousel-item img {
      width: 100%;
      height: 80vh;
      background-size: cover;
      transition: transform 6s;
      
    }
    .carousel-item.active img {
      transform: scale(1.2);
      animation-name: zoom-effect;
      animation-duration: 6s;
      animation-fill-mode: forwards;

    }
    @keyframes zoom-effect {
      0% {
        transform: scale(1);
      }
      100% {
        transform: scale(1.2);
      }
    }
    .carousel-inner{
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5), 0 6px 30px 0 rgba(255, 255, 255, 1);
    }
    .sliderimage{
      margin-top: 50px;
      padding:50px !important;

      
    }
    table.table-dark tr {
      border: 3px solid rgba(0, 0, 0, 0.5);
      padding: 100px !important;
      margin: 100px !important;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    .imagtext{
      text-align: center;
    }
    body{
      background-image: linear-gradient(to top left, #003366, black);
    }
    .halltable{
      padding-left:60px !important;
      padding-right:60px !important;
      padding-top:20px !important;
      padding-bottom:10px !important;
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
.bookbutton{
  text-align: center;
  margin: 30px;
}
.footer {
            background-color: rgba(0, 0, 0, 0.9);
            box-shadow:20px 20px 50px 50px rgb(0, 0, 0);
  color: #fff;
  padding-left: 50px;
  padding-right: 50px;
  margin-top: 100px;
}

.footer h4 {
  color: #fff;
}

.footer p {
  color: #fff;
}

.social-media {
  list-style: none;
  padding: 0;
  display: flex;
  justify-content: center;
}

.social-media li {
  margin: 0 10px;
}

.social-media a {
  color: #fff;
  font-size: 20px;
}

.social-media a:hover {
  color: #aaa;
  transition: color 0.3s ease;
}

.footer hr {
  background-color: #fff;
  margin: 20px 0;
}

.footer p.text-center {
  margin: 10;
  font-size: 14px;

}
.follow{
  text-align: center;
}
.navbar-nav .homeactive .nav-link {
  border-color: green;
  border-width: 3px;
  color: green !important;

}
.dark-theme {
  color: rgba(0, 0, 0, 0.5);
  right: 0 !important;
}
#dropdownMenuButton{
  background-color: black !important;
}

.dropdown-menu {
  background-color: black;
 
}
.dropdown {
  right:0 !important;
  text-align: center;
}

.dropdown-item {
  color: #fff;
  right: 0px !important;
  
}

.dropdown-item:hover {
  background-color: #555;
}

.dropdown-menu-left {
  right: 0 !important;
}
.btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #000000;
    border-color: #171a1d;
    border-width: 5px;
    border-color: #343a40;
    font-size:x-large;
}
.sh{
  margin: 15px;
}
  </style>
  <script>
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 7000,
        
      });
    });
  </script>
  <script>
  $(document).ready(function() {
    $("#searchInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
  $(document).ready(function() {
    $("#searchInput1").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
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
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mx-auto middle">
        <li class="nav-item homeactive">
          <a class="nav-link" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hall.php">Hall</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.html">Help</a>
        </li>
      </ul>
    
      <div class="col-md-2">
      <ul class="navbar-nav right justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="login.html">Signup</a>
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
        <div class="pagination-buttons" style="text-align: center;">
            <button class="btn btn-dark active" id="todayBtn">Today</button>
            <button class="btn btn-dark" id="tomorrowBtn">Tomorrow</button>
          </div>
          <table class="table table-dark table-bordered today ">
          <div class="col-md-12 container">

              <h2 class="times today" style="text-align: center; color:white;">Today movies:</h2>
              <div id="current_date" class="today" style="text-align: center; color:white;"></div>
              <script>
                var currentDate = new Date();
                var formattedDate = currentDate.toDateString();
                document.getElementById("current_date").innerHTML = formattedDate;
              </script>
            <div class="row justify-content-center today">
              <div class="col-md-6 justify-content-center sh">
                <div class="input-group ">
                  <input type="text" id="searchInput" class="form-control" placeholder="Search by any text">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <thead>
              <tr>
                <th>Theater/Cinema Hall Name &amp; Location</th>
                <th>Contact Number</th>
                <th colspan="2">Movie/Show Time</th>
                <th>Ticket Price/Special Offer</th>
              </tr>
            </thead>
            <tbody>
              
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
                     
                 ?></td>
                 <td>
                 <?php
                    
                     echo $html->find('.MovieSchedule tr td', 35)->innertext;
                     echo $html->find('.MovieSchedule tr td', 38)->innertext;
                 ?>
                 </td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 32)->innertext;
                  
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>
              <br>
              <div class="bookbutton">
                  <a href="https://www.fcubecinemas.com/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>

                </td>
              </tr>
              <tr>
                <td class="imagtext">
                <img src="images/cine.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 20)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 21)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 22)->innertext;
                     
                   
                 ?></td>
                 <td><?php
                    
                     echo $html->find('.MovieSchedule tr td', 26)->innertext;
                   
                 ?></td>
                <td>
                  <p>At Cine Theater: Ticket price ranges from Nrs. 180 - Nrs. 600
                    <br>
                  At Cine Dine: Range from Nrs. 400 - Nrs. 900
                  </p>
                  <br>
              <div class="bookbutton">
                  <a href="https://cdcnepal.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>
                </td>
              </tr>
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
                </td>
                <tD>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 9)->innertext;
                  $tdContent2 = $html->find('.MovieSchedule tr td', 13)->innertext;
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                  $tdContent2 = str_replace('Ticket Rate', '', $tdContent2);
                  
                  echo $tdContent1;
                  echo $tdContent2;
              ?>
              <br>
              <div class="bookbutton">
                  <a href="https://bigmovies.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>
                
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
                     echo $html->find('.MovieSchedule tr td', 103)->innertext;
                    
                    
                 ?></td>
                 <td><?php
                    
                     echo $html->find('.MovieSchedule tr td', 107)->innertext;
                    
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 104)->innertext;
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>
              <br>
              <?php
                  echo $html->find('.MovieSchedule tr td', 108)->innertext;  
             ?>
             <br>
              <div class="bookbutton">
                  <a href="https://www.qscinemas.com/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>

                </td>
              </tr>
            </tbody>
          </table>
          <table class="table table-dark table-bordered tomorrow">
          <h2 class="times tomorrow" style="text-align: center; color:white;">Tomorrow movies:</h2>
          <div id="current_dates" class="tomorrow" style="text-align: center; color:white;"></div>
          <script>
            var currentDate = new Date();
            currentDate.setDate(currentDate.getDate() + 1); // Add 1 day to the current date
            var formattedDate = currentDate.toDateString();
            document.getElementById("current_dates").innerHTML = formattedDate;
          </script>
          <div class="row justify-content-center tomorrow">
              <div class="col-md-6 justify-content-center sh">
                <div class="input-group ">
                  <input type="text" id="searchInput1" class="form-control" placeholder="Search by any text">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <thead>
              <tr>
                <th>Theater/Cinema Hall Name &amp; Location</th>
                <th>Contact Number</th>
                <th colspan="2">Movie/Show Time</th>
                <th>Ticket Price/Special Offer</th>
              </tr>
            </thead>
            <tbody>
              
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
                     echo $html->find('.MovieSchedule tr td', 186)->innertext;
                   
                     
                 ?></td>
                 <td><?php
                    
                     echo $html->find('.MovieSchedule tr td', 190)->innertext;
                     
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 32)->innertext;
                  
                  
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>
              <br>
              <div class="bookbutton">
                  <a href="https://www.fcubecinemas.com/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>

                </td>
              </tr>
              <tr>
                <td class="imagtext">
                <img src="images/cine.jpg" alt="Image 4" height="200px">
                <br>

                <?php
                      echo $html->find('.MovieSchedule tr td', 20)->innertext;
                ?>
                </td>
                <td>
                <?php
                     
                      echo $html->find('.MovieSchedule tr td', 21)->innertext;
                  ?>
                </td>
                <td><?php
                     echo $html->find('.MovieSchedule tr td', 177)->innertext;
                    
                   
                 ?></td>
                 <td><?php
          
                     echo $html->find('.MovieSchedule tr td', 181)->innertext;
                   
                 ?></td>
                <td>
                  <p>At Cine Theater: Ticket price ranges from Nrs. 180 - Nrs. 600
                    <br>
                  At Cine Dine: Range from Nrs. 400 - Nrs. 900
                  </p>
                  <br>
              <div class="bookbutton">
                  <a href="https://cdcnepal.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>
                </td>
              </tr>
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
                </td>
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
              <br>
              <div class="bookbutton">
                  <a href="https://bigmovies.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>
                
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
                     echo $html->find('.MovieSchedule tr td', 258)->innertext;
                     
                    
                 ?></td>
                 <td><?php
              
                     echo $html->find('.MovieSchedule tr td', 262)->innertext;
                    
                 ?></td>
                <td>
                <?php
                  $tdContent1 = $html->find('.MovieSchedule tr td', 104)->innertext;
                  // Remove "Ticket Rate" from the content
                  $tdContent1 = str_replace('Ticket Rate', '', $tdContent1);
                
                  
                  echo $tdContent1;
                  
              ?>
              <br>
              <?php
                  echo $html->find('.MovieSchedule tr td', 108)->innertext;  
             ?>
             <br>
              <div class="bookbutton">
                  <a href="https://www.qscinemas.com/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
  <div class="container-fluid">
    <div class="col-md-12 row">
      <div class="col-md-6">
        <h4>About MovieHallHub</h4>
        <p>MovieHallHub is a leading online platform for movie ticket bookings. We provide information about movie showtimes, cinema halls, ticket prices, and more. Book your movie tickets with ease and enjoy the latest movies in town.</p>
      </div>
      <div class="col-md-2">
        <h4>Contact Us</h4>
        <p>Email: khanalkaushal9@gmail.com</p>
        <p>Phone: 9865558257</p>
        <p>Address: Kathmandu, Nepal</p>
      </div>
      <div class="col-md-4 follow">
        <h4>Follow Us</h4>
        <ul class="social-media">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
        <p class="text-center"> &copy; 2023 MovieHallHub. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
<script>
  
  const firebaseConfig = {
    apiKey: "AIzaSyClknweVKXCUP-dpumF8ySrvQu6TBYGHcs",
    authDomain: "moviehallhub-5be63.firebaseapp.com",
    databaseURL: "https://moviehallhub-5be63-default-rtdb.firebaseio.com",
    projectId: "moviehallhub-5be63",
    storageBucket: "moviehallhub-5be63.appspot.com",
    messagingSenderId: "42968964428",
    appId: "1:42968964428:web:b30d3825f1a50fd6dbc3e9",
    measurementId: "G-MGCRF3N36T"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);





  firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
   
    var dropdown = document.createElement('div');
    dropdown.classList.add('dropdown', 'dark-theme'); // Added 'dark-theme' class

    var dropdownButton = document.createElement('button');
    dropdownButton.classList.add('btn', 'btn-secondary', 'dropdown-toggle');
    dropdownButton.setAttribute('type', 'button');
    dropdownButton.setAttribute('id', 'dropdownMenuButton');
    dropdownButton.setAttribute('data-toggle', 'dropdown');
    dropdownButton.setAttribute('aria-haspopup', 'true');
    dropdownButton.setAttribute('aria-expanded', 'false');

    var profileIcon = document.createElement('i');
    profileIcon.classList.add('fa', 'fa-user'); // Replace with the appropriate icon class, e.g., Font Awesome
    dropdownButton.appendChild(profileIcon);

    var usernameSpan = document.createElement('span');
    usernameSpan.classList.add('username');
    dropdownButton.appendChild(usernameSpan);

    var dropdownMenu = document.createElement('div');
    dropdownMenu.classList.add('dropdown-menu', 'dropdown-menu-left'); // Added 'dropdown-menu-left' class
    dropdownMenu.setAttribute('aria-labelledby', 'dropdownMenuButton');

    var profileLink = document.createElement('a');
    profileLink.classList.add('dropdown-item');
    profileLink.setAttribute('href', 'profile.html'); // Link to the profile page
    profileLink.textContent = 'Profile';

    // Retrieve and display the username from the Realtime Firebase database
    firebase.database().ref('users/' + user.uid).once('value').then(function(snapshot) {
      var username = snapshot.val().username;
      usernameSpan.textContent = ' \t ' + username; // Add a space after the username
    });

    var logoutLink = document.createElement('a');
    logoutLink.classList.add('dropdown-item', 'logout');
    logoutLink.setAttribute('href', '#');
    logoutLink.textContent = 'Logout';

    dropdownMenu.appendChild(profileLink);
    dropdownMenu.appendChild(logoutLink);

    dropdown.appendChild(dropdownButton);
    dropdown.appendChild(dropdownMenu);

    document.querySelector('.navbar-nav.right').innerHTML = '';
    document.querySelector('.navbar-nav.right').appendChild(dropdown);

    document.querySelector('.navbar-nav.right .dropdown-menu .logout').addEventListener('click', function() {
      var confirmLogout = confirm("Are you sure you want to log out?");
      if (confirmLogout) {
        firebase.auth().signOut().then(function() {
          // Sign-out successful.
          console.log("Signed out");
          document.querySelector('.navbar-nav.right').innerHTML = '';
        }).catch(function(error) {
          // An error happened.
          console.log(error);
        });
      }
    });
  } else {
    // No user is signed in.
    console.log("no user");
    document.querySelector('.navbar-nav.right').innerHTML = '<li class="nav-item"><a class="nav-link" href="login.html">Signup</a></li>';
  }
});

  $(document).ready(function() {
    // Initially show the today table and hide the tomorrow table
    $('.today').show();
    $('.tomorrow').hide();

    // Handle click event for the "Today" button
    $('#todayBtn').click(function() {
      $('.today').show();
      $('.tomorrow').hide();
      $('#todayBtn').addClass('active');
      $('#tomorrowBtn').removeClass('active');
    });

    // Handle click event for the "Tomorrow" button
    $('#tomorrowBtn').click(function() {
      $('.today').hide();
      $('.tomorrow').show();
      $('#todayBtn').removeClass('active');
      $('#tomorrowBtn').addClass('active');
    });

    // Check the initial state and hide the "Tomorrow" table if "Today" button is active
    if ($('#todayBtn').hasClass('active')) {
      $('.tomorrow').hide();
    }
  });
</script>

    
</script>

</body>
</html>
