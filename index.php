<?php
    require('config/database.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alban Okoby">
    <meta name="description" content="Emmanuel Alban Okoby est un developpeur, formateur et encadreur qui conçoit des interfaces de sites et applications web | ceci est l'un de mes travaux Personals j'ai nommé Personnal portfolio_1">
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
            <h3>Hello world !</h3>
            <h2>Je suis 
                <span>Alban Okoby</span>
            </h2>
            <p>Si ce n'est que magnifique ! Que dis-je d'autre. <br> " Partager une ligne de code pour un monde de plus en plus meilleur ".</p>
            <a href="#apropos"><button class="btn">Qui suis-je ? <i class="fas fa-user"></i></button></a>
        </section>
    <!-- End Section d'acceuil -->

    <!-- Section  à propos -->
     <section class="about" id="apropos">
        <h2 class="heading">
            A propos de<span>   moi </span>
        </h2>
        <article class="row">
            <div class="info">
                <h3><span> nom :</span> Alban Okoby </h3>
                <h3><span> Age :</span> 25 ans </h3>
                <h3><span> Qualification :</span> Licence</h3>
                <h3><span> Post :</span> developpeur full Stack freelance</h3>
                <h3><span> Langue :</span> Français</h3>
                <a href="#">
                    <button class="btn"> Mon CV 
                        <i class="fas fa-download"></i>
                    </button>
                </a>
            </div>
            <aside class="counter">
                
                <div class="box">
                    <span>+2</span>
                    <h3> années d'expériences</h3>
                </div>
                <div class="box">
                    <span>+7</span>
                    <h3> projets terminés</h3>
                </div>
                <div class="box">
                    <span>+20</span>
                    <h3> clients satisfaits</h3>
                </div>
                <div class="box">
                    <span>+5</span>
                    <h3> formations organisées</h3>
                </div>
                <div class="box">
                    <span>+11</span>
                    <h3> certifications</h3>
                </div>
                
            </aside>
        </article>
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

    
</script>

    <!-- cdn JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript personalisé -->
    <script src="assets/js/main.js"></script>
</body>
</html>