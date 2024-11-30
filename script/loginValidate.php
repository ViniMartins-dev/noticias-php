<?php

    include ("db_conn.php");

    $user = $_POST['form-user'];
    $password = $_POST['form-pswd'];

    $sql_query = $conn->query("SELECT * FROM user WHERE login = '$user' AND senha = '$password'");


    if($sql_query->num_rows == 1) {
        if(!isset($_SESSION)) {
			session_start();
		}

		$_SESSION["login"] = true;
		
		header("location: /noticias-php/paginas/index.php");

    }else {
        echo "email ou senha inválidos <br />Redirecionando...";
        header('Refresh: 3; URL=/noticias-php/paginas/login.php');
    }
?>