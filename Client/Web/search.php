<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		if(isset($_POST['instant']) 
			&& isset($_POST['Beschreibung']) 
			&& isset($_POST['Fach']) 
			&& isset($_POST['Bewertung'])
			&& isset($_POST['Aufträge'])
			&& isset($_POST['Umkreis'])
			&& isset($_POST['Stundenlohn'])
			&& isset($_POST['Uhrzeit'])
		) {
			
		}
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instant.Help</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menü <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Instant.Help</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="index.php#gettingstarted">Abmelden</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                 <div class="row">
                                        <div class="col-md-12" width="120px">
                                            Login:
                                            <br><br>
                                             <form class="form" role="form" method="post" action="checker.php">
                                                    <div class="form-group">
                                                         <label class="sr-only" >Nutzername</label>
                                                         <input type="text" class="form-control" id="username" placeholder="Nutzername" required>
                                                    </div>
                                                    <div class="form-group">
                                                         <label class="sr-only" for="password">Passwort</label>
                                                         <input type="password" class="form-control" id="password" placeholder="Passwort" required>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block">Log-in</button>
                                                    </div>
                                             </form>
                                        </div>
                                 </div>
                            </li>
                        </ul>
                    </li>
                  </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
    <div class="container" align="left">
            <div class="row">
                <div class="col-lg-6">
                <h1>Instant erstellen</h1>
                <div class="container">
                <div class="col-lg-">
        <form method="post" action="find.php">
        <div class="form-group">
	    	<label for="Uhrzeit">Instant Titel:</label>
	    	<input name="title" type="text" class="form-control" id="title" placeholder="z.B. Binomische Formleln" required>
	  	</div> 
        <div align="left" width="100px" padding-top="50px">
            <div class="form-group">  
	    	<label for="Beschreibung">Beschreibung</label>
            <textarea name="Beschreibung" rows="5" class="form-control" id="Beschreibung"></textarea>
	  	</div>
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
	    	   <select name="Aufträge" class="form-control" id="AnzahlErledigterAufträge" required>
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
	    <button type="submit" class="btn btn-default">Instant stellen</button>
                </div>
	   </form>
                </div>
            </div>
        </div>    
                </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Entstanden<br>
                            im zuge von<br>
                            Jugendhackt</h3>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Instand Help im Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com" target="_blank" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.google.com" target="_blank" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/instanthelp4you/?hl=de" target="_blank" class="btn-social btn-outline"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Über Instant Help</h3>
                        <p>Nie mehr falsche Antworten!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Instant Help 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    
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

</body>

</html>
