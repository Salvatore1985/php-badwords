<?php
/* Descrizione:
1) Creare una variabile con un paragrafo di testo a vostra scelta.
2) Stampare a schermo il paragrafo e la sua lunghezza.
3) Una parola da censurare viene passata dall'utente tramite parametro GET.
4) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Exercitationem rerum, labore sequi alias reprehenderit 
nihil earum voluptatum quis quia quidem fuga commodi velit quod doloremque 
necessitatibus sit laborum? Quisquam, beatae.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Exercitationem rerum, labore sequi alias reprehenderit 
nihil earum voluptatum quis quia quidem fuga commodi velit quod doloremque 
necessitatibus sit laborum? Quisquam, beatae.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Exercitationem rerum, labore sequi alias reprehenderit 
nihil earum voluptatum quis quia quidem fuga commodi velit quod doloremque 
necessitatibus sit laborum? Quisquam, beatae.';

//variabile per prelevare il valore del get "parola"
$searchWord = $_GET["word"];

//variabile per sostituire il valore preso dal get con (***)
$censorWord = str_replace($searchWord, '***', $paragraph);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <p> <?php echo $paragraph ?> </p>
    <span>La lunghezza del paragrafo è <?php echo strlen($paragraph) ?> caratteri</span>
    <hr>
    <!-- Sostituzione del valore get con (***) -->
    <p><?php echo $censorWord ?></p>
    <span>La lunghezza del paragrafo è <?php echo strlen($censorWord) ?> caratteri</span>
</body>

</html>