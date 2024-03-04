<?php
ob_start();
?>





<link rel="stylesheet" href="./vi/c/projet.css">
<script>page="projet";</script>
<script src="./vi/j/projet.js"></script>


<section class="projetSec">
    <div class="titre">
        <h1>
            Projet Univercitaire
        </h1>
    </div>
    

    <div class="projet h" onclick="sp('3DMino',[])">
        <iframe src="https://www.youtube.com/embed/nWMjo6WeO6w?rel=0&controls=0&showinfo=0&autoplay=1&mute=1" allow="autoplay *"></iframe>
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
    <div class="titre">
        <h1>
            Projet personelle
        </h1>
    </div>
    

    <div class="projet h" onclick="sp('reparation',[])">
        <iframe src="https://www.youtube.com/embed/nWMjo6WeO6w?rel=0&controls=0&showinfo=0&autoplay=1&mute=1" allow="autoplay *"></iframe>
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
        <iframe src="https://www.youtube.com/embed/nWMjo6WeO6w?rel=0&controls=0&showinfo=0&autoplay=1&mute=1" allow="autoplay *"></iframe>
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