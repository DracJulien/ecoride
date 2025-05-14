<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoRide - Accueil</title>
  <!-- Polices Google -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,600&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- style perso -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo_ecoride.jpg" alt="Logo EcoRide" style="max-width: 120px;">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">

        <?php if (isset($_SESSION['user_id'])): ?>

          <?php if ($_SESSION['role'] === 'admin'): ?>
            <li class="nav-item"><a class="nav-link" href="dashboard_admin.php">🧭Dashboard Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="gerer_utilisateurs.php">👥 Gérer Utilisateurs</a></li>
            <li class="nav-item"><a class="nav-link" href="gerer_employes.php">🧑‍💼 Gérer Employés</a></li>
            <li class="nav-item"><a class="nav-link" href="historique_signalements.php">📜 Historique signalements</a><br>
            <li class="nav-item"><a class="nav-link" href="statistiques.php">📊 Statistiques</a></li>

          <?php elseif ($_SESSION['role'] === 'employe'): ?>
            <li class="nav-item"><a class="nav-link" href="accueil_employe.php">🧭 Espace Employé</a></li>
            <li class="nav-item"><a class="nav-link" href="espace_employe.php">🗣 Modérer Avis</a></li>

          <?php elseif ($_SESSION['role'] === 'utilisateur'): ?>
            <li class="nav-item"><a class="nav-link" href="index.php">🏠 Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="espace_utilisateur.php">🧭 Mon tableau de bord</a></li>
            <li class="nav-item"><a class="nav-link" href="profil.php">👤 Mon Profil</a></li>
            <li class="nav-item"><a class="btn btn-success btn-sm ml-2" href="ajouter_trajet.php">🚗 Publier un trajet</a></li>
          <?php endif; ?>

          <li class="nav-item"><a class="nav-link" href="deconnexion.php">🔓 Déconnexion</a></li>

          <?php else: ?>  <!-- Si utilisateur non connecté -->
            <li class="nav-item"><a class="nav-link" href="index.php">🏠 Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="connexion.php">🔑 Connexion</a></li>
            <li class="nav-item"><a class="nav-link" href="inscription.php">📝 Inscription</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">📬 Contact</a></li>
          <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>
