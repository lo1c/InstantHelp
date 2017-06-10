asfsafafsf


<?php
<<<<<<< HEAD
    while(true) {
        
    }
    echo "<script>alert();</script>";
    $handle = fopen("users/user" , "w");
    fwrite($handle, 'hi');
    fclose ($handle);

=======
>>>>>>> 6c3a555b1c475d84002b1dff9bebd639934d242f
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday'])) {
		try {	
			$content = $_POST['username'] . "#" . $_POST['password'] . "#" . $_POST['name'] . "#" . $_POST['surname'] . "#" . $_POST['phone'] . "#" . $_POST['email'] . "#" . $_POST['birthday'];
		
<<<<<<< HEAD
			$handle = fopen("users/" . $_POST['username'], w);
=======
			$handle = fopen("users/" . $_POST['username'], "w");
>>>>>>> 6c3a555b1c475d84002b1dff9bebd639934d242f
			fwrite ($handle, $content);
			fclose ($handle);
		
			header('Location: /done.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
            
			echo "ALLES KLAR!";
		} catch (Exception $ex) {
			echo $ex->getMessage();
			header('Location: /register.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
		}
	}
?>
