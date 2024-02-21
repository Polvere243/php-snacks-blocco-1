<?php



    $name = $_GET['name'] ?? '';

    $email = $_GET['email'] ?? '';

    $age = $_GET['age'] ?? '';

    $is_name_invalid = !empty($_Get) || !mb_strlen($name);
    
    $is_email_invalid = !empty($_Get) || !str_contains($email, "@") && !str_contains($email, ".");
    
    $is_age_invalid = !empty($_Get) || !mb_strlen($name);

    $is_invalid = $is_name_invalid || $is_email_invalid || $is_age_invalid;

    $message = $is_invalid ? 'Accesso negato' :'Accesso riuscito';

    echo $message;

