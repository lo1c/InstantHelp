<?php
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['birthday'])) {
		try {	
			$content = $_POST['username'] . "#" . $_POST['password'] . "#" . $_POST['name'] . "#" . $_POST['surname'] . "#" . $_POST['phone'] . "#" . $_POST['email'] . "#" . $_POST['birthday'];
			$handle = fopen("users/" . $_POST['username'], "w");
			fwrite ($handle, $content);
			fclose ($handle);
	
			$content2 = "<?php fopen('confirmed/" . $_POST['username'] . "', 'w'); fclose('confirmed/" . $_POST['username'] . "'); ?>";
			$handle2 = fopen("requests/" . $_POST['username'], "w");
			fwrite ($handle2, $content2);
			fclose ($handle2);
	
			$receiver = $_POST['email'];
			$sender = "register@instant.help";
			$subject = "Danke für die Registrierung!";
			$body = "Lieber " . $_POST['username'] . ", vielen herzlichen Dank für deine Registrierung, die fast abgeschlossen ist. <br/> Folge <a href='requests/" . $_POST['username'] . "'>diesen Link</a>, um die Registrierung abzuschließen. Du wirst es nicht bereuen. ;-)";
			
			$header  = "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$header .= "From: $absender\r\n";
	
			mail($receiver, $subject, $body, $header);
	
			header('Location: /done.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
            
			echo "ALLES KLAR!";
		} catch (Exception $ex) {
			header('Location: /register.php?username=' . $_POST['username'] . "&name=" . $_POST['name'] . "&surname=" . $_POST['surname'] . "&birthday=" . $_POST['birthday'] . "&phone=" . $_POST['phone'] . "&email=" . $_POST['email']);
		}
	}
?>