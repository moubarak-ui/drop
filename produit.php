<?php
// product.php
include __DIR__ . '/data/products.php';
include __DIR__ . '/header.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$product = null;
foreach($products as $p) {
    if ((string)$p['id'] === (string)$id) { $product = $p; break; }
}
if (!$product) {
    echo '<main class="container"><p>Produit non trouvé. <a href="/">Retour</a></p></main>';
    include __DIR__ . '/footer.php';
    exit;
}
?>

<main class="container product-page">
  <div class="product-grid">
    <div class="product-image">
      <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
    </div>
    <div class="product-info">
      <h1><?php echo htmlspecialchars($product['title']); ?></h1>
      <p class="price"><?php echo htmlspecialchars($product['price']); ?> CFA</p>
      <p class="desc"><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
      <div class="product-controls">
        <label>Quantité: <input type="number" id="qty" value="1" min="1" max="99"></label>
        <button class="btn primary add-to-cart" data-id="<?php echo htmlspecialchars($product['id']); ?>">Ajouter au panier</button>
      </div>
    </div>
  </div>
  <section class="related">
    <h2>Produits similaires</h2>
    <div class="grid">
      <?php foreach ($products as $p): if ($p['id'] === $product['id']) continue; ?>
      <article class="card small">
        <a href="product.php?id=<?php echo urlencode($p['id']); ?>"><img src="<?php echo htmlspecialchars($p['image']); ?>" alt=""></a>
        <h4><?php echo htmlspecialchars($p['title']); ?></h4>
      </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
