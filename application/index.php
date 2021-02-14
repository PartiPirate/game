<?php /*
    Copyright 2021 Cédric Levieux, Parti Pirate

    This file is part of Game.

    Game is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Game is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Game.  If not, see <https://www.gnu.org/licenses/>.
*/ 

require_once("engine/utils/DiscourseUtils.php"); 
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ECO Game Parti Pirate</title>
    
    <!-- Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://eco.game.partipirate.org/" />
    <meta property="og:title" content="ECO Game Parti Pirate" />
    <meta property="og:description" content="Expérience sociale du Parti Pirate autour du jeu ECO" />
    <meta property="og:image" content="https://eco.game.partipirate.org/assets/images/logo.png" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="fb:page_id" content="partipiratefr" />
    <!-- Google +1 -->
    <meta itemprop="name" content="ECO Game Parti Pirate" />
    <meta itemprop="description" content="Expérience sociale du Parti Pirate autour du jeu ECO" />
    <meta itemprop="image" content="https://eco.game.partipirate.org/assets/images/logo.png" />
    <meta itemprop="author" content="farlistener" />
    <!-- Twitter -->
    <meta name="twitter:site" content="@partipirate" />
    <meta name="twitter:creator" content="@farlistener" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="https://eco.game.partipirate.org/" />
    <meta name="twitter:title" content="ECO Game Parti Pirate" />
    <meta name="twitter:description" content="Expérience sociale du Parti Pirate autour du jeu ECO" />
    <meta name="twitter:image" content="https://eco.game.partipirate.org/assets/images/logo.png" />
    <meta name="twitter:image:alt" content="Logo de Congressus" />
    
    <link href="favicon.ico" rel="shortcut icon"/>

    <link href="assets/css/open-sans.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/donations-gauge.css" rel="stylesheet">
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>	
</head>
<body>
<div id="header">
    <div id="header-logos-container"><a 
        href="https://partipirate.org" target="_blank"><img id="logo-pp" class="logo" src="assets/images/logo.png" title="Visitez notre page du Parti Pirate" alt="Voile du Parti Pirate permettant d'aller sur le site du Parti Pirate"></a><a 
        href="https://www.twitter.com/partipirate" target="_blank"><img id="logo-twitter" class="logo" src="assets/images/twitter.png" title="Visitez notre page Twitter du Parti Pirate" alt="Logo Twitter permettant d'aller sur le compte twitter du Parti Pirate"></a><a 
        href="https://discord.partipirate.org" target="_blank"><img id="logo-discord" class="logo" src="assets/images/discord.png" title="Visitez notre serveur discord du Parti Pirate" alt="Logo discord avec bandeau sur l'oeil permettant d'aller sur le serveur discord du Parti Pirate"></a></div>
    <div id="header-call-to-actions">
        <a href="https://adhesion.partipirate.org">Adhérer</a>
        /
        <a href="mailto:contact@partipirate.org" title="Envoyer un mail à contact@partipirate.org">Contacter</a>
    </div>
