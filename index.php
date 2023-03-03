<?php
require_once "db/config.php";
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset='utf-8'>
    <title>SUMMIT training</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- Navbar Starts -->
    <nav class="navbar">
        <ul>
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="#">About Us</a> </li>
            <li> <a href="#">Contact Us</a> </li>
            <?php
            if (isset($_SESSION["loggedIn"])) {
                echo ("<li> <a href=\"php/logout.php\">Logout &nbsp <small>({$_SESSION['username']})</small></a> </li>");
            } else {
                echo ("<li> <a href=\"php/signup.php\">Signup</a> </li>");
                echo ("<li> <a href=\"php/login.php\">Login</a> </li>");
            }
            ?>
        </ul>
    </nav>
    <!-- Navbar Ends -->

    <!-- Article Starts -->
    <article class="article">
        <section class="section">
           <div class="section-item">
           <h4>NOTRE MISSION</h4>
            <p> Summit Training est une équipe d’entraineurs hautement qualifiés. Notre objectif est d’aider
                plus de 10,000 personnes par mois à améliorer leur composition corporelle, donc de perdre du
                gras ou de prendre de la masse musculaire. Mais nous le faisons différemment; on accompagne
                les gens de A à Z dans leur transformation physique. Structure alimentaire, plan d’entrainement
                personnalisé, suivi et encadrements serrés et bien plus. On transforme la vie des gens en les aidant
                à adopter un bon mode de vie en étant disponibles, à l’écoute, connaissants.</p>
           </div>
        </section>
        <section class="section">
            <div class="section-item">
            <h4>NOS PROGRAMMES</h4>
            <p>Ces programmes en ligne ne s’agissent pas de suivi personnalisé avec des rencontres avec nos entraineurs. Ce sont seulement des programmes mensuels récurrents basés sur vos objectifs.

                Pour optimiser à 100% tes résultats, n’hésites pas à remplir le formulaire plus bas pour un suivi et des programmes vraiment personnalisés. Tu peux regarder le descriptif de services plus bas pour savoir quel service te convient le mieux !

                T’as un objectif précis, mais t’aimes moins être suivi (e) de près? On a la solution pour toi! Chacun de nos coachs a une spécialité propre à lui/elle.

                On a créé un algorithme qui nous permet de savoir quel coach et son programme te correspondent le mieux. Tu n’as qu’à répondre aux questions plus bas, et 3 coaches vont t’être suggérés. Pour pas plus que 35$ par mois, tu vas recevoir un programme correspondant à TES objectifs.

                C’est l’option parfaite si tu veux avoir des résultats et être structuré(e) sans payer pour un suivi personnalisé! À chaque 4 semaines, un nouveau programme sera disponible pour le téléchargement sur ton compte, ici-même sur notre site. Regarde bien tes courriels, tu pourras te créer un compte à partir de là! Tu auras aussi une vidéo expliquant le programme à chaque fois dans la section ‘’ téléchargements’’ ou ‘’programmes’’ sur ton compte. Le programme est périodisé de façon intelligente et prend en considération le dernier. Ça t’assure d’avoir une progression constante et ça t’assure d’avoir des programmes qui respectent toujours tes objectifs. Tu vas recevoir les nouveaux programmes automatiquement. Si tu ne les veux plus, n’oublie pas de te désabonner! Tu peux aussi utiliser le questionnaire pour déterminer quel coach te convient mieux pour obtenir un suivi personnalisé!</p>
            </div>
        </section>
        *coach blocks**
        *instagram page connection*
        <section class="section">
            <h4>Trouve ton coach idéal</h4>
            <p>Suis ce guide virtuel pour qui est ton coach idéal ou pour choisir le programme adapté à tes objectifs</p>
        </section>
        <section class="section">
            <div class="section-item">
              <h4>NOS SERVICES</h4>
            </div>

            <div class="section-item">
                <h4>SERVICES ÉVALUATION</h4>
                <ul class="lists">
                    <li>Rencontre avec l’entraineur</li>
                    <li>Questionnaire complet sur les habitudes de vie</li>
                    <li>Prise des plis adipeux</li>
                    <li>Analyse de mouvements</li>
                    <li>Testing musculaires</li>
                </ul>
            </div>

            <div class="section-item">
                <h4>SUIVI EN ALIMENTATION</h4>
                <ul class="lists">
                    <li>Structure alimentaire</li>
                    <li>Suivi hebdomadaire</li>
                    <li>Prise des plis adipeux</li>
                    <li>Périodisation annuelle</li>
                    <li>Accès à tous les bénéfices Summit Training</li>
                </ul>
            </div>

            <div class="section-item">
                <h4>SUIVI EN ENTRAINEMENT</h4>
                <ul class="lists">
                    <li>Programme d’entrainement mensuel</li>
                    <li>Suivi hebdomadaire</li>
                    <li>Démonstration des exercices en salle</li>
                    <li>Périodisation annuelle</li>
                    <li>Accès à tous les bénéfices Summit Training</li>
                </ul>
            </div>

            <div class="section-item">
                <h4>SUIVI MENSUEL</h4>
                <ul class="lists">
                    <li>Programme d’entrainement mensuel</li>
                    <li>Structure alimentaire mensuelle</li>
                    <li>Suivi hebdomadaire</li>
                    <li>Prise des plis adipeux</li>
                    <li>Démonstration des exercices en salle</li>
                    <li>Périodisation annuelle</li>
                    <li>Accès à tous les bénéfices Summit Training</li>
        </ul>
            </div>

            <div class="section-item">
                <h4>SUIVI PREMIUM</h4>
                <ul class="lists">
                    <li>Programme d’entrainement mensuel</li>
                    <li>Structure alimentaire mensuelle</li>
                    <li>Rencontre hebdomadaire</li>
                    <li>Prise des plis adipeux hebdomadaire</li>
                    <li>Démonstration des exercices en salle</li>
                    <li>Périodisation annuelle</li>
                    <li>1h d’entrainement privé par semaine</li>
                    <li>Accès à tous les bénéfices Summit Training</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <div class="section-item">
            <h4>NOS FORMATIONS</h4>
            </div>
            <div class="section-item">
            <p>
                Nous croyons fortement que pour être un bon coach, il est d’important d’être bien éduqué, de toujours vouloir en savoir plus et de bien vouloir comprendre les subtilités de l’être humain.

                C’est pourquoi nous avons créé des formations dans le but d’aider chaque coach à mieux comprendre leurs clients, et donc à mieux les aider dans leurs objectifs. L’équipe Body mechanics se charge de bâtir les formations chez Summit Training.

                Chaque membre l’équipe a une spécialité propre à lui, ce qui fait en sorte que les sujets peuvent être TRÈS approfondis et précis. Nos formations sont donc séparées de façon plus spécifique. Ca permet de pousser chaque sujet à ses limites, et à s’assurer de bien comprendre un sujet en particulier. Clique sur chacune pour en savoir plus! Nous offrons aussi de la formation personnalisée sous forme de mentorat. Si tu aimerais en savoir plus, rempli le formulaire de contact !
            </p>
            </div>
        </section>
        <section class="section">
            <div class="section-item">
            *google page connection*
            <h4>NOUS CONTACTER</h4>
            <p>Tu veux ta transformation physique ou tu as tout simplement des questions? Écrit-nous juste ici!</p>
            </div>
        </section>
    </article>
    <!-- Article Ends -->
</body>