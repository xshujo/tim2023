document.addEventListener("DOMContentLoaded", function () {
  const menuBurger = document.querySelector(".menu-burger");
  const nav = document.querySelector(".menu-nav");

  // Ajoutez un gestionnaire d'événement de clic au menu-burger
  menuBurger.addEventListener("click", function () {
    // Vérifiez si la classe "active" est présente sur le nav
    if (nav.classList.contains("active")) {
      // Si elle est présente, supprimez-la pour cacher le nav
      nav.classList.remove("active");
    } else {
      // Sinon, ajoutez-la pour afficher le nav
      nav.classList.add("active");
    }
  });
});
