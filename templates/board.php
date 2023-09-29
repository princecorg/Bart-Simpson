<h1>La punition de la semaine</h1>
<section id="display">
    <div id="board">
        <article id="content"></article>
        <script>
            const board = document.getElementById("board");

            function writeLine(line) {
                const newLine = document.createElement("p");
                newLine.textContent = line;
                content.appendChild(newLine);
            }

            function writeTitle(title) {
                const episode = document.createElement("span");
                episode.textContent = title;
                board.appendChild(episode);
            }

            <?php
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
            $saison = "Saison " . rand(1, 3);
            $episodeAleatoire = getPunitionAleatoire($saison);
            $episode = $episodeAleatoire['episode'];
            $punition = $episodeAleatoire['punition'];
            for ($i = 0; $i < 8; $i++) {
                echo 'setTimeout(function() { writeLine("' . $punition . '"); }, ' . ($i * 2000) . ');';
            }
            ?>
            // Une fois les 8 paragraphes affichés, j'ajoute le titre et la saison
            setTimeout(function() { writeTitle("<?php echo $saison . ' - ' . $episode; ?>"); }, 8 * 2000);
        
        </script>
        <img src="./assets/images/BS.png" alt="Bart Simpson">
    </div>
</section>  