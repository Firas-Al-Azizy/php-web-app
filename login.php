<!-- NAVIGATION -->
<?php
require 'header.php';
require 'nav.php';

?>
<div class="main-w3layouts wrapper">
	<div class="main-agileinfo">

		<div class="agileits-top">
			<form action="includes/login.inc.php" method="post">
				<input class="text" type="text" name="username" placeholder="Username or Email" required="">
				<div style="margin: 1.3em 0;">
					<input class="text" type="password" name="password" placeholder="Password" required="">
				</div>

				<input type="submit" value="LOGIN" name="login" style="margin-top: 15px;">
			</form>
			<p>Do you have an Account? <a href="signUp.php"> Sign Up!</a></p>
		</div>
	</div>
	<!-- copyright -->
	<div class="colorlibcopy-agile">
		<p>Hussein Basha contact me on <a href="https://github.com/husseinbasha">Git Hub</a></p>
	</div>
	<!-- animations -->
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
<script src="js/core.js"></script>

<script src="js/animation.js"></script>

</body>

</html>