<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>if(typeof page==='undefined'){page="chiffrement";}
if(typeof d==='undefined') {
    function c() {
        cp("projet",[]);
    }
}
</script>

<div class="h" onclick="c()" id="retour">
    <?=$this->m->t["6"]?>
</div>

<section class="projetVid">
    <h2>chiffrement de bdd</h2>
    <iframe src="https://www.youtube.com/embed/NoQB9mO2PnI?rel=0&controls=0&showinfo=0&autoplay=1&mute=1" allow="autoplay *"></iframe>
</section>
<section class="description">
    <p>
    Ce projet est un gestionnaire de mots de passe qui va vous permettre de chiffrer une base de donnée de mots de passe. 
    Il déchiffrera en temps réel vos mdp en changeant les clefs à chaque utilisation. Les clefs sont stockées 
    à moitié sur votre ordinateur (en local) et à moitié sur une clef usb ou un disque dur externe. Vous permettant d'avoir 
    une clef physique. Ainsi, si quelqu'un a accès à votre ordinateur, il n'aura pas accès à vos mots de passe 
    et s'il a accès à votre clef, il aura uniquement accès à des fichiers contenant une suite de caractères 
    aléatoires. Il faudrait avoir accès aux deux pour pouvoir obtenir vos mots de passes. <br/>
    De plus ce logiciel vous permettra de personaliser les racoursits clavier qui l'active.
    Enfin, ce logiciel permet de paramêtrer et et d'ajouter très simplement des racoursits clavier lançant différentes applications
    de votre pc. Vous permettant par exemple de lancer word ou firefox d'une manière effective.
    </p>
</section>
<section class="technologie">
    <ul>
        <li>Python</li>
    </ul>
</section>

<?php
$page = gp();
?>