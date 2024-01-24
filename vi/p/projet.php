<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>page="projet";</script>


<section class="projetSec">
        <h1 class="titre">
            Projet Univercitaire
        </h1>
</section>

<section class="projetSec">
    <h1 class="titre">
        Projet personelle
    </h1>

    <div class="projet h">
        <div class="caroselle">
            <?php
            for ($i=0; $i <2; $i++) { 
                echo "<div>";
                for ($y=0; $y <5; $y++) {
                    echo "<p>mes réparation.com</p>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>





<?php
$page = gp();
?>