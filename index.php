<?php
   require('config/database.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alban Okoby">
    <meta name="description" content="Emmanuel Alban Okoby est un developpeur, formateur et encadreur qui conçoit des interfaces de sites et applications web | ceci est l'un de mes travaux Personals j'ai nommé Personnal php_portfolio">
    <title> ALBAN OKOBY | Personal portfolio</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <!-- font-awesome cdn -->
    <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />
    <!-- css personalisé -->
    <link rel="stylesheet" href="assets/css/main.css">

    
</head>
<body>
    
    <header>
        <div class="utilisateur">
            <img src="assets/image/alban.jpg" alt="Alban okoby | photo profil">
            <h3 class="nom">Alban Okoby</h3>
            <p>Developpeur Web</p>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#apropos">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <div id="menuIcon" class="fas fa-bars"></div>

    <!-- Section d'acceuil -->

    <section class="home" id="home">
    <?php 
        $sqlHome = 'SELECT * FROM home';
        $homeStatement = $connect->prepare($sqlHome);
        $homeStatement->execute();
        $row = $homeStatement->fetchAll();
     
     //  Affichage par champ de la table home
        foreach($row as $home) {
        ?>
            <h3> <?php echo $home['title']; ?> </h3>
            <h2>Je suis 
                <span> <?php echo $home['name'] ?> </span>
            </h2>
            <p><?php echo $home['post']; ?></p>
            <p> <?php echo $home['description']; ?> 
            </p>
            <a href="#apropos">
                <button class="btn"> <?php echo $home['button']; ?> 
                <i class="fas fa-user"></i>
                </button>
            </a>  
        <?php    
        }
        ?>
    </section>
    <!-- End Section d'acceuil -->

    <!-- Section  à propos -->
     <section class="about" id="apropos">
     <?php 
        $sqlAbout = 'SELECT * FROM about';
        $aboutStatement = $connect->prepare($sqlAbout);
        $aboutStatement->execute();
        $row = $aboutStatement->fetchAll();
     
     //  Affichage par champ de la table about
        foreach($row as $about) {
        ?>
            <h2 class="heading">
                A propos de<span>   moi </span>
            </h2>
            <article class="row">
                <div class="info">
                    <h3><span> nom :</span> <?php echo $about['name']; ?></h3>
                    <h3><span> Age :</span> <?php echo $about['age']; ?> </h3>
                    <h3><span> Qualification :</span> <?php echo $about['qualification']; ?> </h3>
                    <h3><span> Emploi(s) :</span> <?php echo $about['post']; ?> </h3>
                    <h3><span> Langue :</span> <?php echo $about['langue']; ?> </h3>
                    <a href="#">
                        <button class="btn"> <?php echo $about['button']; ?> 
                            <i class="fas fa-download"></i>
                        </button>
                    </a>
                </div>
                <aside class="counter">
                    
                    <div class="box">
                        <span>+<?php echo $about['annee_exp']; ?> </span>
                        <h3> années d'expériences</h3>
                    </div>
                    <div class="box">
                        <span>+<?php echo $about['projet_termine']; ?> </span>
                        <h3> projets terminés</h3>
                    </div>
                    <div class="box">
                        <span>+<?php echo $about['clt_satisfait']; ?> </span>
                        <h3> clients satisfaits</h3>
                    </div>
                    <div class="box">
                        <span>+<?php echo $about['formations_organisees']; ?> </span>
                        <h3> formations organisées</h3>
                    </div>
                    <div class="box">
                        <span>+<?php echo $about['certification']; ?> </span>
                        <h3> certifications</h3>
                    </div>
                    
                </aside>
            </article>
        
        <?php
        }
        ?>
    </section>
    <!-- End Section  a peopos -->

    <!-- Section  Education -->
        <section class="education" id="education">
            <h2 class="heading">
                Mon<span> parcours éducatif / professionnel</span>   
            </h2>
            <article class="box-container">
               <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2018</span>
                    <h3> Baccalaureat Scientifique</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
               </div>
               <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2019</span>
                    <h3> Intégrateur web</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2020</span>
                    <h3> Intégrateur/Développeur web</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
                 </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2021</span>
                    <h3> Développeur front end</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>mars 2021</span>
                    <h3> Développeur front end</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Janvier 2022</span>
                    <h3> Développeur PHP/Symfony</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio cupiditate maxime quo quae commodi nobis, debitis vel.</p>
                </div>

    
                </aside>
            </article>
        </section>
    <!-- End Section Education -->

    <!-- Starts Section portfolio -->
        <section class="portfolio" id="portfolio">
            <h2 class="heading"> Mes<span> réalisations</span></h2>
            <article class="box-container">
                <a href="#">
                    <div class="box">
                        <img src="assets/image/qrcode/lg.PNG">
                      <p>Qr Code</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box">
                        <img src="assets/image/chatapp/chatapp.PNG">
                      <p>Chat App</p>
                    </div>
                </a>
               
            </article>
        </section>


    <!-- End Section portfolio -->

    <!-- Scroll to -->
    <div class="scroll_top"> 
        <a href="#home"> 
            <i class="fas fa-arrow-alt-circle-up"></i> 
        </a> 
    </div>

    <!-- cdn JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript personalisé -->
    <script src="assets/js/main.js"></script>
</body>
</html>