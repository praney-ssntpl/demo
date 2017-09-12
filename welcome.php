<?php
	session_start();
	if(!isset($_SESSION['login_name'])){
      header("location:home.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome | <?php echo $_SESSION['login_name']; ?> </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Logo</a>				
			</div>			
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>						
		</div>
	</nav>
	
	<div class="container-fluid text-center">
		<div class="row-content">			
			<div class="col-sm-12 text-left">
				<div class="page-header text-center">
					<p class="head-tag">Welcome to knowledge portal</p>
					<p> <?php echo $_SESSION['login_name']; ?> </p>
					<hr>
					<p>Choose your Category</p>
					<div class="category">
						<div class="row">
							<div class="col-sm-4">
								<div class="thumbnail">
									<a href="#gameModal" data-toggle="modal"><img class="img-circle" class="img-responsive" src="images/sports.jpg" alt="sports" style="height:250px;width:100%">
									<div class="caption">
									<p>Sports</p></a>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="thumbnail">
									<img class="img-circle" class="img-responsive" src="images/history.jpg" alt="history" style="height:250px;width:100%">
									<div class="caption">
									<p>History</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="thumbnail">
									<img class="img-circle" class="img-responsive" src="images/geo.jpg" alt="geography" style="height:250px;width:100%">
									<div class="caption">
									<p>Geography</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	
	<div class="container">
		<div class="modal fade" id="gameModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Game</h4>
					</div>
					<div class="modal-body">
						
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>&copy 2017 All Rights Reserved.</p>
	</footer>
	
</body>
</html>