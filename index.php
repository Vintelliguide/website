<?php
 session_start();

 require_once "pdo.php";

if(isset($_POST['search']) && isset($_POST['place'])){
 $stmt = $pdo->query("SELECT * FROM place");
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
	if($_POST['place']==$row['place_name']){
		header('Location: '.$row['place_name'].'UP.html');
		return;
	}
}
$_SESSION['nf']="place not found";
header('Location: index.php');
return;
}


?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/v-icon.png">

<title>Vintelliguide Home Page</title>


<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/index.css">
<script src="js/index.js"></script>
</head>
<body>

<header class="headerrr fixed-top">

<img src="images/tlogo1.png" alt="logo">

<nav class="navbar navbar-expand-lg navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">

<button type="button" class="navbar-toggler d-flex" data-toggle="collapse" data-target="#myNavbar" onclick="headerchange()">
       &#9776;
      </button>

</div>

 <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
<li><a href="#search" class="nav-link nav-tabs navss">Search</a></li>
<li><a href="#bestDestinations" class="nav-link nav-tabs navss">Popular Destinations</a></li>
<li><a href="#reviews" class="nav-link nav-tabs navss">Review</a></li>
<li><a href="#aboutUs" class="nav-link nav-tabs navss">About Us</a></li>
<li><a href="login.php" target="_parent"><button class="btn">LogIn/SignUp</button></a></li>
</ul>
</div>
</div>

</nav>



</header>


<section id="search" class="srhsec">
<div>
<div>
<h1>VintelliGuide</h1>
</div>
<p align="center" style="color:red;background:white;">
  <?php
  if(isset($_SESSION['nf'])){
  echo $_SESSION['nf'];
  unset($_SESSION['nf']);
}
?>
</p>
<form method="post">
<input type="text" id="placeName " placeholder="Destination" class="placeIn" name="place">
<button class="srhbtn btn" name="search">Search Place</button>
</form>
</div>
</section>

<section id="bestDestinations" class="dest">

<h2 align="center">Most Popular Destination</h2>

<div class="container">
<div class="row">

<div class="col-md-4">
	<a href="AgraUP.html">
<img src="images/agra.jpg" alt="agra">
<h4>AGRA</h4>
</a>
</div>


<div class="col-md-4">
	<a href="ShimlaUP.html">
<img src="images/shimla.jpg" alt="shimla">
<h4>SHIMLA</h4>
</a>
</div>

<div class="col-md-4">
	<a href="Kerala BackwatersUP.html">
<img src="images/kerala.jpg" alt="kerala">
<h4>KERALA BACKWATERS</h4>
</a>
</div>

<div class="col-md-4">
	<a href="jaipurUP.html">
<img src="images/jaipur.jpg" alt="jaipur">
<h4>JAIPUR</h4>
</a>
</div>

<div class="col-md-4">
	<a href="DarjeelingUP.html">
<img src="images/darjeeling.jpg" alt="darjeeling">
<h4>DARJEELING</h4>
</a>
</div>

<div class="col-md-4">
	<a href="goaUP.html">
<img src="images/goa.jpg" alt="goa">
<h4>GOA</h4>
</a>
</div>

</div>
</div>

</section>

<section id="reviews">

<h2 align="center" class="revi">Reviews</h2>

<div class="container">
<div class="row">

<div class="col-sm-6">
<h4>Mayuri Gosavi</h4>
<h5>Agra</h5>
<p>"A serene place with the most richest of Indian and Mughal History.Proud to be Indian after seeing Taj Mahal,one of seven wonders."</p>
</div>

<div class="col-sm-6">
<h4>Aditi Sahasane</h4>
<h5>Mahabaleshwar</h5>
<p>"Our own Switzerland!!A place to must visit atleast once in lifetime"</p>
</div>

<div class="col-sm-6">
<h4>Ayushi Bhagat</h4>
<h5>Goa</h5>
<p>"Made me feel young again,like when I was in my twenties.The energy and lifestyle here is phenomenal."</p>
</div>

<div class="col-sm-6">
<h4>Heramba Limaye</h4>
<h5>Darjeeling</h5>
<p>"The freshness of the tea leaves is always in the air giving soothing and energizing vibes.I am taking 10Kg of tea packets home! ;)</p>
</div>

</div>
</div>

</section>




<footer id="aboutUs">

<div>
<img src="images/tlogo1.png" alt="logo">
</div>

<div id="address">
<h6>Address</h6>
<p>
1st floor,Twin Tower,<br>
Powai,Mumbai,<br>
Maharashtra,India.<br>
Pincode: 400 210
</p>
</div>

<div id="contactUs">
Phone : **********
<br>
Mail : vintelliguides@gmail.com
</div>

<div id="socialMedia">
 <div class="social_links">
                                <ul class="nav nav-tabs nav-fill">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-square sze icon1"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter-square sze"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram">
                                            <i class="fab fa-instagram sze"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="youtube">
                                            <i class="fab fa-youtube sze"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>


</div>
<br>
<br>
<br>
<br>
<div id="cright">
<p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved and owned by Vintelliguides ltd.</p>
</div>

</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
