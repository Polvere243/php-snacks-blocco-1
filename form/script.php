<?php

    $user_name = $_GET('name');

    $email_address = $_GET('email');

    $age = $_GET('age');

    if(!count($_GET) && mb_strlen($user_name) < 3) {
        echo 'Accesso negato';
        die();
    } else if (!filter_var($email_addres, FILTER_VALIDATE_EMAIL)){
        echo 'Accesso negato';
    } else if (!is_numeric(age)) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso riuscito';
    }

