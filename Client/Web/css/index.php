<!DOCTYPE html>
<html lang="en">
<?php
        if(isset($_GET['username'])) {
            echo "<p id='p1' style='display: none;'>" . $_GET['username'] . "</p>";
        }
?>  
<head>

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

<body onload="func()" id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

<script language="javascript" type="text/javascript">
<!--
function func() {
    document.getElementById('username').value = document.getElementById('p1').innerHTML;   
}
-->
</script>    
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menü <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Instant.Help</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#gettingstarted">Starten</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Über uns</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#concept">Konzept</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#faq">FAQ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="register.php">Registrieren</a>
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
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">Instant Help</h1>
                        <hr class="star-light">
                        <span class="skills">Nie mehr falsche Antworten!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="gettingstarted">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jetzt Los Legen</h2>
                    <hr class="star-primary">
                    <p>Morgen eine Arbeit?<br>Die Hausaufgaben sind zu schwer?<br>Lass uns das ändern!</p>
                    <a href="register.php" class="btn btn-primary btn-lg">Start!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Über</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">        
                    <p>
                        InstantHelp ist die Nachhilfeorgansisation des digitalen Zeitalters: sicher und einfach in der Nutzerführung.InstantHelp ist mehr als eine webbasierte funktionale Vermittlungsplattform. Wir verfolgen den Ansatz einer Suchmaschine für Nachhilfe mit Community-Charakter und wollen dir dabei Helfen eine schnelle, analoge Nachhilfe zu finden, damit du es, trotz wenig Zeit, noch schaffst eine gute Note in deiner nächsten Arbeit zu schreiben.<br>
                        Bei InstantHelp können sich beide Parteien anhand von persönlichen Profilen bereits vor dem Treffen ein genaues Bild von einander machen. Stärken, Erfahrung, Alter und Wohnort können sie schon Voraus einsehen und so Probleme vermeiden.
                    </p>
                </div>    
                </div>
            </div>
    </section>

    <!-- Contact Section -->
    <section id="concept">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Unser Konzept</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>
                        Stell dir vor es ist 20:00 Uhr und du schreibst morgen eine Arbeit, bisher hast du noch nicht gelernt und auch einiges nicht verstanden. Jetzt hast du verschiedene Möglichkeiten schnell Hilfe zu bekommen, am liebsten würdest du aber eine Person haben, die schnell zu dir kommt und dir deine Fragen zum Thema beantworten kann. Deine Freunde und Eltern haben keine Zeit bzw. können dir nicht helfen, weil sie es selber nicht verstehen. <br><br>
                        Deshalb benutzt du unsere App, du gibst einfach deine Frage(n) ganz bequem von zu Hause ein,<br>
                        mit einigen zusätzlichen Kriterien, die ein Auftragnehmer erfüllen sollte (Erfahrung, Verfügbarkeit, Umkreis, Alter, etc.). Unsere App sendet dann eine Push-Nachricht auf das Handy von allen, die deine festgelegten Kriterien erfüllen. Im Optimalfall wirst du so in wenigen Minuten, gegen eine geringe Bezahlung, eine Person finden, die zu dir kommt und dich vor einer schlechten Note bewahrt.
                    </p>    
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="success" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FAQ</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">        
                    <p>
                        Wenn du dir Sorgen machst, dass Personen mit bösen Intentionen, wie z.B. Pedophile, unsere Plattform als Mittel zum Zweck nutzen hast du mehrere Möglichkeiten. Beispielsweise kannst du in deinem Frage Stellen-Filter eingeben, dass du deine Anfrage nur an Nutzer mit einer hohen Anzahl an erledigten Aufträgen schicken willst. Ansonsten hast du noch die Möglichkeit im Voraus mit der Person zu telefonieren. Natürlich können aber auch wir dir kei'e hundertprozentige Garantie dafür geben.
                    </p>
                </div>    
                </div>
            </div>
    </section>

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

</body>

</html>
