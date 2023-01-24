<!doctype html>
<html>
<?php

?>
<head>
    <link href="{{asset('../resources/css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/css/liquid.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <title>@lloTek - La Technologie à votre écoute...</title>
    <link rel="stylesheet" href="./css/index.scss">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}"    
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/resources/img/allotek@.png')}}">    
</head>

<body>

    <div id="conteneur">
        <header class="header">
            <div id="logo">
                <img src="{{asset('../resources/img/allotek01.png')}}">
            </div>
            <nav class="nav">
                <div class="nav-wrapper">
                    <div class="nav-header">

                    </div>
                    <div class="nav-menu">
                        <div class="nav-button">
                            <label for="nav-check">
                                <span></span>
                                <span></span>
                                <span></span>
                            </label>
                        </div>
                        <input type="checkbox" id="nav-check">
                        <div class="nav-link">
                            <li><a href="index.php"><span>Accueil</span><div class="liquid"></div></a></li>
                            <li><a href="prestations.html">Prestations</a></li>
                            <li><a href="tarifs.html">Tarifs</a></li>
                            <li><a href="boutique.html">Boutique</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="apropos.html">A propos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Début contenu -->
        <div id="contenu">
            <h1>Hello World !!! , Bienvenue sur mon site web</h1>
            <!-- Début section -->
            <section class="video">
                <iframe width="860" height="315" src="https://www.youtube.com/embed/4HnFg95mvbE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </section>
            <!-- Fin section -->
            <section class="section">
                <div class="cadre boite1">
                    <h1>Identification</h1>
                    <form class="identification_form">
                        <label>Pseudo : </label><br>
                        <input name="pseudo" type="text"><br>

                        <label>Mot de Passe</label><br>
                        <input name="mdp" type="password"><br> 
                        
                        <input type="button" value="Connexion" name="bouton_connexion">
                    </form>

                </div>
                <div class="cadre boite2">
                    <h1>Actualités</h1>
                </div>
                <div class="cadre boite3">
                    <h1>Derniers Articles</h1>
                </div>
            </section>
        </div>
        <!-- Fin contenu -->
        <!-- Début aside -->
        <aside>
            <a href="http://www.mon-compteur.fr"><img src="http://www.mon-compteur.fr/html_c02genv2-75150-1" border="0" /></a>
        </aside>
        <!-- Fin aside -->

    </div>
    <!-- Fin contenu -->

    <!-- Début Footer -->
    <footer>
        <section class="icones_footer">
            <div><a class="icones_hover" href="https://www.linkedin.com/in/batwilf/" target="_blank"><img src="{{asset('../resources/img/linkedin.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="https://www.facebook.com/Allotek"><img src="{{asset('../resources/img/facebook.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('../resources/img/google-plus.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('../resources/img/youtube.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('../resources/img/snapchat.png')}}" width="50px" height="50px"></a></div>    
        </section>
    </footer>
    <!-- Fin Footer -->

    </div>
    <!-- Fin conteneur -->    
</body>

</html>