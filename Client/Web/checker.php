<?php
	try {
        $name = "users/" . $_POST['username'];
        $of = fopen($name, "r");
		$file = fread($of, filesize($name));
        fclose($of);
        
		$pwd = explode("#", $file);
		if($pwd[1] == $_POST['password']) {
			header("Location: /instanthelp/Client/Web/in_index.php?username=" . $_POST['username']);
		} else {
			header("Location: /instanthelp/Client/Web/login.php?username=" . $_POST['username']);
		}
	} catch(Exception $ex) {
		header("Location: /instanthelp/Client/Web/login.php?username=" . $_POST['username']);
	}
?>