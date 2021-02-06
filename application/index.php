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
        href="https://partipirate.org" target="_blank"><img id="logo-pp" class="logo" src="assets/images/logo.png"></a><a 
        href="https://www.twitter.com/partipirate" target="_blank"><img id="logo-twitter" class="logo" src="assets/images/twitter.png"></a><a 
        href="https://discord.partipirate.org" target="_blank"><img id="logo-discord" class="logo" src="assets/images/discord.png"></a></div>
    <div id="header-call-to-actions">
        <a href="https://adhesion.partipirate.org">Adhérer</a>
        /
        <a href="mailto:contact@partipirate.org" title="Envoyer un mail à contact@partipirate.org">Contacter</a>
    </div>
</div>
<div id="main">
    <div id="container">
        <div id="title" class="text-center margin-top-20">
            <img src="assets/images/eco-logo.webp">
            <span>+</span>
            <img src="assets/images/logo_pp.png">
        </div>
        <div id="pitch" class="margin-top-20">
            <h2>Eco + Parti Pirate</h2>
            <p class="margin-top-20">Dans 30 jours, une météorite s'écrasera sur la planète. C'est ce délai que nous aurons pour prendre toutes les décisions nécessaires à notre survie sans détruire notre écosystème.</p>
            <p>Cette expérience sera l'occasion de découvrir et de mettre à l'épreuve ensemble au travers d'un jeu vidéo des méthodes de prise de décision que nous pourrions appliquer à notre société.</p>
            <p>Ces trente prochains jours, nous nous entraiderons, nous demanderons votre aide, nous réfléchirons ensemble à la meilleure façon de survivre avec les moyens du bord et à travers un idéal politique, celui que nous construirons ensemble.</p>
            <p>Il nous faudra impérativement coopérer pour construire une civilisation capable de prévenir l'apocalypse.</p>
            <p>Partage des savoirs, développement d'une société, droit à la propriété, économie, coopération industrielle, gestion de l'énergie, gestion des ressources environnementales, nous nous donnons l'occasion d'aborder ces sujets, et bien d'autres, pendant un mois, en direct, en continu (ou presque) sur eco.game.partipirate.org ...</p>
        </div>
        <div id="lives" class="margin-top-20">
            <h2>Les lives</h2>
            <div id="lives-container" class="margin-top-20">
                <div id="waiting">Patientez... les diffusions en live arrivent</div>
                <div id="no-live" style="display: none;">Aucun de nos participants n'est actuellement en train de diffuser en live son point de vue dans le jeu</div>
            </div>
        </div>
        <div class="margin-top-20">
            <h2>Les dons</h2>
            <p class="margin-top-20">Pour pouvoir nous présenter, nous avons besoin d'imprimer des bulletins de votes, des tracts, etc. Pour cela, un seul lien : <br />
			<a href="https://don.partipirate.org/project.php?id=146&skip=" target="blank">Donner au Parti Pirate</a></p>
            <div class="donations-gauge-wrapper"></div>
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
<script>

$(function() {
    const lives = [];
    lives.push({channel: "partipirate"});
    lives.push({channel: "farlistener"});
    lives.push({channel: "florielvm"});
    lives.push({channel: "xeladaren"});

    const livesContainer = document.getElementById("lives-container");

    for(let index = 0; index < lives.length; ++index) {
        const livePlayer = document.createElement("div");

        livePlayer.id = "twitch-" + lives[index].channel;
        livePlayer.classList.add("twitch-player");
        
        livesContainer.appendChild(livePlayer);

        const options = {
            width: 333,
            height: 188,
            channel: lives[index].channel,
            // only needed if your site is also embedded on embed.example.com and othersite.example.com
            parent: ["eco.game.partipirate.org"]
        };
        const player = new Twitch.Player("twitch-" + lives[index].channel, options);
        player.setVolume(0.5);
        
        player.addEventListener(Twitch.Player.ENDED, function() {
            document.getElementById("twitch-" + lives[index].channel).style.display = "none";
            
            if ($(".twitch-player:visible").length == 0) {
                document.getElementById("no-live").style.display = "";
            }
        });

        player.addEventListener(Twitch.Player.PLAYING, function() {
            document.getElementById("twitch-" + lives[index].channel).style.display = "";
            document.getElementById("no-live").style.display = "none";
            document.getElementById("waiting").style.display = "none";
        });
        
        if (player.isPaused()) {
            document.getElementById("twitch-" + lives[index].channel).style.display = "none";
        }
    }

    if ($(".twitch-player:visible").length == 0) {
        document.getElementById("no-live").style.display = "";
    }
    document.getElementById("waiting").style.display = "none";
});

</script>
<script src="assets/js/donations-gauge.js"></script>	

</body>
</html>
