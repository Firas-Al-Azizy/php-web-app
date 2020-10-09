<!DOCTYPE html>
<html>




<head>
	<title>Join Us!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />

</head>






<body>

	<!-- NAVIGATION -->
	<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #212121;">
		<a class="navbar-brand" href="#">YEMEN-business</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Featured</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Categories</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="#">Action 1</a>
						<a class="dropdown-item" href="#">Action 2</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn  my-2 my-sm-0" style="background-color: #76b852;" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<!-- MAIN -->
	<div class="main-w3layouts wrapper">
		<h1 id="text2"></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">



				<form action="includes/signup.inc.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input id='btn' type="checkbox" class="checkbox" required="">

							<span>I Agree To The Terms & Conditions</span>

						</label>
						<div class="clear"> </div>
					</div>

					<input value="SIGNUP" type="submit" name="signup">
					<!-- TODO  add animation when clicked-->

					<!-- <div id="loading" >
						<div class="spinner-grow-md spinner-grow text-primary" style="background-color: #76b852;" role="status">
							<span class="sr-only">Loading...</span>
						</div>
						<div class="spinner-grow text-danger" role="status">
							<span class="sr-only">Loading...</span>
						</div>
					
					</div> -->
				</form>





				<p>You have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>

		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>Hussein Basha contact me on <a href="https://github.com/husseinbasha">Git Hub</a></p>
		</div>


		<!-- BACKGTROUND ANIMATION -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
	<script src="js/core.js"></script>

	<script src="js/animation.js"></script>




</body>

</html>