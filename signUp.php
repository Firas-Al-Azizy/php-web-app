

	<!-- NAVIGATION -->
	
<?php
	require 'header.php';
	require 'nav.php'
?>
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