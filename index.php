<?php
require_once 'data/Data.php';
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <table class="table table-primary table-striped ">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Picture</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Country</th>
                        <th scope="col" class="text-center">Button</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $key => $value) { ?>

                        <tr class="text-center align-middle">
                            <td><?= $key ?></td>
                            <td><img class="image" src="img/<?= $value['picture'] ?>.jpg " alt=""></td>
                            <td class="border"><?= $value['name'] ?> </td>
                            <td class="border"><?= $value['country'] ?></td>
                            <td>
                                <a href="choice.php?id=<?= $key ?>" class="btn btn-secondary m-3">info</a>
                                <a class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modal<?= $key?>">effacer</a>



                                <div class="modal fade" id="modal<?= $key?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimer <?= $value['name'] ?> ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                           
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                                <button type="button" class="btn btn-primary">Oui</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>


            </table>
        </div>
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>