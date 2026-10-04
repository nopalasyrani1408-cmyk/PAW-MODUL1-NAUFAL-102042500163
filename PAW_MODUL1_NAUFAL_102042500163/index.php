<?php
$products = [
    [
        "id" => 1,
        "name" => "ASUS TUF GAMING A15",
        "category" => "Laptop",
        "price" => 14000000,
        "stock" => 3,
        "icon" => '<img src="asus tuf.png" width="250" height="250">',
        "description" => "Laptop andal untuk belajar, bekerja, dan mengerjakan berbagai tugas harian."
    ],
    [
        "id" => 2,
        "name" => "MSI PRO MP251 E2",
        "category" => "Monitor",
        "price" => 1800000,
        "stock" => 4,
        "icon" => '<img src="msi pro.webp" width="260" height="220">',
        "description" => "Monitor Full HD dengan tampilan jernih untuk bekerja maupun menikmati hiburan."
    ],
    [
        "id" => 3,
        "name" => "Noir Timless82 V2 75% Mechanical Keyboard",
        "category" => "Aksesoris",
        "price" => 950000,
        "stock" => 7,
        "icon" => '<img src="noir kebord.png" width="280" height="280">',
        "description" => "Keyboard mekanikal dengan tombol responsif dan desain yang nyaman digunakan."
    ],
    [
        "id" => 4,
        "name" => "Logitech MX Master 4 Wireless Mouse",
        "category" => "Aksesoris",
        "price" => 1350000,
        "stock" => 0,
        "icon" => '<img src="mastermx.webp" width="220" height="200">',
        "description" => "Mouse tanpa kabel dengan koneksi stabil dan bentuk ergonomis."
    ],
    [
        "id" => 5,
        "name" => "Master & Dynamic MG20 Wireless Headphones",
        "category" => "Audio",
        "price" => 5250000,
        "stock" => 5,
        "icon" => '<img src="masterdynamic.webp" width="220" height="220">',
        "description" => "Headset dengan suara jernih dan mikrofon untuk komunikasi yang lebih baik."
    ],
    [
        "id" => 6,
        "name" => "Sandisk Extreme Portable SSD 1TB",
        "category" => "Penyimpanan",
        "price" => 3650000,
        "stock" => 2,
        "icon" => '<img src="sandisk.png" width="200" height="200">',
        "description" => "Penyimpanan portabel berkecepatan tinggi dengan kapasitas besar."
    ],
    [
        "id" => 7,
        "name" => "Samsung Galaxy Watch8",
        "category" => "Wearable",
        "price" => 4750000,
        "stock" => 3,
        "icon" => '<img src="samsung.png" width="260" height="260">',
        "description" => "Jam tangan cerdas dengan berbagai fitur kesehatan dan kebugaran."
    ],
    [
        "id" => 8,
        "name" => "JBL Go 4 Portable Bluetooth Speaker",
        "category" => "Audio",
        "price" => 900000,
        "stock" => 0,
        "icon" => '<img src="jbl.png" width="200" height="200">',
        "description" => "Speaker Bluetooth ultra-portabel dengan JBL Pro Sound yang menggelegar, dan gaya yang berani."
    ]
];

function formatRupiah($amount)
{
    return "Rp" . number_format($amount, 0, ",", ".");
}

$totalProducts = count($products);

$availableProducts = 0;

$totalStock = 0;

