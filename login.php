<?php
include "includes/head.php";
if (empty($_POST) === false) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	if (empty($username) || empty($password)) {
		$errors[] = "Devi inserire username e password!";
	} else if (user_exists($username) === false) { //in users.php
		$errors[] = "Username non trovato";
	} else if (user_active($username) === false) { //in users.php
		$errors[] = "Account non attivato. Controlla l'email di conferma che ti è stata inviata in fase di registrazione.";
	} else {

		$login = login($username, $password); //in users.php

		if ($login === false) {
			$errors[] = "La combinazione username/password fornita non è corretta!";
		} else {
			$_SESSION["user_id"] = $login; //perchè login returna l'userid
			header("Location: index.php");
			exit();
		}
	}



} else {
	header("Location: login_form.php");
	exit();
}

echo output_errors($errors);

?>


<div class="row">


</div>