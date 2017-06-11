<?php
	if(isset($_POST['title']) && isset($_POST['Beschreibung']) && isset($_POST['Fach']) && isset($_POST['Bewertung']) && isset($_POST['Aufträge']) && isset($_POST['Umkreis']) && isset($_POST['Stundenlohn']) && isset($_POST['Uhrzeit'])) {
		$ni = fopen("instants/" . $_POST['title'], "w");
		fwrite($ni, $_POST['tirle'] . "#" . $_POST['Beschreibung'] . "#" . $_POST['Fach'] . "#" . $_POST['Bewertung'] . "#" . $_POST['Aufträge']  . "#" . $_POST['Umkreis'] . "#" . $_POST['Stundenlohn'] . "#" . $_POST['Uhrzeit']);
		fclose($ni);
		header('location: /in_index.php');
	} else {
		header('location: /search.php?title=' . $_POST['title'] . "&Beschreibung=" . $_POST['Beschreibung'] . "&Fach="  . $_POST['Fach'] . "&Bewertung=" . $_POST['Bewertung'] . "&Aufträge=" . $_POST['Aufträge'] . "&Umkreis=" . $_POST['Umkreis'] . "&Stundenlohn=" . $_POST['Stundenlohn'] . "&Uhrzeit=" . $_POST['Uhrzeit']);
	}
?>