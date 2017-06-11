<html>
	<head>
		<title>Registriert</title>
	</head>
	<body>
		<h1 style="text-align: center;">Registrierung absgeschlossen!</h1>
		<?php
			echo "<h2 style='text-align: center;'>Lieber " . $_GET['username'] . ",</h2>"
		?>
		<p style="text-align: center;">vielen Dank für deine Registrierung. Click <?php echo '<a href="http://instanthelp.bplaced.net/login.php?username=' . $_GET['username'] . '">hier</a>' ?>, um dich einzuloggen.</p>
	</body>
</html>