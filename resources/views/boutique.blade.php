<!doctype html>
<html>
<?php

?>
<head>
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/liquid.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <title>@lloTek - La Technologie à votre écoute...</title>
    <link rel="stylesheet" href="./css/index.scss">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}"    
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/allotek@.png')}}">    
</head>

<body>

    <div id="conteneur">
        <header class="header">
            <div id="logo">
                <img src="{{asset('img/allotek01.png')}}">
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
                            <li><a href="home"><span>Accueil</span><div class="liquid"></div></a></li>
                            <li><a href="prestations">Prestations</a></li>
                            <li><a href="tarifs">Tarifs</a></li>
                            <li><a href="boutique">Boutique</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="apropos">A propos</a></li>
                            <li><a href="contact">Contact</a></li>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Début contenu -->
        
        <!-- Fin contenu --> 

    <!-- Début Footer -->
    <footer>
        <section class="icones_footer">
            <div><a class="icones_hover" href="https://www.linkedin.com/in/batwilf/" target="_blank"><img src="{{asset('img/linkedin.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="https://www.facebook.com/Allotek"><img src="{{asset('img/facebook.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('img/google-plus.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('img/youtube.png')}}" width="50px" height="50px"></a></div>    
            <div><a class="icones_hover" href="#"><img src="{{asset('img/snapchat.png')}}" width="50px" height="50px"></a></div>    
        </section>
    </footer>
    <!-- Fin Footer -->

    </div>
    <!-- Fin conteneur -->    
</body>

</html>