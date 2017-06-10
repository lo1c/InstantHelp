<html>
	<?php
        try {
            echo "<p id='p1' style='display: none;'>" . $_GET['username'] . "</p>"
            echo "<p id='p2' style='display: none;'>" . $_GET['name'] . "</p>"
            echo "<p id='p3' style='display: none;'>" . $_GET['surname'] . "</p>"
            echo "<p id='p4' style='display: none;'>" . $_GET['birthday'] . "</p>"
            echo "<p id='p5' style='display: none;'>" . $_GET['phone'] . "</p>"
            echo "<p id='p6' style='display: none;'>" . $_GET['email'] . "</p>"
        } catch(Exception ex) {
            
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
        
    <script>
        function func() {
            document.getElementById('username') = document.getElementById('p1')
            document.getElementById('name') = document.getElementById('p2')
            document.getElementById('surname') = document.getElementById('p3')
            document.getElementById('birthday') = document.getElementById('p4')
            document.getElementById('phone') = document.getElementById('p5')
            document.getElementById('email') = document.getElementById('p6')
        }
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
                <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
        <div class="page-header">	
			<h2>Registrierung</h2>
		</div>
		<div class="col-md-6">
		<form method="post" action="interface.php" onSubmit="return checkPw(this)">
	  	<div class=" form-group">
	        <label name="name">Vorname:</label>
	        <input type="text" class="form-control" id="name" required>
	  	</div>
	  	<div class="form-group">
	    	<label name="surname">Nachname:</label>
	    	<input type="text" class="form-control" id="surname" required>
	  	</div>
        <div class="form-group">
	    	<label name="username">Nickname:</label>
	    	<input type="text" class="form-control" id="username" required>
	  	</div>
        <div class="form-group">
	    	<label name="email">Email:</label>
	    	<input type="email" class="form-control" id="email" required>
	  	</div>
        <div class="form-group">
	    	<label name="phone">Handynummer:</label>
	    	<input type="phone" class="form-control" id="phone" required>
	  	</div>
        <div class="form-group">
	    	<label name="birthday">Geburtsdatum:</label>
	    	<input type="date" placeholder="DD/MM/YYYY" class="form-control" id="date" required>
        <div class="form-group">
	    	<label name="password">Passwort:</label>
	    	<input type="password" id="pw1"  class="form-control" id="pwd" required>
	  	</div>
        <div class="form-group">
	    	<label for="repeat">Passwort wiederholen:</label>
	    	<input type="password" id="pw2"  class="form-control" id="pwd" required>
	  	</div>
	    <input type="submit" class="btn btn-success" value="Registrieren">
	   </form>
	</div>	
	</div>
	</body>
	
    <!-- JS-Script zum vergleichen der Passwörter-->
    <script language="javascript" type="text/javascript">
     <!--
        function checkPw(){ 
        Eingabepw01 = document.getElementById("pw1").value;
        Eingabepw02 = document.getElementById("pw2").value;
        
        if (Eingabepw01 != Eingabepw02)
        alert ("Passwörter stimmen nicht überein!");
        }
    -->   
    </script>
</html>