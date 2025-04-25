<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon Portfolio</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <div class="container">
      <h1>Arthur Kameni</h1>
      <nav>
        <ul>
          <li><a href="#projets">Projets</a></li>
          <li><a href="#competences">Compétences</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h2>Développeur web & créatif numérique</h2>
      <p>Je conçois des expériences numériques élégantes et efficaces.</p>
    </div>
  </section>

  <section id="projets" class="section">
    <div class="container">
      <h3>Mes Projets</h3>
      <div class="grid">
        <!-- Cartes projet -->
            <div class="card">
                <h4>Application de Gestion de Banque</h4>
                <p>Une application web de gestion de comptes bancaires, permettant la gestion des transactions, l'affichage des soldes et des historiques, ainsi que la création de comptes utilisateurs.</p>
                <a href="https://github.com/mon-projet-banque" target="_blank">Voir le projet</a>
            </div>
            <div class="card">
                <h4>Application de Gestion de Banque</h4>
                <p>Une application web de gestion de comptes bancaires, permettant la gestion des transactions, l'affichage des soldes et des historiques, ainsi que la création de comptes utilisateurs.</p>
                <a href="https://github.com/mon-projet-banque" target="_blank">Voir le projet</a>
            </div>
            <div class="card">
                <h4>Application de Gestion de Banque</h4>
                <p>Une application web de gestion de comptes bancaires, permettant la gestion des transactions, l'affichage des soldes et des historiques, ainsi que la création de comptes utilisateurs.</p>
                <a href="https://github.com/mon-projet-banque" target="_blank">Voir le projet</a>
            </div>
            <div class="card">
                <h4>Application de Gestion de Banque</h4>
                <p>Une application web de gestion de comptes bancaires, permettant la gestion des transactions, l'affichage des soldes et des historiques, ainsi que la création de comptes utilisateurs.</p>
                <a href="https://github.com/mon-projet-banque" target="_blank">Voir le projet</a>
            </div>

        <div class="card">
          <h4>Nom du projet</h4>
          <p>Description brève du projet.</p>
          <a href="#">Voir plus →</a>
        </div>
        <!-- Dupliquer autant que nécessaire -->
      </div>
    </div>
  </section>

  <section id="competences" class="section">
    <div class="container">
      <h3>Compétences</h3>
      <ul class="skills">
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <!-- etc. -->
      </ul>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="container">
      <h3>Me Contacter</h3>
      <form id="contact-form">
        <input type="text" name="nom" placeholder="Votre nom" required />
        <input type="email" name="email" placeholder="Votre email" required />
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
      </form>
      <p id="confirmation"></p>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>© 2025 Ton Nom. Tous droits réservés.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
