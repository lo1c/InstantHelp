<html>
	<?php
        try {
            if(isset($_GET['username']) && isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['birthday']) && isset($_GET['phone']) && isset($_GET['email'])) {
                echo "<p id='p1' style='display: none;'>" . $_GET['username'] . "</p>";
                echo "<p id='p2' style='display: none;'>" . $_GET['name'] . "</p>";
                echo "<p id='p3' style='display: none;'>" . $_GET['surname'] . "</p>";
                echo "<p id='p4' style='display: none;'>" . $_GET['birthday'] . "</p>";
                echo "<p id='p5' style='display: none;'>" . $_GET['phone'] . "</p>";
                echo "<p id='p6' style='display: none;'>" . $_GET['email'] . "</p>";    
            }
        } catch(Exception $ex) {
               
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
            alert(document.getElementById('p1').innerHTML);
            
            document.getElementById('username').value = document.getElementById('p1').innerHTML;
            document.getElementById('name').value = document.getElementById('p2').innerHTML;
            document.getElementById('surname').value = document.getElementById('p3').innerHTML;
            document.getElementById('birthday').value = document.getElementById('p4').innerHTML;
            document.getElementById('phone').value = document.getElementById('p5').innerHTML;
            document.getElementById('email').value = document.getElementById('p6').innerHTML;
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
	        <label>Vorname:</label>
	        <input name="name" type="text" class="form-control" id="name" required>
	  	</div>
	  	<div class="form-group">
	    	<label>Nachname:</label>
	    	<input name="surname" type="text" class="form-control" id="surname" required>
	  	</div>
        <div class="form-group">
	    	<label>Nickname:</label>
	    	<input name="username" type="text" class="form-control" id="username" required>
	  	</div>
        <div class="form-group">
	    	<label>Email:</label>
	    	<input name="email" type="email" class="form-control" id="email" required>
	  	</div>
        <div class="form-group">
	    	<label>Handynummer:</label>
	    	<input name="phone" type="phone" class="form-control" id="phone" required>
	  	</div>
        <div class="form-group">
	    	<label>Geburtsdatum:</label>
	    	<input name="birthday" type="date" placeholder="DD/MM/YYYY" class="form-control" id="date" required>
        </div>
        <div class="form-group">
	    	<label>Passwort:</label>
	    	<input name="password" type="password" id="pw1"  class="form-control" required>
	  	</div>
        <div class="form-group">
	    	<label>Passwort wiederholen:</label>
	    	<input name="repeat" type="password" id="pw2"  class="form-control" required>
	  	</div>
	    <input type="submit" class="btn btn-default" value="Registrieren">
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