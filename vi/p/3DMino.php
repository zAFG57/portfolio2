<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>if(typeof page==='undefined'){page="reparation";}
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
    <h2>3DMINO</h2>
</section>
<section class="description">
    <p>
        <?=$this->m->t["7"]?>
    </p>
</section>
<section class="technologie">
    <ul>
        <li>HTML (twig)</li>
        <li>CSS</li>
        <li>JS</li>
        <li>PHP</li>
        <li>SQL</li>
        <li>BLAZOR (C#)</li>
    </ul>
</section>
<section class="algo">
    <h3>
        <?=$this->m->t["8"]?>
    </h3>
</section>


<?php
$page = gp();
?>