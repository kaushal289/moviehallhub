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
      background-color: #000000;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(255, 255, 0, 0.8);
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
  background-color: #000;
  color: #fff;
  padding-left: 50px;
  padding-right: 50px;
  padding-top: 50px;
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
  </style>
  <script>
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 7000,
        // Slide interval in milliseconds (5 seconds)
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
        <li class="nav-item homeactive">
          <a class="nav-link" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hall.php">Hall</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <ul class="navbar-nav right">
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
<div class="col-md-12 container">
  <div class="row justify-content-center">
    <div class="col-md-6 justify-content-center">
      <div class="input-group ">
        <input type="text" id="searchInput" class="form-control" placeholder="Search by any text">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
      </div>
    </div>
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
              <br>
              <div class="bookbutton">
                  <a href="https://bigmovies.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
                </div>
                
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
    console.log(user)
    var dropdown = document.createElement('div');
    dropdown.classList.add('dropdown');

    var dropdownButton = document.createElement('button');
    dropdownButton.classList.add('btn', 'btn-secondary', 'dropdown-toggle');
    dropdownButton.setAttribute('type', 'button');
    dropdownButton.setAttribute('id', 'dropdownMenuButton');
    dropdownButton.setAttribute('data-toggle', 'dropdown');
    dropdownButton.setAttribute('aria-haspopup', 'true');
    dropdownButton.setAttribute('aria-expanded', 'false');
    dropdownButton.textContent = 'Dropdown';

    var dropdownMenu = document.createElement('div');
    dropdownMenu.classList.add('dropdown-menu');
    dropdownMenu.setAttribute('aria-labelledby', 'dropdownMenuButton');

    var profileLink = document.createElement('a');
    profileLink.classList.add('dropdown-item');
    profileLink.setAttribute('href', '#');
    profileLink.textContent = 'Profile';

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
    console.log("no user")
    document.querySelector('.navbar-nav.right').innerHTML = '<li class="nav-item"><a class="nav-link" href="login.html">Signup</a></li>';
  }
});




</script>

</body>
</html>