</div>
<div id="main">
    <div id="container">
        <div id="title" class="text-center margin-top-20">
            <img src="assets/images/eco-logo.webp" alt="Logo du jeu Eco">
            <span>+</span>
            <img src="assets/images/logo_pp.png" alt="Logo du Parti Pirate">
        </div>
        <div id="pitch" class="margin-top-20">
            <h2>Eco + Parti Pirate</h2>
            <p class="margin-top-20" style="text-align: center;">Dans <strong>30 jours</strong>, une <strong>météorite</strong> s'écrasera sur la <strong>planète</strong>.</p>
            <p>&nbsp;</p>
            <p>C'est ce délai que nous aurons pour prendre toutes les <strong>décisions</strong> nécessaires à notre <strong>survie</strong> sans <strong>détruire</strong> notre <strong>écosystème</strong>. Cette <strong>expérience</strong> sera l'occasion de <strong>découvrir</strong> et de mettre à l'épreuve <strong>ensemble</strong> au travers 
            d'un jeu vidéo des <strong>méthodes</strong> de prise de <strong>décision</strong> que nous pourrions appliquer à notre <strong>société</strong>. 
            Ces trente prochains jours, nous nous entraiderons, nous demanderons votre aide, nous réfléchirons ensemble à la meilleure façon de survivre avec les moyens du bord et à travers un <strong>idéal politique</strong>, celui que nous construirons <strong>collectivement</strong>.</p>
            <p>&nbsp;</p>
            <p style="text-align: center;">Il nous faudra <strong>coopérer</strong> pour construire une <strong>civilisation</strong> capable de <strong>prévenir l'apocalypse</strong>.</p>
            <p>&nbsp;</p>
            <p><strong>Partage des savoirs, développement d'une société, droit à la propriété, économie, coopération industrielle, gestion de l'énergie, gestion des ressources environnementales</strong>, nous nous donnons l'occasion d'<strong>aborder</strong> ces sujets, et bien d'autres, pendant un mois, <strong>en direct</strong>, 
            en continu (ou presque) sur 
             <strong><a href="https://eco.game.partipirate.org">eco.game.partipirate.org</a></strong>.
            Restez avec nous pour vivre cette expérience à travers <strong>ECO</strong>, un jeu vidéo de gestion coopérative très complet, du <strong>dimanche 7 février à 15h au mardi 9 mars, 15h</strong>.</p>
            <p>&nbsp;</p>
            <p>Les personnes qui participent sont largement invitées à <strong>diffuser</strong> leur expérience en <strong>streaming</strong>, cela signifie que les personnes qui seront avec nous sur le serveur du Parti Pirate seront <strong>susceptibles</strong> d'être <strong>enregistrées</strong> et <strong>diffusées</strong> en direct notamment sur <strong>Twitch</strong>.</p>
            <p>&nbsp;</p>
            <p style="text-align: center;">Si vous voulez <strong>participer</strong> à l'expérience, rejoignez-nous sur <strong><a href="https://discord.partipirate.org/">Discord</a></strong>.</p>
        </div>
        <div id="lives" class="margin-top-20">
            <h2>Les lives</h2>
            <div id="lives-container" class="margin-top-20">
                <div id="waiting">Patientez... les diffusions en live arrivent.</div>
                <div id="no-live" style="display: none;">Il n'y a personne pour le moment, nous serons de retour très vite.</div>
            </div>
        </div>
        <div class="margin-top-20">
            <h2>Les dons</h2>
            <p class="margin-top-20">Le Parti Pirate a ouvert un <strong>appel à dons</strong> pour les élections <strong>législatives</strong> de 2022, pour connaitre nos <strong><a href="https://vote.partipirate.org/">objectifs</a></strong> ou <strong><a href="https://don.partipirate.org/project.php?id=146&skip=" target="blank">contribuer</a></strong> à financer nos candidatures, 
            rendez-vous sur la page dédiée : <strong><a href="https://vote.partipirate.org/">vote.partipirate.org</a></strong></p>
            <p>&nbsp;</p>
            <div class="donations-gauge-wrapper"></div>
        </div>
        <div id="story" class="margin-top-20 margin-bottom-20">
            <h2>Journal d’une habitante un peu perdue</h2>
<?php   

        $discoursePosts = getPosts(22584);
        $discoursePosts = $discoursePosts["post_stream"]["posts"];

        $toReplaceTexts = array();
        
        // Texte à chercher et à remplacer, on se moque de la casse

        $toReplaceTexts["florie"] = "https://www.twitch.tv/florielvm/";
        $toReplaceTexts["farlistener"] = "https://www.twitch.tv/farlistener/";
        $toReplaceTexts["alexscott"] = "https://www.twitch.tv/alexscottt/";

        foreach($discoursePosts as $discoursePost) { 
            $content = $discoursePost["cooked"];

            foreach($toReplaceTexts as $search => $replace) {
                $regex = "/($search)/mi";
                preg_match_all($regex, $content, $matchs, PREG_SET_ORDER, 0);

                foreach($matchs as $match) {
                    $found = $match[0];
                    $localReplace = "<a href=\"$replace\" target=\"_blank\">$found</a>";
                    
                    $content = str_replace($found, $localReplace, $content);
                }
            }

            /* Réglage typo*/

            $content = str_replace("« ", "«&nbsp;", $content);
            $content = str_replace(" »", "&nbsp;»", $content);
            $content = str_replace(" …", "…", $content);
        ?>
                <?=$content?>
<?php   } ?>
        </div>
    </div>
</div>
<div id="footer">
    <div id="footer-address">
        <span class="bold">PARTI PIRATE</span>
        - 21 place de la République,
        75003 Paris
    </div>
    <div id="footer-more">
        <a href="mailto:contact@partipirate.org">Contact</a> | <a href="legal.html">Mentions légales</a>
    </div>
</div>

<script src="assets/js/eco.js?r=<?=filemtime("assets/js/eco.js")?>"></script>	
<script src="assets/js/donations-gauge.js"></script>	

</body>
</html>