<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/contact.css"/>
<script>page="contact";</script>

<h1 class="contact">
    <?=$this->m->t["5"]?>
</h1>

<section class="rotate">
    <div id="mail" class="h" onclick="window.location='mailto:ludovic.castiglia@outlook.fr'">mail</div>
    <div id="tel" class="h" onclick="window.location='tel:0767466001'">tel</div>
    <div id="insta" class="h" onclick="window.location='https://www.instagram.com/ludovic_cast'">insta</div>
    <div id="github" class="h" onclick="window.location='https://github.com/zAFG57'">github</div>
</section>





<?php
$page = gp();
?>