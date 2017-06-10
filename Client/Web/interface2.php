<?php
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday'])) {
		try {	
			$content = $_POST['username'] . "#" . $_POST['password'] . "#" . $_POST['name'] . "#" . $_POST['surname'] . "#" . $_POST['phone'] . "#" . $_POST['email'] . "#" . $_POST['birthday'];
		
			$handle = fopen("users/" . $_POST['username'] . ".txt", w);
			fwrite ($handle, $content);
			fclose ($handle);
		
			header('Location: /done.php?username=' . $_POST['username']);
		} catch (Exception $ex) {
			header('Location: /register.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
		}
	}
?>