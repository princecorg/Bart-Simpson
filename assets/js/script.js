// Récupération des éléments HTML
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal = document.getElementById("myModal");
const overlay = document.getElementById("overlay");

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
