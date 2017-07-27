<?php
	require_once "connect.php";
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location:home.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>RENT A MACHINE</title>
	<!-- grid styles -->
	<link rel="stylesheet" href="/CSS/grid.css">
	<!-- typography -->
	<link rel="stylesheet" href="/CSS/typography.css">
	<!-- own styles -->
	<link rel="stylesheet" href="CSS/style.css">
	<!-- fonts -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<section class="welcome">
		<div class="row">
			<div class="column">
				<header>
					<h1>Welcome to our company!</h1>
					<h2>You have to check our offer</h2>
				</header>
				<form action="zaloguj.php" method="post">
					Login: <br /> <input type="text" name="login" /> <br />
					Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
					<input type="submit" value="Zaloguj się" />
				</form>
			</div>
		</div>
	</section>


<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>
