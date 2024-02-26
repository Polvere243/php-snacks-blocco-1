<?php
    
        $paragraph = 'Non ci saranno sventolii di bacchette o stupidi incantesimi in questo co
        Con ciò, non mi aspetto che molti voi capiscano la sottile scienza e l\'esatta arte del preparare pozioni.
        Comunque ai pochi, scelti dal fato, che possiedono la predisposizione,
        Io posso insegnare come stregare la mente, irretire i sensi.
        Io posso insegnarvi come imbottigliare la fama, prontare la gloria, finanche a emettere un fermo alla morte.';
    

        $paragraphs = explode('.', $paragraph);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paragraph</title>
    </head>
    <body>
        <div>
            <?php foreach ($paragraphs as $paragraph) : ?>
                <p>
                    <?= $paragraph ?>.
                </p> 
            <?php endforeach; ?>
        </div>
    </body>
    </html>