document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault();
  
    // Données simulées, ici tu pourrais intégrer une API ou backend PHP/Laravel
    const nom = this.nom.value;
    const email = this.email.value;
    const message = this.message.value;
  
    // Simple effet de confirmation
    document.getElementById("confirmation").textContent = `Merci ${nom}, votre message a bien été envoyé !`;
    this.reset();
  });
  