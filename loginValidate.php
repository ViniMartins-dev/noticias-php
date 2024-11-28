<?php

    $u1 = "teste";
    $s1 = "teste";

    $user = $_POST['form-user'];
    $password = $_POST['form-pswd'];

    if($user == $u1 and $password == $s1) {
        if(!isset($_SESSION)) {
			session_start();
		}

		$_SESSION["login"] = true;
		
		header("location: index.php");
    }else {
        echo "<h1>NÃO bateu</h1>";
    }
?>