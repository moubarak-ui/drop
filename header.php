<?php
// header.php
?><!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>MBRK — Boutique</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="/">MBRK</a>
    <nav class="nav">
      <a href="/">Accueil</a>
      <a href="#catalog">Produits</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="header-actions">
      <button id="cartBtn" class="btn outline">Panier (<span id="cartCount">0</span>)</button>
    </div>
  </div>
</header>

<!-- Cart modal (hidden by default) 
<div id="cartModal" class="cart-modal hidden" aria-hidden="true">
  <div class="cart-panel">
    <button id="closeCart" class="close">✕</button>
    <h3>Ton panier</h3>
    <div id="cartItems"></div>
    <div class="cart-footer">
      <div class="cart-total">Total: <span id="cartTotal">0</span> CFA</div>
      <button id="checkoutBtn" class="btn primary">Passer à la caisse</button>
    </div>
  </div>
</div>
-->