<?php 
	session_start(); 
?>

<html>
<head>
	<title>College Resource Booking</title>
	<link rel = "stylesheet" type="text/css" href ="styles/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
<script src="js/myScript.js"></script>
</head>
<body>
<center>


<nav class ="layout">
	<ul class = "menu">	
		<li class="logo">
			<h1>Highgate College</h1>
		</li>
		<li class = "menu"><a href = "#">
		<?php 
		if(isset($_SESSION['name'])) {
			$name = $_SESSION['name'];
			// echo $_SESSION['name'];
			echo $name;			
		} else {
			echo "";	
		}
		?>
		</a></li>

		<?php 
		if(isset($_SESSION['name'])) { ?>

		<li class = "menu"><a href = "logout.php">Logout</a></li>
	
		<?php 
			// echo "Logout";		
		} else { ?>
			<li class = "menu"><a href = "login.html">Login</a>
		<?php }
		?>
		</a></li>
		<li class = "menu"><a href = "register.html">Register</a></li>
		<li class = "menu"><a href = "">Feedback</a></li>
		<li class = "menu"><a href = "">Contact us</a></li>
		<li class = "menu" id="dropdown"> <button onclick="myButton()" class= "dropbtn">Resources</button>
			<div id="myDropdown" class="dropdown-content">
				<a href="">Science Labs</a>
				<a href="">Computer Labs</a>
				<a href="Auditorium.html">Auditorium</a>
				<a href="">Halls</a>
				<a href="SwimmingPool.html">Swimming Pool</a>
			</div>
		</li>
		<li class = "menu"><a href = "#">Home</a></li>
	</ul>	
</nav>
<h1 class="title">Welcome to <br>
	Highgate College Resource Booking System</h1>

</center>



<!-- <div class="sidenav">
	<ul class="side-menu">
		<li> <a href="#">Home</a> </li>
		<li> <a href="">Science Labs</a> </li>
		<li> <a href="">Computer Labs</a> </li>
		<li> <a href="">Auditorium</a> </li>
		<li> <a href="">Halls</a> </li>
		<li> <a href="">Swimming Pool</a> </li>
  </ul>
</div> -->

<br><br>



<div class= "bodyImage" style="background-image: url('images/computer-lab.jpg');">
	<!-- <input type="text" placeholder="Search for resource"> <br><br> -->
	<!-- <img src="images/computer-lab.jpg" alt="Computer Lab"> -->
</div>

<div class="cardList">
	<a href="#"
		class="card">
			<h2>Science Lab</h2>	
	</a>
	<div class="card">
		<h2>Computer Lab</h2>
	</div>
	<div class="card">
		<h2>Auditorium</h2>
	</div>
	<div class="card">
		<h2>Halls</h2>
	</div>
	<div class="card">
		<h2>Swimming Pool</h2>
	</div>
</div>



<footer>
	<div class="content-wrap">
	  <h2>Let's Keep in Touch!</h2>
	  <ul class="contact-list">
		<li><a href="">email : contact@hgc.lk</a></li>
		<li><a href="" target="_blank">Highgate College Website</a></li>
		<li><a href="" target="_blank">Facebook</a></li>
		<li><a href="" target="_blank">LinkedIn</a></li>
	  </ul>
	</div>
  </footer>



</body>
</html>