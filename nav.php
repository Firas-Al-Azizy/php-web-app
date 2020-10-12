
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #121212;">
		<a class="navbar-brand">
		<i class="fas fa-brain   mr-1 "></i>
		FEEDIT
		</a>
		<button class="navbar-toggler d-lg-none " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
			aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="#">Home </a>
				</li>
				

				<li class="nav-item">
					<a class="nav-link" href="article.php?id=all">Featured </a>	
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Topics</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="#">Computer Science</a>
						<a class="dropdown-item" href="#">Big data</a>
						<a class="dropdown-item" href="#">Research papers</a>
						<a class="dropdown-item" href="#">Spacecrafts</a>
					</div>
				</li>
				<!--TODO profile for user route-->
				<?php 
					
					if(isset($_COOKIE['uname'])){
					echo '<li class="nav-item ml-3">
					
						<a class="nav-link   " href="profile.php"><i class="fas fa-user mr-2  "></i>'.$_COOKIE['uname'].' </a>	
						
					</li>';
					}
				?>

			</ul>
			<form>
				<div class="input-group">
				<input class="form-control bg-light " type="text" placeholder="Search">
				<div class="input-group-btn bg-dark">
				<button class="btn btn-dark  " type="submit"><i class="fa fa-search" aria-hidden="true"></i></i>
				</button>
				</div>
				</div>
			</form>
		</div>
	</nav>

	<script>
		
		$(".nav-link").on('click' , function(){
			
			localStorage.setItem('selectedPage' , this);

			$(".nav-link").removeClass('active');
			$(this).addClass('active');
			
		});
	</script>

