<?php
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday'])) {
		try {	
			$sqlwrite = "INSERT INTO users (user) VALUES ('" . $_GET['username'] . "#" . $_GET['password'] . "#" . $_GET['name'] .  "#" . $_GET['surname'] . "#" . $_GET['birthday'] . "#" . $_GET['phone'] . "#" . $_GET['email'] . "')";
			$conn->query($sqlwrite)
		}
			//initialize connection to back-end	and save data
			header('Location: /done.php?username=' . $_POST['username']);
		} catch (Exception ex) {
			header('Location: /register.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
		}
	}
?>