<section id="parameters">
    <h2>Choisissez la punition</h2>
    <span id="openModalBtn" class="fa-solid fa-spin fa-gear fa-3x"></span>
    <div id="overlay" class="overlay"></div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close fa-solid fa-xmark fa-beat fa-2x"></span>
            <h2>Paramétrage</h2>
            <div id="modal">
                <form action="" method="post">
                    <label for id="season" >Choix de la saison :</label>
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
    $saison = $_POST['saison'];
    echo "Saison sélectionnée : " . $saison;
}
