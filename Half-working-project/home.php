<?php
	session_start();
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location:index.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>RENT A MACHINE</title>
	<!-- own styles -->
	<link rel="stylesheet" href="CSS/style.css">
	<!-- fonts -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body onload="slider()">

<?php
	echo "<p>Hello ".$_SESSION['user'].'! [ <a href="logout.php">Log out</a> ]</p>';
?>
<!-- nav -->
	<div class="row">
		<div class="column">
			<nav>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Rent</a></li>
					<li><a href="#">Team</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
<!-- main -->
<div class="main">
		<header>
			<div class="row">
				<div class="column">
					<h1>RENT A MACHINE</h1>
				</div>
				<div class="column">
					<h3>RTC COMPANY</h3>
				</div>
			</div>
		</header>

	<div class="firstPage">
		<div class="row">
			<div class="column">
				<section class="describe" name="about">
					<header>
						<h3>Welcome to our website.</h3>
					</header>
					<article class="content">
						<button type="button" name="button" id="viewMore">View more</button>
							<p class="admission">Our company is renting several types of machines. For instance You can rent
							car, bike, bicycle or even quad!
							We have very competitive prices comparing to other companies in our country!
							Our highly qualified staff with great pleasure will assist You with your choice!
							Our equipment is reliable, we have only the latest models.</p>
						<!-- Trigger/Open The Modal -->
						<button id="myBtn">Get a discount</button>
						<!-- The Modal -->
						<div id="myModal" class="modal">
						  <!-- Modal content -->
						  <div class="modal-content">
							 <div class="modal-header">
								<span class="close">&times;</span>
								<h2>Gratz</h2>
							 </div>
							 <div class="modal-body">
								<p>You won the discount coupon</p>
								<p>You can rent motor with a discount of 25%!</p>
							 </div>
						  </div>
						</div><!-- // modal -->
					</article>
				</section>
			</div>
			<div class="column">
				<section class="photo">
					<img src="03-slider.jpg" alt="img_1" id="slider">
				</section>
			</div>
		</div>
	</div><!-- /first page -->

<div class="thirdPage"><!-- RENT A CAR -->
	<div class="row">
		<div class="column">
			<section class="car">
				<header>
					<h2>RENT A CAR</h2>
				</header>
				<article>
					<h4>Choose the brand you are interested in, we will show You our offer</h4>
					<p>You can choose between: Toyota, Fiat, Volkswagen, Audi</p>
					Brand: <input type="text" id="name">
					<input type="submit" id="name-submit" value="Grab">
					<div id="name-data"></div>
				</article>
			</div>
		</div>
		<div class="column">
				<article>
					<img src="img/05.jpg" alt="foto1">
				</article>
		</div>
		</section>
	</div><!--// RENT A CAR -->

	<div class="row"><!-- RENT A QUAD -->
		<div class="column">
			<section class="quad">
				<article>
					<img src="img/02.jpg" alt="foto_bike">
				</article>
			</section>
		</div>
		<div class="column">
			<section class="bike">
				<header>
					<h2>RENT A QUAD</h2>
				</header>
				<article>
					<h4>Choose the brand you are interested in, we will show You our offer</h4>
					<p>You can choose between: Suziki, Honda</p>
					Name: <input type="text" id="nameQuad">
					<input type="submit" id="name-submit-quad" value="Grab">
					<div id="name-data-quad"></div>
				</article>
			</section>
		</div>
	</div>

	<div class="thirdPage"><!-- RENT A CAR -->
		<div class="row">
			<div class="column">
				<section class="bike">
					<header>
						<h2>RENT A BIKE</h2>
					</header>
					<article>
						<h4>Choose the brand you are interested in, we will show You our offer</h4>
						<p>You can choose between: Honda, Porsche, Ferrari</p>
						Name: <input type="text" id="name">
						<input type="submit" id="name-submit" value="Grab">
						<div id="name-data"></div>
					</article>
			</div>
			<div class="column">
					<article>
						<img src="img/03.jpg" alt="foto1">
					</article>
			</div>
			</section>
		</div><!--// RENT A CAR -->

	<div class="row"><!-- RENT A BIKE -->
		<div class="column">
			<section class="bicycle">
				<article>
					<img src="img/04.jpg" alt="foto_bike">
				</article>
			</section>
		</div>
		<div class="column">
			<section class="bike">
				<header>
					<h2>RENT A BICYCLE</h2>
				</header>
				<article>
					<h4>Choose the brand you are interested in, we will show You our offer</h4>
					<p>You can choose between: Giant, Merida, B'TWIN, Kellys</p>
					Name: <input type="text" id="name">
					<input type="submit" id="name-submit" value="Grab">
					<div id="name-data"></div>
				</article>
			</section>
		</div>
	</div>
</div><!-- // END RENT OF ALL PRODUCTS -->

<div class="ourTeam">
	<div class="row">
		<div class="column">
			<section class="describeSquad">
				<header>
					<h1>OUR TEAM</h1>
					<h2>KNOW OUR WORKERS</h2>
				</header>
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						 dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
						 sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</article>
				<div class="column">
					<h2>JOANNE KETLIN</h2>
					<img src="img/06.jpg" alt="joanna_foto">
					<h2>Albus Persiwal</h2>
					<img src="img/07.jpg" alt="albus_foto">
				</div>
			</section><!-- / describe-squad -->
		</div>
	</div>
</div><!-- / our team -->

<div class="mapOffice">
	<div class="row">
		<div class="column">
			<header>
				<h2>Our office is here!</h2>
			</header>
			<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d19465.34117222332!2d16.937187!3d52.421760000000006!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d52.4216742!2d16.936194!5e0!3m2!1spl!2spl!4v1499716987240" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div><!-- / map office -->

<footer>
	<div class="row">
		<div class="column">
			<header>
				<h3>SOCIAL MEDIA</h3>
			</header>
			<article class="socialMedia">
				<i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
				<i class="fa fa-instagram fa-4x" aria-hidden="true"></i>
				<i class="fa fa-twitter fa-4x" aria-hidden="true"></i>
			</article>
		</div>
		<div class="column">
			<header>
				<h3>CONTACT US</h3>
			</header>
			<article class="contactUs">
				<i class="fa fa-envelope-o fa-4x" aria-hidden="true"></i>
				<p>Do not hesitate to contact us!</p>
			</article>
		</div>
		<div class="column">
			<header>
				<h3>COMMENTS</h3>
			</header>
			<article>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</article>
		</div>
	</div>
</footer>


</div><!-- MAIN DIV -->

<script src="JS/jquery-3.2.1.min.js"></script>
<script src="JS/global.js"></script>
<script>
// SLIDER
	var i =0;
	var images = ['img/img-slider-01.jpg', 'img/img-slider-02.jpg', 'img/img-slider-03.jpg', 'img/img-slider-04.jpg'];

	function slider() {
		document.getElementById('slider').src=images[i];

		if(i < images.length -1) {
			i++;
		} else {
			i = 0;
		}
		var t = setTimeout("slider()", 3000);
	}

// modal-popup
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</body>
</html>
