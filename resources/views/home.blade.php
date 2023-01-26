<!doctype html>
<html>
<x-head titre="Allotek, ca pête !!" description="trop trop bien" keywords="des, mots, clefs"/>

<body>

    <div id="conteneur">
<x-header/>
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
<x-footer/>
    <!-- Fin Footer -->

    </div>
    <!-- Fin conteneur -->    
</body>

</html>