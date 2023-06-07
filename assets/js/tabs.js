// Récupérer tous les liens des onglets
const tabLinks = document.querySelectorAll("ul.flex li.l a.t");
console.log(tabLinks)

// Parcourir les liens des onglets et ajouter un écouteur d'événement de clic à chacun
tabLinks.forEach(tabLink => {
  tabLink.addEventListener("click", (event) => {
    event.preventDefault(); // Empêcher le comportement de lien par défaut

    // Récupérer l'ID de la section liée à l'onglet
    const sectionId = tabLink.getAttribute("href");

    // Masquer toutes les sections de contenu
    const contentSections = document.querySelectorAll("div[id$='-section']");
    contentSections.forEach(section => {
      section.style.display = "none";
    });

    // Afficher la section de contenu liée à l'onglet sélectionné
    const selectedSection = document.querySelector(sectionId);
    selectedSection.style.display = "block";
  });
});