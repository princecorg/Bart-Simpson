<h1>La punition de la semaine</h1>
<section id="display">
    <div id="board">
        <script>
            <?php
            $monTexte = 'Raphaël ne jouera pas à laXBox la nuit';
            for ($i = 0; $i < 8; $i++) {
                echo "setTimeout(function() { writeLine('" . $monTexte . "'); }, " . ($i * 2000) . ");";
            }
            ?>
        </script>
        <img src="./assets/images/BS.png" alt="Bart Simpson">
    </div>
</section>