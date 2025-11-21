<?php
$pageTitle = "Store - Levi Batkin";
$pageDescription = "Browse and purchase Levi Batkin's electronic music tracks and productions.";

// Store products data
$products = [
    [
        'id' => 1,
        'title' => 'Break Down',
        'description' => 'High-energy house track with infectious basslines and pulsating beats. Perfect for any dance floor or workout session.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'House',
        'preview_url' => '#'
    ],
    [
        'id' => 2,
        'title' => 'Lift Me Up',
        'description' => 'Uplifting production featuring sparkling synths and soulful melodies. A feel-good anthem for any occasion.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'Progressive House',
        'preview_url' => '#'
    ],
    [
        'id' => 3,
        'title' => 'Worry \'Bout',
        'description' => 'Electrifying blend of house and UK garage elements. A unique fusion that showcases innovative production.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'UK Garage',
        'preview_url' => '#'
    ],
    [
        'id' => 4,
        'title' => 'Deep Feelings',
        'description' => 'Deep house vibes with emotional resonance and dynamic energy. Perfect for late-night listening.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'Deep House',
        'preview_url' => '#'
    ],
    [
        'id' => 5,
        'title' => 'Summer Vibes',
        'description' => 'Tropical house track with uplifting melodies and smooth production. Your summer soundtrack.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'Tropical House',
        'preview_url' => '#'
    ],
    [
        'id' => 6,
        'title' => 'Night Drive',
        'description' => 'Atmospheric production with driving beats and hypnotic synths. Perfect for those late-night cruises.',
        'price' => 9.99,
        'icon' => '🎵',
        'category' => 'Tech House',
        'preview_url' => '#'
    ],
    [
        'id' => 7,
        'title' => 'Electric Dreams',
        'description' => 'Euphoric progressive house with soaring melodies and powerful drops. An instant festival favorite.',
        'price' => 12.99,
        'icon' => '🎵',
        'category' => 'Progressive House',
        'preview_url' => '#'
    ],
    [
        'id' => 8,
        'title' => 'Bass Drop',
        'description' => 'Heavy bass-driven track with intricate sound design and massive energy. Turn it up!',
        'price' => 12.99,
        'icon' => '🎵',
        'category' => 'Bass House',
        'preview_url' => '#'
    ]
];

include 'header.php';
?>

    <!-- Store Hero Section -->
    <section class="hero" style="padding: 120px 0 60px;">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Music Store</h2>
                <p class="hero-subtitle">Explore and purchase exclusive tracks from Levi Batkin's collection</p>
            </div>
        </div>
    </section>

    <!-- Store Products Section -->
    <section class="store-section">
        <div class="container">
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="product-icon"><?php echo $product['icon']; ?></div>
                    <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
                    <h3 class="product-title"><?php echo htmlspecialchars($product['title']); ?></h3>
                    <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                    <div class="product-price">$<?php echo number_format($product['price'], 2); ?></div>
                    <div class="product-actions">
                        <a href="<?php echo htmlspecialchars($product['preview_url']); ?>" class="btn-preview">Preview</a>
                        <button type="button" class="btn-purchase" disabled title="Purchase functionality coming soon">Purchase</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
