<?php

include_once '../model/function.php'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Boxicons CDN Link -->
    

 
    <link rel="stylesheet" href="../icons/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="../vue/js/app.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bi bi-file-code"></i>
        <span class="logo_name">LandryTECH</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class="bi bi-speedometer2"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="vente.php">
            <i class="bi bi-bag"></i>
            <span class="links_name">Vente</span>
          </a>
        </li>
        <li>
          <a href="client.php">
            <i class="bi bi-person"></i>
            <span class="links_name">Client</span>
          </a>
        </li>
        <li>
          <a href="article.php">
            <i class="bi-file-earmark-text"></i>
            <span class="links_name">Article</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-card-checklist"></i>
            <span class="links_name">Commandes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Analyses</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Tout les commmandes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="links_name">Utilisateur</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class="bx bx-message" ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart" ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Configuration</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span class="links_name">Déconnexion</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bi bi-list"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Recherche...">
          <i class="bi bx-search"></i>
        </div>
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name">Landry</span>
          <i class="bi bi-chevron-down"></i>
        </div>
      </nav>
