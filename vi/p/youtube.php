<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>if(typeof page==='undefined'){page="youtube";}
if(typeof d==='undefined') {
    function c() {
        cp("projet",[]);
    }
}
</script>

<div class="h" onclick="c()">
    retour
</div>

<section class="projetVid">
    <h2>infinite storage</h2>
</section>
<section class="description">
    <p>
        le but de ce projet est de crée d'obtenir un espace de stockage (en théorie) infinie.
        en réaliter, cela passe par l'utilisation détourner des services que propose google à
        travers youtube. Le concept est simple, utiliser l'espace de stockage gratuit et infinie
        qu'est youtube pour stocker des vidéos qui sont crée par mon programme. Ce programme
        chiffre les donners d'un doccument avant de l'enregistrer dans les images et le son.
        Ce programme permet aussi l'opération inverse (la lecture d'un telle fichier vidéo).
        Ce programme est donc la version moderne des QR-code.
    </p>
</section>
<section class="technologie">
    <ul>
        <li>Python</li>
        <li>C++</li>
        <li>OpenCV2</li>
    </ul>
</section>

<?php
$page = gp();
?>