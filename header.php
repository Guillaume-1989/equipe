<?php
defined ('NOM_DE_LEQUIPE') or define ('NOM_DE_LEQUIPE', 'La Grosse Equipe');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titre) ? $titre : 'L\'équipe '.NOM_DE_LEQUIPE ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>


    <header class='bg-light'>
        <div class="container">
            <div class='row'>
                <div class='col-12'>
                    <h1><?= isset($titre) ? $titre : 'L\'équipe '.NOM_DE_LEQUIPE ?></h1>
                </div>
            </div>
        </div>
    </header>
    <nav class="nav">
        <a class="nav-link" href="index.php">Accueil</a>
        <a class="nav-link" href="guillaume.php">Guillaume</a>
		<!-- ici iront les autres liens -->
    </nav>
    <main>
        <div class="container">
            <div class='row'>
                <div class='col-12'>