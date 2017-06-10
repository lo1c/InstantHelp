asfsafafsf


<?php
    while(true) {
        
    }
    echo "<script>alert();</script>";
    $handle = fopen("users/user" , "w");
    fwrite($handle, 'hi');
    fclose ($handle);

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday'])) {
        echo "!";
		try {	
			$content = $_POST['username'] . "#" . $_POST['password'] . "#" . $_POST['name'] . "#" . $_POST['surname'] . "#" . $_POST['phone'] . "#" . $_POST['email'] . "#" . $_POST['birthday'];
		
			$handle = fopen("users/" . $_POST['username'], w);
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