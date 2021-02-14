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

$DISCOURSE_STORY_URL = "http://192.168.0.100:480/";

function getPosts($topicId) {
    global $DISCOURSE_STORY_URL;
    $url = $DISCOURSE_STORY_URL . "t/$topicId/1.json";

    $discoursePostJson = "";

    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    $discoursePostsJson = curl_exec($curlHandle);
    curl_close($curlHandle);

    $discoursePosts = json_decode($discoursePostsJson, true);

    return $discoursePosts;
}
