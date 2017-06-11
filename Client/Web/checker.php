<?php
	try {
		$file = file_get_contents("users/" . $_POST['username']);
		$pwd = explode("#", $file);
		if($pwd[1] == $_POST['password']) {
			try {
				$file2 = fopen("confirmed/" . $_POST['username'], "r");
				fclose($file2);
			} catch(Exception $ey) {
				
			}
			header("Location: /in_index.php?username=" . $_POST['username']);
		} else {
			header("Location: /index.php?username=" . $_POST['username']);
		}
	} catch(Exception $ex) {
		header("Location: /index.php?username=" . $_POST['username']);
	}
?>