<?php
require_once "data/Data.php";

if (!isset($_GET['id'])) {
    header('Location: error.php');
    exit;
}

?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <?php if (array_key_exists($_GET['id'], $data)) { ?>

        <header class="headerchoice border border-dark bg-primary">
            <h1 class="text-center mt-5 text-white header2">Information sur <?= $data[$_GET['id']]['name'] ?></h1>
        </header>



        <div class=" d-flex justify-content-center mt-5">

            <div class="card" style="width: 20rem;">
                <img src="img/<?= $data[$_GET['id']]['picture'] ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= "Nom : " . $data[$_GET['id']]['name'] ?></p>
                    <p class="card-text "><?= "Mail : " . $data[$_GET['id']]['email'] ?></p>
                    <p class="card-text"><?= "Adresse : " . $data[$_GET['id']]['address'] ?></p>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <p class="text-center fs-2"> Profil non valide</p>
    <?php } ?>

    <div class="d-flex justify-content-center">
        <a href="index.php" class="btn btn-secondary m-3 ">Retour</a>
    </div>




    <footer class="footerchoice border border-dark bg-primary ">

    </footer>



</body>

</html>