<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
// index.php
// Page d'accueil — affiche les produits
include __DIR__ . '/data/products.php';
include __DIR__ . '/header.php';
?>

<main class="container">
  <section class="hero">
    <div class="hero-inner">
      <h1>IT — Produits tendance</h1>
      <p>Collections sélectionnées. Livraison rapide. Paiement sécurisé.</p>
      <a class="btn primary" href="#catalog">Voir les produits</a>
    </div>
    <div class="hero-image">
      <img src="" alt="IT">
    </div>
  </section>

  <section id="catalog" class="catalog">
    <h2>Nos produits</h2>
    <div class="grid">
      <?php foreach ($products as $p): ?>
      <article class="card">
        <a href="product.php?id=<?php echo urlencode($p['id']); ?>" class="thumb-link">
          
        </a>
        <div class="card-body">
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p class="price"><?php echo htmlspecialchars($p['price']); ?> CFA</p>
          <p class="desc"><?php echo htmlspecialchars($p['short']); ?></p>
          <div class="card-actions">
            <a class="btn" href="product.php?id=<?php echo urlencode($p['id']); ?>">Détails</a>
            <button class="btn outline add-to-cart" data-id="<?php echo htmlspecialchars($p['id']); ?>">Ajouter</button>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="about">
    <h2>Pourquoi IBM-T ?</h2>
    <p>Nous sélectionnons les meilleurs produits, négociés pour un excellent rapport qualité/prix. Service client disponible 7j/7.</p>
  </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
