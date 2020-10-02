<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">

	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
	<div class="nav-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<div class="row">
						<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 d-flex justify-content-start">
							<nav class=" navbar-dark ">
							 <!--   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
								  <span class="navbar-toggler-icon"></span>
								</button> -->
								<div id="myNav" class="overlay">
								  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								  <div class="overlay-content">
								    <a href="http://localhost:8000/about">About</a>
								    <a href="http://localhost:8000/course">course</a>
								    <a href="http://localhost:8000/contact">Contact</a>
								  </div>
								</div>
								<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

								 <!--  <div class="submenu" id="">
								    <ul class="navbar-nav">
								      <li class="nav-item">
								        <a class="nav-link" href="#">home</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">contact</a>
								      </li>
								      <li class="nav-item">
								        <a class="nav-link" href="#">seh</a>
								      </li>    
								    </ul>
								  </div> -->  
							  </nav>
						</div>
						<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 image d-flex justify-content-center">
							<img src="../asset/img/wfflix.svg">
						</div>
						<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12 text-right buttons">
											<a href="http://localhost:8000/login" class="btn btn-primary" type="submit">login</a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12 buttons">
											<a href="http://localhost:8000/register" class="btn btn-primary" type="submit">register</a>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="wrapper">	
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="inner" id="inner-form">
					<form action="sendmail.php" method="POST">
						<div class="row">
						<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text text-center">
							<h2>WE LIKE TO HEAR FROM YOU!</h2>
						</div>
						</div>
						<div class="form-group name-group">
							<input name="naam" type="text" class="form-control form-control-sm"  id="loremipsum" placeholder="naam">
								
							</input>
						</div>
						<div class="form-group email-group">
							<input type="text" name="onderwerp" class="form-control form-control-sm"  id="loremipsum" 	placeholder="onderwerp">
						</div>
						<div class="form-group achternaam-group">
							<input type="text" class="form-control form-control-sm" id="loremipsum" name="email" placeholder="email">
						</div>
						<div class="form-group">
						    <textarea name="bericht" class="form-control" id="loremipsum" rows="3"></textarea>
						  </div>
						<button type="submit" name="submit" class="btn btn-primary" placeholder="lorem ipsum">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 img">
				<div class="inner">

					<img src="../asset/img/image.jpeg">
				</div>
			</div>
		</div>
	</div>
</div>



<script src="../asset/js/javascript.js">

</script>

</body>
</html>