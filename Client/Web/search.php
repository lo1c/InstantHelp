<html>
	
	<head>
		<title>Instant.Help</title>
        <meta charset="utf-8">
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
              <li><a href="about.php">Über Uns</a></li>
              <li class="active"><a href="search.php">Frage stellen</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registrieren</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
                <div class="page-header">	
			<h2>Frage stellen</h2>
		</div>
		<div class="col-md-6">
		<form method="get" action="find.php">
            <div class="form-group">
	    	<label for="Beschreibung">Beschreibung</label>
            <textarea name="Beschreibung" rows="5" class="form-control" id="Beschreibung"></textarea>
	  	</div>
	  	  <div class="form-group">
	    	  <label for="Fach">Fach</label>
	    	   <select name="Fach" class="form-control" id="Fach" required>
                <option></option>
                <option>Mathe</option>
                <option>Deutsch</option>
                <option>Englisch</option>
                <option>Spanisch</option>
              </select>
	  	</div>
        <div class=" form-group">
	    	  <label for="Bewertung">Bewertung</label>
	    	   <select name="Bewertung" class="form-control" id="Bewertung" required>
                <option></option>
                <option value="1">egal</option>
                <option value="2">★★ (mind.)</option>
                <option value="3">★★★ (mind.)</option>
                <option value="4">★★★★ (mind.)</option>
                <option value="5">★★★★★ (mind.)</option>    
              </select>
	  	</div>
        <div class="form-group">
	    	  <label for="AnzahlErledigterAufträge">Anzahl erledigter Aufträge</label>
	    	   <select name="AnzahlErledigterAufträge" class="form-control" id="AnzahlErledigterAufträge" required>
                <option></option>
                <option value="0">egal</option>
                <option value="1">mindestens 1</option>
                <option value="10">mindestens 10</option>
                <option value="100">mindestens 100</option>
              </select>
	  	</div>
        <div class="form-group">
	    	  <label for="Umkreis">Umkreis</label>
	    	   <select name="Umkreis" class="form-control" id="Umkreis" required>
                <option></option>
                <option value="1">unter 1km</option>
                <option value="3">unter 3km</option>
                <option value="7.5">unter 7,5km</option>
                <option value="15">unter 15km</option>
              </select>
	  	</div>
        <div class=" form-group">
	    	  <label for="Stundenlohn">Stundenlohn</label>
	    	   <select name="Stundenlohn" class="form-control" id="Stundenlohn" required>
                <option></option>
                <option value="1">egal</option>
                <option value="5">unter 5€</option>
                <option value="10">unter 10€</option>
                <option value="20">unter 20€</option>
                <option value="30">unter 30€</option>
              </select>
	  	</div>
        	<div class="form-group">
	    	<label for="Uhrzeit">Uhrzeit</label>
	    	<input name="Uhrzeit" type="text" class="form-control" id="Uhrzeit" placeholder="z.B. 13:00h" required>
	  	</div>
	    <button type="submit" class="btn btn-success">Frage stellen</button>
	   </form>
	</div>	
	</div>
	</body>
		
</html>