foreach ($products as $product) {
    if ($product["stock"] > 0) {
        $availableProducts++;
    }

    $totalStock += $product["stock"];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Cia Store menyediakan berbagai perangkat dan aksesoris teknologi."
    >

    <title>Cia Store - Katalog Produk Teknologi</title>

    <style class="css">
        <?php include "style.css"; ?>
    </style>
</head>

<body>

    <header class="header">
        <div class="container navbar">
            <a href="#home" class="logo">
                <span class="logo-mark">C</span>

                <span class="logo-text">
                    CIA<span>STORE</span>
                </span>
            </a>

            <nav class="nav-menu" aria-label="Navigasi utama">
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#about">About</a>
            </nav>

            <a href="#products" class="nav-button">
                Belanja Sekarang
            </a>
        </div>
    </header>

    <main>

        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container hero-layout">

                <div class="hero-content">
                    <span class="section-label">
                        SIMPLE TECH STORE
                    </span>

                    <h1>
                        Perangkat teknologi untuk
                        <span>aktivitas terbaikmu.</span>
                    </h1>

                    <p>
                        Temukan berbagai perangkat dan aksesoris teknologi
                        dengan berbagai macam pilihan hanya di Cia Store.
                    </p>

                    <div class="hero-actions">
                        <a href="#products" class="primary-button">
                            Lihat Produk
                        </a>

                        <a href="#about" class="secondary-button">
                            Tentang Kami
                        </a>
                    </div>

                    <div class="hero-small-info">
                        <span>✓ Produk berkualitas</span>
                        <span>✓ Harga transparan</span>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-circle circle-one"></div>
                    <div class="hero-circle circle-two"></div>

                    <div class="main-device-card">
                        <div class="device-top">
                            <span>Featured Product</span>
                            <span class="device-status">Available</span>
                        </div>

                        <div class="device-icon">
                            <img src="asus tuf.png" width="250" height="250">
                        </div>

                        <div class="device-information">
                            <p>Performance Series</p>
                            <h2>Laptop Productivity</h2>
                            <span>Mulai dari Rp12.600.000</span>
                        </div>
                    </div>

                    <div class="floating-card floating-card-one">
                        <span>🎧</span>

                        <div>
                            <strong>Audio</strong>
                            <small>Clear sound</small>
                        </div>
                    </div>

                    <div class="floating-card floating-card-two">
                        <span>⌨️</span>

                        <div>
                            <strong>Accessories</strong>
                            <small>Modern setup</small>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="statistics">
            <div class="container statistic-grid">

                <article class="statistic-card">

                    <div>
                        <span>Total Produk</span>
                        <strong><?php echo $totalProducts; ?> Produk</strong>
                    </div>
                </article>

                <article class="statistic-card">

                    <div>
                        <span>Produk Tersedia</span>
                        <strong><?php echo $availableProducts; ?> Produk</strong>
                    </div>
                </article>

                <article class="statistic-card">

                    <div>
                        <span>Total Stok</span>
                        <strong><?php echo $totalStock; ?> Unit</strong>
                    </div>
                </article>

            </div>
        </section>

        <section class="products-section" id="products">
            <div class="container">

                <div class="section-heading">
                    <div>
                        <span class="section-label">OUR PRODUCTS</span>
                        <h2>Katalog Produk</h2>

                        <p>
                            Pilih perangkat teknologi yang sesuai dengan
                            kebutuhan dan aktivitasmu.
                        </p>
                    </div>

                    <div class="product-counter">
                        Total Produk:
                        <strong><?php echo $totalProducts; ?></strong>
                    </div>
                </div>

                <div class="product-grid">

                    <?php foreach ($products as $product): ?>

                        <?php
                        $isAvailable = $product["stock"] > 0;

                        $hasDiscount = $product["price"] >= 1000000;

                        $discountPercentage = 10;
                        $discountAmount = $product["price"] * ($discountPercentage / 100);
                        $discountPrice = $product["price"] - $discountAmount;
                        ?>

                        <article class="product-card">

                            <div class="product-image">
                                <span class="category-badge">
                                    <?php echo htmlspecialchars($product["category"]); ?>
                                </span>

                                

                                <?php if ($hasDiscount): ?>
                                    <span class="discount-badge">
                                        Diskon <?php echo $discountPercentage; ?>%
                                    </span>
                                <?php endif; ?>




                                <div class="product-icon">
                                    <?php echo $product["icon"]; ?>
                                </div>
                            </div>

                            <div class="product-content">

                                <div class="product-title-row">
                                    <div>
                                        <p class="product-category">
                                            <?php echo htmlspecialchars($product["category"]); ?>
                                        </p>

                                        <h3>
                                            <?php echo htmlspecialchars($product["name"]); ?>
                                        </h3>
                                    </div>
                                </div>

                                <p class="product-description">
                                    <?php echo htmlspecialchars($product["description"]); ?>
                                </p>

                                <div class="price-area">

                                    <?php if ($hasDiscount): ?>

                                        <div class="discount-information">
                                            <span class="normal-price">
                                                <?php echo formatRupiah($product["price"]); ?>
                                            </span>

                                            <span class="discount-text">
                                                Hemat <?php echo $discountPercentage; ?>%
                                            </span>
                                        </div>

                                        <strong class="final-price">
                                            <?php echo formatRupiah($discountPrice); ?>
                                        </strong>

                                    <?php else: ?>

                                        <strong class="final-price">
                                            <?php echo formatRupiah($product["price"]); ?>
                                        </strong>

                                    <?php endif; ?>

                                </div>

                                <div class="stock-information">

                                    <span>
                                        Stok:
                                        <strong><?php echo $product["stock"]; ?></strong>
                                    </span>

                                    <?php if ($isAvailable): ?>

                                        <span class="stock-status available">
                                            Tersedia
                                        </span>

                                    <?php else: ?>

                                        <span class="stock-status unavailable">
                                            Stok Habis
                                        </span>

                                    <?php endif; ?>

                                </div>

                                <?php if ($isAvailable): ?>

                                    <button type="button" class="buy-button">
                                        Beli Sekarang
                                    </button>

                                <?php else: ?>

                                    <button
                                        type="button"
                                        class="buy-button disabled"
                                        disabled
                                    >
                                        Produk Habis
                                    </button>

                                <?php endif; ?>

                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <section class="about-section" id="about">
            <div class="container about-layout">

                <div class="about-content">
                    <span class="section-label light-label">
                        WHY CIA STORE
                    </span>

                    <h2>
                        Belanja teknologi menjadi lebih sederhana.
                    </h2>

                    <p>
                        Cia Store menyediakan perangkat dan aksesoris teknologi dengan berbagai macam
                        pilihan dengan harga dan promo yang menarik
                    </p>

                    <a href="#products" class="light-button">
                        Jelajahi Produk
                    </a>
                </div>

                <div class="benefit-grid">

                    <article class="benefit-card">
                        <span>01</span>
                        <h3>Produk Pilihan</h3>
                        <p>
                            Berbagai produk teknologi untuk mendukung
                            kebutuhan harian.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span>02</span>
                        <h3>Informasi Jelas</h3>
                        <p>
                            Informasi harga, stok, status, dan diskon mudah
                            dipahami.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span>03</span>
                        <h3>Harga Terbaik</h3>
                        <p>
                            Harga transparan dan kompetitif untuk semua produk
                            di Cia Store.
                        </p>
                    </article>

                    <article class="benefit-card">
                        <span>04</span>
                        <h3>Banyak Diskonnya</h3>
                        <p>
                            Diskon menarik untuk berbagai produk di Cia Store.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <section class="call-to-action">
            <div class="container call-to-action-content">
                <div>
                    <span class="section-label">FIND YOUR SETUP</span>

                    <h2>Siap menemukan perangkat pilihanmu?</h2>

                    <p>
                        Lihat katalog Cia Store dan pilih produk sesuai
                        kebutuhanmu.
                    </p>
                </div>

                <a href="#products" class="primary-button">
                    Lihat Semua Produk
                </a>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container footer-layout">

            <div class="footer-brand">
                <a href="#home" class="logo">
                    <span class="logo-mark">C</span>
                    <span class="logo-text">CIA<span>STORE</span>
                    </span>
                </a>

                <p>
                    Temukan berbagai perangkat dan aksesoris teknologi dengan 
                    berbagai macam pilihan hanya di Cia Store.
                </p>
            </div>

            <div class="footer-links">
                <h3>Navigasi</h3>
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#about">About</a>
            </div>

            <div class="footer-links">
                <h3>Kategori</h3>
                <a href="#products">Laptop</a>
                <a href="#products">Aksesoris</a>
                <a href="#products">Audio</a>
            </div>

            <div class="footer-contact">
                <h3>Cia Store</h3>
                <p>Jakarta, Indonesia</p>
                <p>hello@ciastore.com</p>
                <p>Senin - Sabtu, 09.00 - 20.00</p>
            </div>

        </div>

        <div class="container footer-bottom">
            <p>
                &copy; <?php echo date("Y"); ?> Cia Store.
            </p>

            <p>Simple Tech Store.</p>
        </div>
    </footer>

</body>
</html>