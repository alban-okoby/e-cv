<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alban Okoby">
    <meta name="description" content="Emmanuel Alban Okoby est un developpeur, formateur et encadreur sous les couleurs de l'ESN DigitalSouag qui conçoit des interfaces de sites, des templates d'applications web | ceci est l'un de ses travaux, j'ai nommé E-CV">
    <title>Document</title>
    <?php require '../config/links/CdnCss.php'; ?>
    <link rel="stylesheet" href="../../../public/assets/css/main.css">
</head>
<body>
        <section class="portfolio" id="portfolio">
            <h2 class="heading"> Le<span> projet</span></h2>
            <article class="box-container">
                <?php 
                    require '../Model/ViewPortfolioItemModel.php';
                    foreach($statement as $project){
                ?>
                        <a href="#">
                        <div class="box">
                            <img src="../../../public/assets/image/<?= $project['project_img'] ?>">
                            <p><?= $project['project_name'] ?></p>
                        </div>
                        </a>
                    <?php } ?>
            </article>
        </section>

</body>
</html>