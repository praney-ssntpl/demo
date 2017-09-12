<!DOCTYPE html>
<html lang="en">
<head>
<title>Test your Knowledge | Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="quiz.css" />
<style>	#nameErr { color:red; } </style>

<script>
	function nameError(str) 
	{
			var xmlHttp = new XMLHttpRequest();
										
			xmlHttp.onreadystatechange = function()
			{
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
				{
					document.getElementById("nameErr").innerHTML = xmlHttp.responseText;
				}
			}
			xmlHttp.open("GET","register.php?name="+str,true);
			xmlHttp.send();
	}

</script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
					<li><a data-toggle="tab" href="#quiz">Quiz</a></li>
					<li><a data-toggle="tab" href="#contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#regModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				<li><a href="#logModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="regModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration</h4>
        </div>
        <div class="modal-body">
			<form class="form-horizontal" action="register.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="usr">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="usr" placeholder="Enter full name" name="usr" onkeyup="nameError(this.value)" required>
						<span id="nameErr"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>						
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern=".{5,15}" required title="Password should contain atleast 5 characters" required>						
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-8">
					<button type="submit" class="btn btn-default">Register</button>
					</div>
				</div>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="logModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="login.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="usrname">Username:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="usrname" placeholder="your email is your username" name="usrname" required>
					</div>
				</div>				
				<div class="form-group">
					<label class="control-label col-sm-2" for="logpwd">Password:</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="logpwd" placeholder="Enter password" name="logpwd" required>
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-8">
					<button type="submit" class="btn btn-default">Login</button>
					</div>
				</div>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
			
	<div class="container-fluid text-center">
		<div class="row content">
			<div class="col-sm-2 sidenav">
				<p><a href="#">Link</a></p>
				<p><a href="#">Link</a></p>
				<p><a href="#">Link</a></p>
			</div>
			<div class="col-sm-8 text-left tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="page-header text-center"> 
				<h1>Welcome to Knowledge Portal</h1>
				</div>
				<p>Find here latest quizes on Current Affairs,Indian History,World Geography
				and much more. It will help you in boosting your confidence to face 
				Government exams and will also help in increasing your knowledge.</p>
				<hr>
				<p>Why wait? If you are new to this website, Register and start playing.<br>If not, you better know where to start.</p>
			</div>
			<div id="quiz" class="tab-pane fade">
			<p>Find here quizzes</p>
			</div>
			<div id="contact" class="tab-pane fade">
			<p>Contact here</p>
			</div>
			</div>
			<div class="col-sm-2 sidenav">
				<div class="well">
					<p>ADS<p>
				</div>
				<div class="well">
					<p>ADS</p>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>&copy 2017 All Rights Reserved.</p>
	</footer>
</body>
</html>