<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css?t=<?= time() ?>">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header section -->
    <header class="mb-3">
        <h1>
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
            Les Argonautes
        </h1>
    </header>

    <!-- Content section -->
    <?= $content ?>

    <!-- Footer section -->
    <footer class="text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
            <a class="text-dark" href="index.php">Retour au Argaunotes</a>
        </div>
    </footer>
</body>

</html>