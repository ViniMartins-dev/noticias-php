<?php

    include ("db_conn.php");

    $user = $_POST['form-user'];
    $password = $_POST['form-pswd'];

    $sql_query = $conn->query("SELECT * FROM admin WHERE login = '$user' AND senha = '$password'");

    $sql_query2 = $conn->query("SELECT * FROM escritor WHERE login = '$user' AND senha = '$password'");


    if(!isset($_SESSION)) {
        session_start();
    }

    if($sql_query->num_rows == 1) {
		$_SESSION["login"] = "admin";

        header("location: /noticias-php/paginas/index.php");
		
    } elseif ($sql_query2->num_rows == 1) {
		$_SESSION["login"] = "escritor";
		
		header("location: /noticias-php/paginas/index.php");
    }
    
    else {
        echo "email ou senha inválidos <br />Redirecionando...";
        header('Refresh: 3; URL=/noticias-php/paginas/login.php');
    }
?>