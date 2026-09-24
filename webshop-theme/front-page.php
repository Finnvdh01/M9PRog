<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
    <strong>Sneaker Shop</strong>
    <nav>
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">Over ons</a>
        <a href="#">Contact</a>
    </nav>
</header>

<p class="test-kop">Template: front-page.php</p>

<section class="hero">
    <h1>Nieuwe drops elke week</h1>
    <p>Sneakers en streetwear voor een eerlijke prijs.</p>
    <a class="btn" href="#">Naar de shop</a>
</section>

<section class="products">
    <div class="product-card">
        <h2>Air Runner</h2>
        <p class="price">&euro; 89,95</p>
        <a class="btn" href="#">Bekijk</a>
    </div>
    <div class="product-card">
        <h2>Street Low</h2>
        <p class="price">&euro; 74,95</p>
        <a class="btn" href="#">Bekijk</a>
    </div>
    <div class="product-card">
        <h2>Classic High</h2>
        <p class="price">&euro; 99,95</p>
        <a class="btn" href="#">Bekijk</a>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
