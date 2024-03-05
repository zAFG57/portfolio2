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

<div class="h" onclick="c()" id="retour">
    <?=$this->m->t["6"]?>
</div>

<section class="projetVid">
    <h2>infinite storage</h2>
</section>
<section class="description">
    <p>
        <?=$this->m->t["12"]?>
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