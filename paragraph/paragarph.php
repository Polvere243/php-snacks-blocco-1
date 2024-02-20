<?php
    $text = [
        'paragraph' => '<p> Non ci saranno sventolii di bacchette o stupidi incantesimi in questo corso.</p>',
        '<p>Con ciò, non mi aspetto che molti voi capiscano la sottile scienza e l\'esatta arte del preparare pozioni.</p>',
        '<p> Comunque ai pochi, scelti dal fato, che possiedono la predisposizione,</p>',
        '<p> Io posso insegnare come stregare la mente, irretire i sensi.</p>',
        '<p> Io posso insegnarvi come imbottigliare la fama, prontare la gloria, finanche a emettere un fermo alla morte.</p>'
    ];
    
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
            <p><?php foreach () :
                 $split_paragraph = $text['paragraph']['key'];
                explode('.', $split_paragraph);
                 endfor ?>
            </p> 
        </div>
    </body>
    </html>