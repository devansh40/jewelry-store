<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Jewelry Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Gem Aura</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <form class="search-form" action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search for products..." required>
            <button type="submit">Search</button>
    </header>
    <main>
        <section class="hero">
            <h2>Timeless Elegance, Redefined</h2>
            <p>Explore our exquisite collection of handcrafted jewelry that adds sparkle to your special moments.</p>
            <a href="products.php" class="cta-button">Shop Now</a>
        </section>
        <div class="slideshow-container">
    <!-- Slide 1 -->
    <div class="slide fade">
        <img src="images/jewelry1.jpg" alt="Gold Necklace">
        <div class="caption">Elegant Gold Necklace</div>
    </div>

    <!-- Slide 2 -->
    <div class="slide fade">
        <img src="images/jewelry2.jpg" alt="Diamond Ring">
        <div class="caption">Brilliant Diamond Ring</div>
    </div>

    <!-- Slide 3 -->
    <div class="slide fade">
        <img src="images/jewelry3.jpg" alt="Necklace Set">
        <div class="caption">Stylish Necklace</div>
    </div>

    <!-- Navigation Buttons -->
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>
        </section>
    </main>
    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.querySelectorAll(".slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }

    function changeSlide(n) {
        let slides = document.querySelectorAll(".slide");
        slides[slideIndex - 1].style.display = "none";
        slideIndex += n;
        if (slideIndex > slides.length) { slideIndex = 1; }
        if (slideIndex < 1) { slideIndex = slides.length; }
        slides[slideIndex - 1].style.display = "block";
    }
</script>
        <section class="highlights">
            <div class="highlight">
                <h3>Gold Jewelry</h3>
                <p>Discover our stunning range of gold necklaces, earrings, and bracelets.</p>
            </div>
            <div class="highlight">
                <h3>Diamond Jewelry</h3>
                <p>Experience the brilliance of our certified diamond rings and pendants.</p>
            </div>
            <div class="highlight">
                <h3>Custom Designs</h3>
                <p>Personalize your jewelry with our custom design services.</p>
            </div>
</body>
</html>