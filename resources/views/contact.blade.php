<!doctype html>
<html>
<x-head/>

<body>

    <div id="conteneur">
<x-header/>
        <!-- Début contenu -->
        <div id="contenu">
            <!-- Début section -->
            <section class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.8312252576384!2d1.8566873318753296!3d50.033258259401535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd8af7ddb39f89%3A0xac6c486c803de7f1!2s2%20Rue%20du%20Charon%2C%2080490%20Bailleul!5e0!3m2!1sfr!2sfr!4v1673966264731!5m2!1sfr!2sfr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <section class="identification">
                <div class="section_contact">
                    <h1 style="text-decoration: underline;">Coordonnées de Contact</h1>
                    <div class="coordonnee">
                        <h2>Adresse Postale</h2>
                        <h3>2 Rue du Charon</h3>
                        <h3>Bellifontaine</h3>
                        <h3>80490 Bailleul</h3>
                        <h2>Téléphone Fixe</h2>
                        <h1>09-71-21-08-98</h1>
                        <p>Veuillez demander à parler à Monsieur Petit Wilfrid.</p>
                    </div>
                </div>
                <div class="section_contact">
                    <h1 style="text-decoration: underline;">Formulaire de Contact</h1>
                    <form class="formulaire" method="POST" action="">
                        @csrf
                        <label>Nom</label>
                        <input class="input_formulaire" id="nom" type="text" name="nom" placeholder="Votre nom svp...">
                        <label>Prénom</label>
                        <input class="input_formulaire" id="prenom" type="text" name="prenom" placeholder="Votre prénom svp...">
                        <label>Email</label>
                        <input class="input_formulaire" id="email" type="email" name="email" placeholder="Votre email svp...">
                        <label>Téléphone</label>
                        <input class="input_formulaire" id="tel" type="tel" name="tel" placeholder="Votre téléphone svp...">
                        <label>Votre message</label>
                        <textarea class="input_formulaire" id="message" name="message" placeholder="Votre message svp..."></textarea>
                        <button type="submit" name="bouton" class="bouton_formulaire">Envoyez-moi votre demande</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $message = $_POST['message'];

                        $to = 'contact@allotek.fr';
                        $sujet = 'Nouveau contact depuis @lloTek';
                        $contenu = 'Nom: ' . $nom . ' - ' . 'Prenom: ' . $prenom . ' - ' . 'Email: ' . $email . ' - ' . 'Telephone: ' . $tel . ' - ' . 'Message: ' . $message;
                        $headers = "From: " . $email;

                        mail($to, $sujet, $contenu, $headers);

                        echo '<h1>Merci de m\'avoir contacté!</h1>';

                        echo 'Votre nom est : ' . $nom . '<br>';
                        echo 'Votre prénom est : ' . $prenom . '<br>';
                        echo 'Votre email est : ' . $email . '<br>';
                        echo 'Votre téléphone est : ' . $tel . '<br>';
                        echo 'Votre message est : ' . $message . '<br>';

                        echo '<p>Si ces informations vous semblent incorrectes, veuillez recommencer la saisie : merci.</p>';
                    }
                    ?>
                </div>
            </section>
        </div>        
        <!-- Fin contenu --> 

    <!-- Début Footer -->
<x-footer/>
    <!-- Fin Footer -->

    </div>
    <!-- Fin conteneur -->    
</body>

</html>