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

    .middle {
      text-align: center;
    }

    .navbar-nav .nav-link {
      color: #ffffff !important;
      margin: 0 10px;
      border: 1px solid #ffffff;
      width: 80px;
      border-radius: 30px;
      display: inline-block;
      text-align: center;
      line-height: 1.5;
      transition: background-color 0.3s;
      font-size: large;
    }

    .navbar-nav {
      color: black !important;
    }

    .nav-link:hover {
      color: black !important;
      background-color: white;
    }

    .navbar-toggler-icon {
      color: #ffffff !important;
    }

    .right {
      text-align: -webkit-right;
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

    .follow {
      text-align: center;
    }

    .navbar-nav .hallactive .nav-link {
      border-color: green;
      border-width: 3px;
      color: green !important;
    }

    table.table-dark tr {
      border: 10px solid rgba(0, 0, 0, 1);
    }

    .halltable {
      padding-left: 60px !important;
      padding-right: 60px !important;
      padding-top: 100px !important;
      padding-bottom: 10px !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <img src="images/logo.png" alt="Logo" height="50">
    <a class="navbar-brand" href="#">MOVIEHALLHUB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mx-auto middle">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item hallactive">
          <a class="nav-link " href="hall.php"><b>Hall</b></a>
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
                  <h3>Information</h3>
                  BIG Movies formerly known as BIG Cinemas is one of the best Multiplex cinema halls of Nepal with a
                  superior Xenon Projection Systems, Crystal Clear DTS sound, luxurious comfort seats and a wide screen
                  viewing experience.

                  Attractions of Big Movies City Center: Food Counter, Pay Parking, Two Ticketing Counters. Food Court
                  on the same floor, Shopping Complex.
                  <br>
                  <br><b>Location:</b> 4th Foor NLIC City Center, 33, Kamal Pokhari, Kathmandu Nepal
                  <br><b>Contact Number:</b> 01-4011643, 01-4011645, 01-211223
                  <br>
                  <h3>Reviews</h3>
                  <div id="reviewStars1" class="text-center">
                    <i class="far fa-star fa-2x star" data-value="1"></i>
                    <i class="far fa-star fa-2x star" data-value="2"></i>
                    <i class="far fa-star fa-2x star" data-value="3"></i>
                    <i class="far fa-star fa-2x star" data-value="4"></i>
                    <i class="far fa-star fa-2x star" data-value="5"></i>
                  </div>
                </td>
                <td>
                <h3> Total Reviews</h3>
                  <div id="totalreviewStars1" class="text-center">
                    <i class="far fa-star fa-2x stars" data-value="1"></i>
                    <i class="far fa-star fa-2x stars" data-value="2"></i>
                    <i class="far fa-star fa-2x stars" data-value="3"></i>
                    <i class="far fa-star fa-2x stars" data-value="4"></i>
                    <i class="far fa-star fa-2x stars" data-value="5"></i>
                  </div>
                  <div class="bookbutton">
                    <a href="https://bigmovies.com.np/"
                      class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
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
                  <h3>Information</h3>
                  The fcube cinema hall is the newest cinema hall in kathmandu equipped with cutting edge 
                  technologies like Dolby 3 Ware Digital sound systems and digital 2K projection view.
                  Attractions of FCUBE Cinemas: Food Counter, Pay Parking, Relaxed Ambience.
                  <br>
                  <br><b>Location:</b> KL Tower, Chabahil, Kathmandu Nepal.
                  <br><b>Contact Number:</b> 01-4468700 (For Booking as well)
                  <br>
                  <h3>Reviews</h3>
                  <div id="reviewStars2" class="text-center">
                    <i class="far fa-star fa-2x star" data-value="1"></i>
                    <i class="far fa-star fa-2x star" data-value="2"></i>
                    <i class="far fa-star fa-2x star" data-value="3"></i>
                    <i class="far fa-star fa-2x star" data-value="4"></i>
                    <i class="far fa-star fa-2x star" data-value="5"></i>
                  </div>
                </td>
                <td>
                <h3> Total Reviews</h3>
                  <div id="totalreviewStars2" class="text-center">
                    <i class="far fa-star fa-2x stars" data-value="1"></i>
                    <i class="far fa-star fa-2x stars" data-value="2"></i>
                    <i class="far fa-star fa-2x stars" data-value="3"></i>
                    <i class="far fa-star fa-2x stars" data-value="4"></i>
                    <i class="far fa-star fa-2x stars" data-value="5"></i>
                  </div>
                  <div class="bookbutton">
                    <a href="https://www.fcubecinemas.com/"
                      class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
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
                  <h3>Information</h3>
                  Cine Dine has the luxurious and comfortable leather sofas which are imported from China and Malaysia. 
                  These sofas have the built in back massager,mini beverage Cooler and bell for calling the waiter. 
                  In addition, you can order the items/food while watching movie with stand-by Cine Hostess at your 
                  services.
                  <br>
                  <br><b>Location:</b> 7th and 8th Floor, Civil Trade Center, Sundhara
                  <br><b>Contact Number:</b> 01-4248402 or 01-4248403
                  <br>
                  <h3>Reviews</h3>
                  <div id="reviewStars3" class="text-center">
                    <i class="far fa-star fa-2x star" data-value="1"></i>
                    <i class="far fa-star fa-2x star" data-value="2"></i>
                    <i class="far fa-star fa-2x star" data-value="3"></i>
                    <i class="far fa-star fa-2x star" data-value="4"></i>
                    <i class="far fa-star fa-2x star" data-value="5"></i>
                  </div>
                </td>
                <td>
                <h3> Total Reviews</h3>
                  <div id="totalreviewStars3" class="text-center">
                    <i class="far fa-star fa-2x stars" data-value="1"></i>
                    <i class="far fa-star fa-2x stars" data-value="2"></i>
                    <i class="far fa-star fa-2x stars" data-value="3"></i>
                    <i class="far fa-star fa-2x stars" data-value="4"></i>
                    <i class="far fa-star fa-2x stars" data-value="5"></i>
                  </div>
                  <div class="bookbutton">
                    <a href="https://cdcnepal.com.np/"
                      class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
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
                  <h3>Information</h3>
                  For movie lovers, this would be a good news that a new multiplex cinema hall called Q's Cinemas is 
                  under construction at the Rising Mall, Teendhara Marga opposite to Royal Singhi Hotel and next to 
                  the Civil Bank. This hall is at the central location of Kathmandu near Durbar Marg and in proximity
                   with the Jai Nepal Cinema hall.
                  <br>
                  <br><b>Location:</b> Teendhara Marg, Opposite Royal Singhi Hotel.
                  <br><b>Contact Number:</b> 01-4169201, 01-4169202 (For Advanced Booking as well)
                  <br>
                  <h3>Reviews</h3>
                  <div id="reviewStars4" class="text-center">
                    <i class="far fa-star fa-2x star" data-value="1"></i>
                    <i class="far fa-star fa-2x star" data-value="2"></i>
                    <i class="far fa-star fa-2x star" data-value="3"></i>
                    <i class="far fa-star fa-2x star" data-value="4"></i>
                    <i class="far fa-star fa-2x star" data-value="5"></i>
                  </div>
                </td>
                <td>
                <h3> Total Reviews</h3>
                  <div id="totalreviewStars4" class="text-center">
                    <i class="far fa-star fa-2x stars" data-value="1"></i>
                    <i class="far fa-star fa-2x stars" data-value="2"></i>
                    <i class="far fa-star fa-2x stars" data-value="3"></i>
                    <i class="far fa-star fa-2x stars" data-value="4"></i>
                    <i class="far fa-star fa-2x stars" data-value="5"></i>
                  </div>
                  <div class="bookbutton">
                    <a href="https://www.qscinemas.com/"
                      class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
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
          <p>MovieHallHub is a leading online platform for movie ticket bookings. We provide information about movie
            showtimes, cinema halls, ticket prices, and more. Book your movie tickets with ease and enjoy the latest
            movies in town.</p>
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

    function calculateTotalRating(rating) {
      var totalRating = 0;
      var count = 0;
      for (var i = 1; i <= 5; i++) {
        if (i <= rating) {
          totalRating += i;
          count++;
        }
      }
      return count > 0 ? totalRating / count : 0;
    }

    // Reference to the user's profile in the Firebase database
    var userRef;

    // Listen for changes in the user's authentication state
    firebase.auth().onAuthStateChanged(function (user) {
      if (user) {
        // User is signed in
        userRef = firebase.database().ref('users/' + user.uid);

        // Listen for changes in the user's profile data
        userRef.on('value', function (snapshot) {
          var userData = snapshot.val();
          if (userData) {
            // Retrieve the user's rating from the database
            var rating1 = userData.reviewStars1 || 0;
            var rating2 = userData.reviewStars2 || 0;
            var rating3 = userData.reviewStars3 || 0;
            var rating4 = userData.reviewStars4 || 0;

            highlightStars('reviewStars1', rating1);
            highlightStars('reviewStars2', rating2);
            highlightStars('reviewStars3', rating3);
            highlightStars('reviewStars4', rating4);

            var totalRating1 = calculateTotalRating(rating1);
            var totalRating2 = calculateTotalRating(rating2);
            var totalRating3 = calculateTotalRating(rating3);
            var totalRating4 = calculateTotalRating(rating4);

            highlightStarss('totalreviewStars1', totalRating1+3);
            highlightStarss('totalreviewStars2', totalRating2+1);
            highlightStarss('totalreviewStars3', totalRating3+2);
            highlightStarss('totalreviewStars4', totalRating4+3);

            // Update the total rating table with the calculated total ratings
            document.getElementById('totalRating1').innerText = totalRating1.toFixed(2);
            document.getElementById('totalRating2').innerText = totalRating2.toFixed(2);
            document.getElementById('totalRating3').innerText = totalRating3.toFixed(2);
            document.getElementById('totalRating4').innerText = totalRating4.toFixed(2);
          }
        });
      }
    });
    




    
    // Star click event listener
    $('.star').on('click', function () {
      var rating = $(this).data('value');
      var id = $(this).parent().attr('id');
      highlightStars(id, rating);
      saveRating(id, rating);
    });
    

    function highlightStars(id, rating) {
      $('#' + id + ' .star').each(function () {
        var starValue = $(this).data('value');
        if (starValue <= rating) {
          $(this).removeClass('far').addClass('fas');
        } else {
          $(this).removeClass('fas').addClass('far');
        }
      });
    }

    function highlightStarss(id, rating) {
      $('#' + id + ' .stars').each(function () {
        var starValue = $(this).data('value');
        if (starValue <= rating) {
          $(this).removeClass('far').addClass('fas');
        } else {
          $(this).removeClass('fas').addClass('far');
        }
      });
    }

    // Save the rating in the database
    function saveRating(id, rating) {
      var userRef = firebase.database().ref('users/' + firebase.auth().currentUser.uid);
      userRef.update({
        [id]: rating
      }).then(function () {
        console.log('Review rating saved successfully!');
        alert('Review rating saved successfully!');
      }).catch(function (error) {
        console.error('Error saving review rating:', error);
      });
    }







    
  </script>

</body>

</html>
