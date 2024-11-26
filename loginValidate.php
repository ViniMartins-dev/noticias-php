<?php

    $u1 = "teste";
    $s1 = "teste";

    $user = $_POST['form-user'];
    $password = $_POST['form-pswd'];

    if($user == $u1 and $password == $s1) {
        echo "<h1>bateu</h1>";
    }else {
        echo "<h1>NÃO bateu</h1>";
    }
?>