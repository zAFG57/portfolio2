<?php
$baseDir = __DIR__;

include_once  $baseDir . "/r/r.php";

$routeur = new routeur();

function gp() {
    return str_replace("\t","",str_replace("\n","", str_replace("\r","",ob_get_clean())));
}

/**
 * celon mon prof de blazor, ce n'est pas possible de faire une sigle page application en php...
 * le code ne vas pas être élégant (pas grave car personne ne vas le voir à part moi) mais il vass marcher
 * si vous voyez le code de se projet, bonne chance.
 * l'effet single page application est gérer dans le js coté client qui vas demander les pages à une api php
 * qui renvoie un morceau de page au format json. Le js s'occupe ensuite de modifier le dom.
 * sur ce bonne nuit, je vais dormir car j'ai cour dans 4h
 */


?>