<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		if(isset($_GET['username']) && isset($_GET['surname']) && isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['email']) && isset($_GET['birthday'])) {
			echo "<p id='p1' style='display: none;'>" . $_GET['username'] . "</p>";
			echo "<p id='p2' style='display: none;'>" . $_GET['surname'] . "</p>";
			echo "<p id='p3' style='display: none;'>" . $_GET['name'] . "</p>";
			echo "<p id='p4' style='display: none;'>" . $_GET['phone'] . "</p>";
			echo "<p id='p5' style='display: none;'>" . $_GET['email'] . "</p>";
			echo "<p id='p6' style='display: none;'>" . $_GET['birthday'] . "</p>";
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

<body id="page-top" class="index" onload="func()">
<script>
	function func() {
		try {
			document.getElementById('username').value = document.getElementById('p1').innerHTML;
			document.getElementById('surname').value = document.getElementById('p2').innerHTML;
			document.getElementById('name').value = document.getElementById('p3').innerHTML;
			document.getElementById('phone').value = document.getElementById('p4').innerHTML;
			document.getElementById('email').value = document.getElementById('p5').innerHTML;
			document.getElementById('date').value = document.getElementById('p6').innerHTML;
		} catch(ex) {
			
		}
	}
</script>
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
                        <a href="index.php#gettingstarted">Starten</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#about">Über uns</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#concept">Konzept</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#faq">FAQ</a>
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
                                                         <input name="username" type="text" class="form-control" id="username" placeholder="Nutzername" required>
                                                    </div>
                                                    <div class="form-group">
                                                         <label class="sr-only" for="password">Passwort</label>
                                                         <input name="password" type="password" class="form-control" id="password" placeholder="Passwort" required>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <h1>Registrierung</h1>
                <div class="container" align="left">
                <div class="col-lg-">
                    <form method="post" action="interface.php" onSubmit="return checkPw(this)">
                        <div align="left" width="100px" padding-top="50px">
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

    <