<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $frase = "Luigi ha fatto una cazzata enorme durante l'esame di guida: ha guidato senza mettere la cintura! Ovviamente questa cazzata non è passata inosservata all'esaminatore che ha deciso giustamente di bocciarlo.";
    $parolaccia = $_GET["parolaDaCensurare"];
    $fraseCensurata = str_replace($parolaccia, "***", $frase); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Frase senza censura</h2>
    <p><?php echo $frase; ?></p>
    <p>La lunghezza in caratteri della frase senza censura è: <?php echo strlen($frase); ?></p>
    <h2>Frase censurata</h2>
    <p><?php echo $fraseCensurata; ?></p>
    <p>La lunghezza in caratteri della frase censurata è: <?php echo strlen($fraseCensurata); ?></p>
</body>
</html>