/*
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
/* global $*/

// const DISCOURSE_STORY_POST_URL = "https://discourse.partipirate.org/t/22584/1.json";

$(function() {
    
    /** Gestion de la récupération de la story sur discourse **/
    /* TODO À finaliser quand on pourra faire du cross-origin
    $.get(DISCOURSE_STORY_POST_URL, null, function(data) {
        console.log(data);
    }, "json");
    */

    $("#story p strong").parent().next().addClass("paragraph");

    /** Gestion des lives twitch **/
    
    const lives = [];
    lives.push({channel: "partipirate"});
    lives.push({channel: "alexscottt"});
    lives.push({channel: "daemonhell_"});
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
//        console.log(player.getQualities());
        
        player.addEventListener(Twitch.Player.ENDED, function() {
//            document.getElementById("twitch-" + lives[index].channel).style.display = "none";
            
            if ($(".twitch-player:visible").length == 0) {
//                document.getElementById("no-live").style.display = "";
            }
        });

        player.addEventListener(Twitch.Player.PLAYING, function() {
            document.getElementById("twitch-" + lives[index].channel).style.display = "";
//            document.getElementById("no-live").style.display = "none";
            document.getElementById("waiting").style.display = "none";
        });
        
        if (player.isPaused()) {
//            document.getElementById("twitch-" + lives[index].channel).style.display = "none";
        }
    }

    if ($(".twitch-player:visible").length == 0) {
        document.getElementById("no-live").style.display = "";
    }
    document.getElementById("waiting").style.display = "none";
});