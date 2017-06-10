<?php
	try {
		$file = fread("users/" . $_POST['username']);
		$pwd = explode("#", $file);
		if($pwd[1] == $_POST['password']) {
			header("Location: /in_index.php?username=" . $_POST['username']);
		} else {
			header("Location: /login.php?username=" . $_POST['username']);
		}
	} catch(Exception $ex) {
		header("Location: /login.php?username=" . $_POST['username']);
	}
?>