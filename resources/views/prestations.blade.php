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
        <div id="contenu">
            <h1>Voici une liste de mes principales prestations</h1>
            <!-- Début section -->
            <section class="cadre">
                <h2>Dépannages et conseils informatiques</h2>
                <article class="article_depannage">
                    <div class="depannage">
                        <img src="{{asset('img/im4.jpg')}}" alt="" width="400" height="300" id="im4" />
                        <p><strong>Dépannage matériel</strong> : réparation et remplacement des composants défectueux, nettoyage de l'ordinateur, remplacement de la batterie, etc. Les tarifs peuvent varier en fonction du composant à remplacer et du temps nécessaire pour la réparation.</p>
                    </div>
                    <div class="depannage">
                        <img src="{{asset('img/im6.jpg')}}" alt="" width="400" height="300" id="im4" />
                        <p><strong>Dépannage logiciel</strong> : installation, configuration et mise à jour des systèmes d'exploitation, des logiciels et des pilotes. Les tarifs peuvent varier en fonction du type de logiciel ou du système d'exploitation à installer.</p>
                    </div>
                    <div class="depannage">
                        <img src="{{asset('img/im7.jpg')}}" alt="" width="400" height="300" id="im4" />
                        <p><strong>Récupération de données</strong> : récupération de données perdues ou corrompues à partir de disques durs, de clés USB, de cartes mémoire, etc. Les tarifs peuvent varier en fonction de la quantité de données à récupérer et de la complexité de la récupération.</p>
                    </div>
                </article>
            </section>
            <br>
            <section class="cadre">
                <h2>Créations de sites internet</h2>
                <article class="article_depannage">
                    <div class="creation_site">
                        <img src="{{asset('img/im3.jpg')}}" alt="" width="400" height="300" id="im2" />
                        <p>@lloTek vous propose également la création de votre site internet avec l'aide d'un CMS. Créer un site internet avec l'aide d'un système de gestion de contenu (CMS) est un moyen efficace de mettre en place un site web professionnel et fonctionnel. Les compétences en matière de CMS sont incroyablement utiles pour les individus et les entreprises qui cherchent à créer un site web professionnel et fonctionnel. Les professionnels expérimentés dans la création de sites web avec un CMS sont capables de créer des designs de qualité supérieure, d'intégrer des fonctionnalités avancées telles que des formulaires de contact et des galeries d'images, et de gérer efficacement les contenus. De plus, les CMS modernes sont généralement faciles à utiliser et à administrer, ce qui permet aux utilisateurs de mettre à jour et de gérer leur site web de manière efficace. En somme, les compétences en matière de création de site web avec un CMS sont un atout clé pour tous ceux qui cherchent à créer un site web professionnel et efficace.</p>
                    </div>
                    <div class="creation_site">
                        <img src="{{asset('img/im2.jpg')}}" alt="" width="400" height="300" id="im2" />
                        <p>@lloTek vous propose également la création de votre site internet sur mesure. Mes compétences en matière de développement web sont exceptionnelles, en particulier lorsqu'il s'agit de créer des sites internet sur mesure. Je suis habile en utilisant les principaux langages de programmation tels que HTML, CSS, JavaScript, PHP et MySQL pour créer des sites web professionnels et fonctionnels. J'utilise ces compétences pour créer des designs uniques, intégrer des fonctionnalités avancées et gérer efficacement les bases de données. Je suis également capable de travailler en étroite collaboration avec les clients pour comprendre leurs besoins et les aider à réaliser leur vision pour leur site web. Mes compétences en matière de développement web sont un atout clé pour tous ceux qui cherchent à créer un site web sur mesure qui répond parfaitement à leurs besoins. Je suis confiant de ma capacité de créer des sites web exceptionnels pour tous les types de clients, et je suis impatient de mettre mes compétences à l'épreuve.</p> 
                    </div>                   
                </article>                
            </section>
            <br>
            <section class="cadre">
                <h2>Formations et initiations à l'outil informatique</h2>
                <article class="article_depannage">
                    <div class="formation">
                        <img src="{{asset('img/im8.jpg')}}" alt="" width="400" height="300" id="im3" />
                        <p>@lloTek vous propose aussi des formations et initiations à l'outil informatique. Je suis capable de transmettre mes connaissances de manière claire et concise, et j'ai une grande capacité d'adaptation pour m'adapter aux besoins de mes élèves. Je suis également capable de fournir des cours pour une grande variété de sujets, allant des bases de l'informatique aux outils professionnels avancés. Mes compétences pédagogiques et mes connaissances techniques me permettent de fournir des cours de qualité qui aident les gens à améliorer leur compréhension et leur maîtrise de l'outil informatique. Je suis confiant de ma capacité à fournir des cours qui répondent aux besoins de mes élèves et je suis impatient de mettre mes compétences à l'épreuve.</p>
                    </div>
                </article>
            </section>
            <br>
            <!-- Fin section -->

        </div>
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