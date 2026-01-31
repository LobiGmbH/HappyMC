<?php
function getUUID($username) {
    $url = "https://api.mojang.com/users/profiles/minecraft/" . $username;
    $json = @file_get_contents($url);

    if ($json === false) {
        return null;
    }

    $data = json_decode($json, true);
    return $data["id"] ?? null;
}
