<?php 

    session_start();

    $users = array(
        array("email" => "teste1@gmail.com", "password" => "123"),
        array("email" => "teste2@gmail.com", "password" => "1234")
    );

    $user_authenticated = false;

    foreach($users as $user) {

        if ($user['email'] == $_POST["email"] AND $user['password'] == $_POST['password']) {

            $user_authenticated = true;

        }

    }

    if ($user_authenticated) {

        echo "Usuário autenticado";

        header("Location: home.php");

        $_SESSION['autenticado'] = 'SIM';
    } else {

        header("Location: index.php?login=erro");

        $_SESSION['autenticado'] = 'NAO';
    }