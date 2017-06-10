<html>
	
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
	
	<body>
        
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
		<form>
	  	  <div class=" form-group">
	    	  <label for="email">Vorname:</label>
	    	  <input type="email" class="form-control" id="email">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Nachname:</label>
	    	<input type="password" class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Nickname:</label>
	    	<input type="password" class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Email:</label>
	    	<input type="password" class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Handynummer:</label>
	    	<input type="password" class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Geburtsdatum:</label>
	    	<input type="password" placeholder="DD/MM/YYYY" class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Passwort:</label>
	    	<input type="password"  class="form-control" id="pwd">
	  	</div>
        <div class="form-group">
	    	<label for="pwd">Passwort wiederholen:</label>
	    	<input type="password"  class="form-control" id="pwd">
	  	</div>
	    <button type="submit" class="btn btn-success">Registrieren</button>
	   </form>
	</div>	
	</div>
	</body>
		
</html>