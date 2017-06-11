<html>
	<?php
        if(isset($_GET['username'])) {
            echo "<p id='p1' style='display: none;'>" . $_GET['username'] . "</p>";
        }
    ?>  
	<head>
		<title>Instant.Help</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!--favicon-->
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="src/graphics/favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="src/graphics/favicon.ico">
        <link rel="shortcut icon" href="src/graphics/favicon.ico">
	</head>
	
	<body onload="func()">
        
    <script language="javascript" type="text/javascript">
    <!--
    function func() {
        document.getElementById('username').value = document.getElementById('p1').innerHTML;   
    }
    -->
    </script>
	<div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Instant.Help</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="concept.php">Konzept</a></li>
              <li><a href="#">Test</a></li>
              <li><a href="about.php">Über Uns</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
                <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
                <div class="page-header">	
			<h2>Login</h2>
		</div>
		<div class="col-md-6">
		<form method="post" action="checker.php">
	  	  <div class=" form-group">
	    	  <label>Username:</label>
	    	  <input id="username" type="text" class="form-control" name="username">
	  	</div>
	  	<div class="form-group">
	    	<label>Passwort:</label>
	    	<input type="password" class="form-control" name="password">
	  	</div>
	    <button type="submit" class="btn btn-default">Einloggen</button>
	   </form>
	</div>	
	</div>
	</body>
		
</html>