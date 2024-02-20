<?php

$matches = [
    [
        'home' => 'Varese',
        'guest' => 'VL Pesaro',
        'home_score' => 91,
        'guest_score' => 80
    ],

    [
        'home' => 'Virtus Bologna',
        'guest' => 'Scafati',
        'home_score' => 94,
        'guest_score' => 67
    ],

    [
        'home' => 'Trento',
        'guest' => 'Universo Torino',
        'home_score' => 82,
        'guest_score' => 85
    ],

    [
        'home' => 'Brescia',
        'guest' => 'Reggiana',
        'home_score' => 86,
        'guest_score' => 63
    ],

    [
        'home' => 'Cremona',
        'guest' => 'Napoli',
        'home_score' => 90,
        'guest_score' => 83
    ],

    [
        'home' => 'Olimpia Milano',
        'guest' => 'Brindisi',
        'home_score' => 69,
        'guest_score' => 55
    ],
    ];

    
    ?>

      <!DOCTYPE html>
    <html>
        <head>
            <title>Pallacanestro</title>
            <meta charset="UTF-8">
            <meta description="viewport" content="width= device-width, initial-scale= 1.0">
        </head>

        <body>
            <ul>
                <?php foreach ($matches as $match) : ?>
                    <?php foreach ($match as $teams) : ?>
                        <li>
                            <?= $teams['home'] . -$teams['guest'] .  $teams['home_score'] - $teams['guest_score'] ?> 
                        </li>
                    <?php endforeach ?>
                <?php endforeach; ?>
            </ul>
        </body>
    </html>
