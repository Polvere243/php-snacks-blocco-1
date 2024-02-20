<?php



    $name = $_GET['name'] ?? '';

    $email = $_GET['email'] ?? '';

    $age = $_GET['age'] ?? '';

    $is_name_invalid = !count($_Get) || !mb_strlen($name) < 3;
    
    $is_email_invalid = !count($_Get) || !str_contains($email, "@", ".") < 3;
    
    $is_age_invalid = !count($_Get) || !mb_strlen($name) < 3;

    $is_invalid = $is_name_invalid || $is_email_invalid || $is_age_invalid;

    $message = $is_invalid ? 'Accesso negato' :'Accesso riuscito';

    echo $message;

