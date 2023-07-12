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
.navbar-nav .hallactive .nav-link {
  border-color: green;
  border-width: 3px;
  color: green !important;
}
table.table-dark tr {
      border: 10px solid rgba(0, 0, 0, 1);
    }
    .halltable{
      padding-left:60px !important;
      padding-right:60px !important;
      padding-top:100px !important;
      padding-bottom:10px !important;
    }


  </style>
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
                  BIG Movies formerly known as BIG Cinemas is one of the best Multiplex cinema halls of Nepal with 
                  a superior Xenon Projection Systems, Crystal Clear DTS sound, luxurious comfort seats and a 
                  wide screen viewing experience.

                  Attractions of Big Movies City Center: Food Counter, Pay Parking, Two Ticketing Counters. Food Court 
                  on the same floor, Shopping Complex.
                  <br>
                  <br><b>Location:</b> 4th Foor NLIC City Center, 33, Kamal Pokhari, Kathmandu Nepal
                  <br><b>Contact Number:</b> 01-4011643, 01-4011645, 01-2112233 (For advance Booking as well)
                  <br><b>Email:</b> govind@bigmovies.com.np (For complains and enquiries)
                  <br> <h3>Reviews</h3>
                <td>
                
              <div class="bookbutton">
                  <a href="https://bigmovies.com.np/" class="btn btn-outline-success justify-content-center"><b>Buy Tickets</b></a>
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

</body>
</html>
