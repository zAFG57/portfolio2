<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>page="projet";</script>
<script src="./vi/j/projet.js"></script>


<section class="projetSec">
    <h1 class="titre">
        Projet Univercitaire
    </h1>

    <div class="projet h" onclick="sp('3DMino',[])">
        <div class="caroselle">
            <?php
                for ($i=0; $i <2; $i++) { 
                    echo "<div>";
                    for ($y=0; $y <5; $y++) {
                        echo "<p>3DMino</p>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</section>

<section class="projetSec">
    <h1 class="titre">
        Projet personelle
    </h1>

    <div class="projet h" onclick="sp('reparation',[])">
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

    <div class="projet h" onclick="sp('youtube',[])">
        <div class="caroselle">
            <?php
                for ($i=0; $i <2; $i++) { 
                    echo "<div>";
                    for ($y=0; $y <5; $y++) {
                        echo "<p>infinite storage</p>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</section>

<section id="subPage">
    
</section>




<?php
$page = gp();
?>