<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>if(typeof page==='undefined'){page="3DMino";}
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
    <h2>mes-réparation.com</h2>
    <iframe src="https://www.youtube.com/embed/nWMjo6WeO6w?rel=0&controls=0&showinfo=0&autoplay=1&mute=1" allow="autoplay *"></iframe>
</section>
<section class="description">
    <p>
        <?=$this->m->t["11"]?>
    </p>
</section>
<section class="technologie">
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JS</li>
        <li>PHP</li>
        <li>SQL</li>
    </ul>
</section>

<?php
$page = gp();
?>