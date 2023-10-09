// Récupération des éléments HTML
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal = document.getElementById("myModal");
const overlay = document.getElementById("overlay");
const playBtn = document.getElementById("playBtn");
const reset = document.getElementById("reset");

// Ouvrir la modal au clic sur le bouton
openModalBtn.addEventListener("click", () => {
  modal.style.display = "block";
  overlay.style.display = "block";
});

// Fermer la modal au clic sur le bouton de fermeture ou l'overlay
closeModalBtn.addEventListener("click", () => {
  modal.style.display = "none";
  overlay.style.display = "none";
});

overlay.addEventListener("click", () => {
  modal.style.display = "none";
  overlay.style.display = "none";
});

// Gestion du bouton de Replay
playBtn.addEventListener("click", () => {
  window.location.reload();
});

// Gestion du bouton de Reset (suppression des données de session en PHP)
reset.addEventListener("click", function () {
  let xhr = new XMLHttpRequest();

  // Configuration de la requête
  xhr.open("GET", "includes/sessiondestroy.php", true);

  // Envoi de la requête
  xhr.send();

  // Gestion de la réponse
  xhr.onload = function () {
    if (xhr.status === 200) {
      // La session PHP a été supprimée côté serveur
      console.log("Session PHP supprimée avec succès.");
      //rechargemment de la page
      window.location.reload();

      // Vous pouvez rediriger l'utilisateur vers une autre page ici si nécessaire
    } else {
      // Il y a eu un problème lors de la suppression de la session PHP
      console.error("Erreur lors de la suppression de la session PHP.");
    }
  };
});


