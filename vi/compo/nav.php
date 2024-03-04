<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ludovic CASTIGLIA</title>
    <link rel="stylesheet" href="./vi/c/nav.css">
</head>
<body>

<nav>
    <div class="left">
        <button onclick="cp('home',[])" class="h">
            <h1>Ludovic CASTIGLIA</h1>
        </button>
    </div>
    <div class="right">
        <button class="button h"><?=$this->m->t["1"]?></button>
        <button class="button h" onclick="cp('projet',[])"><?=$this->m->t["2"]?></button>
        <button class="button h" onclick="cp('contact',[])"><?=$this->m->t["3"]?></button>
        <button class="button h"><?=$this->m->t["4"]?></button>
    </div>
</nav>
<script src="./vi/j/m.js"></script>
<div id="mouse"></div>
<div id="mouselerp"></div>
<div id="css"></div>
<div class="transitionPage"></div>
