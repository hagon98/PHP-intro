<?php 
require_once 'authentification.php';
require_once 'contenu.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma poissonnerie</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Poissons</a>
                    </li>

                </ul>

            </div>
            <div>
            <form action="" method="POST">
                <input type="text" name="username" id="" placeholder="pseudo">
                <input type="password" name="password" id="" placeholder="mot de passe">
                <input type="submit" value="Go">
            </form>
            <p><?= $messageErreur ?></p>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="">
<form><button type="submit" name="type" value="mer" class="btn btn-primary">eau de mer</button></form>
<form><button type="submit" name="type" value="douce" class="btn btn-success">eau douce</button></form>
          
          
          <a href="../Poissonnerie/" class="btn btn-secondary">tous les poissons</a>

        </div>

            <div class="row justify-content-center">


    <div class="container row mt-2 d-flex">
        <?php 
        echo $contenuDeLaPage;
        ?>

    </div>



</body>

</html>