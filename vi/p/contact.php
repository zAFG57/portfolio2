<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/contact.css"/>
<script>page="contact";</script>

<h1 class="contact">
    <?=$this->m->t["5"]?>
</h1>

<section class="rotate">
    <div id="mail" class="h" onclick="window.location='mailto:ludovic.castiglia@outlook.fr'"><?= file_get_contents("asset/svg/mail.svg")?></div>
    <div id="tel" class="h" onclick="window.location='tel:0767466001'"><?= file_get_contents("asset/svg/tel.svg")?></div>
    <div id="insta" class="h" onclick="window.location='https://www.instagram.com/ludovic_cast'"><?= file_get_contents("asset/svg/insta.svg")?></div>
    <div id="github" class="h" onclick="window.location='https://github.com/zAFG57'"><?= file_get_contents("asset/svg/git.svg")?></div>
</section>





<?php
$page = gp();
?>