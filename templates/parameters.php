<section id="parameters">
    <h2>Choisissez la punition</h2>
    <span id="openModalBtn" class="fa-solid fa-spin fa-gear fa-3x"></span>
    <h2>Jouez encore</h2>
    <span id="playBtn" class="fa-solid fa-play fa-beat fa-3x"></span>
    <div id="overlay" class="overlay"></div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close fa-solid fa-xmark fa-beat fa-2x"></span>
            <h2>Paramétrage</h2>
            <div id="modal">
                <form action="#" method="post">
                    <label for="seasonSelect" >Choix de la saison :</label>
                    <?php showSelect($SESSION['listePunitions']) ?> 
                    <button id="seasonBtn" type="submit">Confirmer</button>                  
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère la valeur du champ de sélection "saison"
    $seasonSelected = $_POST['seasonSelect'];
    echo "<p>Saison sélectionnée : " . $seasonSelected . "</p>";
    $_SESSION['seasonSelected'] = $seasonSelected;
}
