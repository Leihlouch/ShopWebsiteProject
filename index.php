<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chunkish</title>
    <link rel="shortcut icon" href="img/chunkicon.png">
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Iconscout Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center py-2">
                <!-- Left side contact info -->
                <div class="col-md-6 d-flex align-items-center">
                    <a href="#" class="me-4">
                        <i class="fas fa-phone me-2"></i>Call us at (069-420-2024)
                    </a>
                    <a href="mailto:chunkishshop@gmail.com">
                        <i class="fas fa-envelope me-2"></i>chunkishshop@gmail.com
                    </a>
                </div>

                <!-- Right side options -->
                <div class="col-md-6">
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="contact.html" class="btn btn-sm btn-outline-light">Contact Us</a>
                        <select class="form-select form-select-sm me-3" style="width: auto;" aria-label="Language">
                            <option value="en" selected>English</option>
                            <option value="fil">Filipino</option>
                        </select>
                        <select class="form-select form-select-sm me-3" style="width: auto;" aria-label="Currency">
                            <option value="usd" selected>PHP</option>
                            <option value="php">USD</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->


    <!-- Mid Bar -->
    <div class="mid-bar" id="midBar">
        <div class="container">
            <div class="chunkish-logo">
                <a href="index.html" class="navbar-brand"><img src="img/chunkishtextlogo.png" alt="Logo"
                        title="Logo"></a>
            </div>

            <div class="search-box">
                <form action="">
                    <input type="text" name="search" id="srch" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="container1">
            <div class="sign-in">
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="logout.php" class="fa fa-sign-out-alt" id="logoutButton"><span class="text"> Logout</span></a>
                <?php else: ?>
                    <a href="login.html" class="fa fa-user" id="signInButton"><span class="text"> Sign in</span></a>
                <?php endif; ?>
            </div>

            <div class="shopping-cart">
                <a href="#" class="cart-link" onclick="toggleCart(event)">
                    <i class="fa fa-shopping-cart"><span class="text"> Cart</span></i>
                    <span class="badge bg-danger" id="cartCount">0</span>
                </a>
                <div class="dropdown-menu" id="cartItems" style="display: none;">
                    <div class="p-3" style="min-width: 300px;">
                        <h6 class="mb-3">Shopping Cart</h6>
                        <div id="cartList"></div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Total:</span>
                            <span id="cartTotal">₱0.00</span>
                        </div>
                        <button class="btn btn-success w-100 mt-3" onclick="checkout()">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mid Bar-->


    <!-- Nav Bar -->
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <div class="homebutton">
                        <button class="nav-item"><a href="index.php" class="nav-link">Home</a></button>
                    </div>

                    <div class="productsdropdown">
                        <button class="nav-item"><a href="" class="nav-link">Products</a></button>
                        <div class="productscontent">
                            <a href="">Dolls</a>
                            <a href="">Tulips</a>
                            <a href="">Octopus</a>
                        </div>
                    </div>

                    <div class="servicesdropdown">
                        <button class="nav-item"><a href="" class="nav-link">Services</a></button>
                        <div class="servicescontent">
                            <a href="">Custom-Made Creations</a>
                            <a href="">Gift Packaging & Bundles</a>
                            <a href="">Workshops & Tutorials</a>
                        </div>
                    </div>

                    <div class="contactsbutton">
                        <button class="nav-item"><a href="" class="nav-link">Contacts</a></button>
                    </div>

                    <div class="blogbutton">
                        <button class="nav-item"><a href="" class="nav-link">Blog</a></button>
                    </div>

                </ul>

            </div>
        </div>
    </nav>


    <!-- End Nav Bar -->

    <!-- Jumbotron -->
    <section class="home" id="home">
        <div class="home-text container">
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">CATCH UP WITH THE LATEST CREATIONS</h2>
            <p class="title-text"><br>
                Explore the world of Chunkish, where creativity meets craftsmanship. From intricately detailed crochet
                dolls to vibrant flowers, every item is a testament to our passion for handmade art.
                Whether you're looking for a unique gift or a personal keepsake, our crochet creations are perfect for
                any occasion. Stay tuned for new designs and limited collections that add a touch of whimsy and warmth
                to your everyday life.
            </p>
            <a href="#" class="btn2">Read more</a>
        </div>
        <div class="imgBx">
            <img src="img/chunku.png" alt="" class="fitBg">
        </div>
    </section>

    <!-- End Jumbotron -->

    <!-- Main Content -->
    <div style="height: 1px; padding: 0px;">
    </div>
    <div class="container">
        <!-- Products Section -->
        <section class="products-section mb-5">
            <h2 class="text-center mb-4">OUR PRODUCTS</h2>
            <div class="row">
                <!-- Product Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/bluepink.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Blush & Sky Couple Dolls</h5>
                            <h6 class="text-primary">₱175</h6>
                            <p class="card-text">A charming crochet duo in soft pink and blue tones, perfect as a gift
                                for couples or loved ones.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/tuliptopped.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Tulip Topper Doll</h5>
                            <h6 class="text-primary">₱150</h6>
                            <p class="card-text">A delightful crochet doll featuring a vibrant tulip on its head,
                                bringing charm and whimsy.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/anime.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Anime Amigurumi</h5>
                            <h6 class="text-primary">₱200</h6>
                            <p class="card-text"> A detailed crochet doll inspired by anime, capturing your favorite
                                characters in yarn form.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/singletulip.jpg" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Solo Bloom</h5>
                            <h6 class="text-primary">₱90</h6>
                            <p class="card-text"> A single, handcrafted tulip crochet flower that adds an elegant touch
                                to any space.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/octopus.jpg" class="card-img-top" alt="Product 5">
                        <div class="card-body">
                            <h5 class="card-title">Squishy Octopus</h5>
                            <h6 class="text-primary">₱150</h6>
                            <p class="card-text">An adorable crochet octopus with a cuddly design, perfect as a playful
                                companion.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/twotulips.jpg" class="card-img-top" alt="Product 6">
                        <div class="card-body">
                            <h5 class="card-title">Twin Blooms</h5>
                            <h6 class="text-primary">₱120</h6>
                            <p class="card-text">Two intricately crocheted tulips that symbolize beauty and balance in
                                perfect harmony.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="number" class="form-control w-20" min="1" value="1" style="width: 70px;">
                                <button class="btn btn-success w-75 ms-2" style="width: calc(100% - 90px);"><i
                                        class="fas fa-shopping-cart ms-1"> Add to Cart</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- End Products Section -->

    <!-- End Main Content -->

    <!-- Footer -->
    <footer>
        <div class="text-center my-5">
            <img src="img/C H U N K I S H.png" alt="Logo" class="mb-3">
        </div>

        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Chunkish is a mini side business of a Chiang Kai Shek College Student. Chunkish sells a variety of
                    handmade crochet items such as mini crochet dolls, keychains, crochet animals, and crochet flowers.
                </p>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>1477 Narra Street, Tondo, <br> Manila, Philippines <br> 1013</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope'></i></span>
                        <p><a href="mailto:chunkishshop@gmail.com">chunkishshop@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="payment">
                <h6>Payment Methods</h6>
                <img src="img/gcash.png" alt="Visa" class="mx-2">
                <img src="img/maya.png" alt="MasterCard" class="mx-2">
                <img src="img/paypal.png" alt="PayPal" class="mx-2">
            </div>

            <div class="copyright">
                <p>&copy; 2024 Chunkish. All Rights Reserved.</p>
            </div>

            <ul class="sci">
                <h6>Follow Us</h6>
                <li><a href="#" class="mx-2"><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#" class="mx-2"><i class="bx bxl-instagram"></i></a></li>
                <li><a href="#" class="mx-2"><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#" class="mx-2"><i class="bx bxl-linkedin"></i></a></li>
        </div>
        </div>
    </footer>

    <!-- End Footer -->


    <!-- jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('scroll', function () {
            const midBar = document.getElementById('midBar');
            if (window.scrollY > 50) {
                midBar.classList.add('shrink');
            } else {
                midBar.classList.remove('shrink');
            }
        });
    </script>
    <script>
        const searchInput = document.querySelector('.search-box input');
        const searchButton = document.querySelector('.search-box button');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                searchInput.classList.add('shrink');
                searchButton.classList.add('shrink');
            } else {
                searchInput.classList.remove('shrink');
                searchButton.classList.remove('shrink');
            }
        });
    </script>

    <script>
        let cart = [];
        let total = 0;
        let currentLanguage = 'en';
        let currentCurrency = 'PHP';

        const conversionRates = { USD: 0.017, PHP: 1 };

        const translations = {
            en: { contactUs: "Contact Us", cart: "Cart", addToCart: "Add to Cart", checkout: "Checkout", total: "Total", emptyCart: "Your cart is empty!", proceeding: "Proceeding to checkout..." },
            fil: { contactUs: "Makipag-ugnayan", cart: "Kariton", addToCart: "Idagdag sa Kariton", checkout: "Bayaran", total: "Kabuuan", emptyCart: "Walang laman ang iyong kariton!", proceeding: "Nagpapatuloy sa pagbabayad..." }
        };

        function formatPrice(price, currency) {
            const converted = currency === 'USD' ? price * conversionRates['USD'] : price;
            return currency === 'USD' ? `$${converted.toFixed(2)}` : `₱${converted.toFixed(2)}`;
        }

        function updateProductPrices() {
            document.querySelectorAll('.text-primary').forEach(priceElement => {
                const basePrice = parseFloat(
                    priceElement.dataset.basePrice ||
                    priceElement.textContent.replace(/[^0-9.]/g, '')
                );
                if (!priceElement.dataset.basePrice && !isNaN(basePrice)) {
                    priceElement.dataset.basePrice = basePrice;
                }
                if (!isNaN(basePrice)) {
                    priceElement.textContent = formatPrice(basePrice, currentCurrency);
                }
            });
        }

        function updateLanguage() {
            const contactBtn = document.querySelector('.btn-outline-light');
            if (contactBtn) contactBtn.textContent = translations[currentLanguage].contactUs;

            const cartText = document.querySelector('.cart-link .text');
            if (cartText) cartText.textContent = ' ' + translations[currentLanguage].cart;

            document.querySelectorAll('.btn-success').forEach(button => {
                if (button.closest('.card')) {
                    button.innerHTML = `<i class="fas fa-shopping-cart ms-1"> ${translations[currentLanguage].addToCart}</i>`;
                }
            });

            const cartHeader = document.querySelector('#cartItems h6');
            if (cartHeader) cartHeader.textContent = translations[currentLanguage].cart;

            const checkoutBtn = document.querySelector('#cartItems .btn-success');
            if (checkoutBtn) checkoutBtn.textContent = translations[currentLanguage].checkout;

            updateCart();
        }

        function toggleCart(event) {
            event.preventDefault();
            const cartItems = document.getElementById('cartItems');
            cartItems.style.display = cartItems.style.display === 'none' ? 'block' : 'none';
        }

        // Load cart from DB on page load
        function loadCart() {
            fetch('cart_handler.php?action=get')
                .then(r => r.json())
                .then(data => {
                    if (data.status === 'ok') {
                        cart = data.items.map(item => ({
                            id: item.product_id,
                            name: item.product_name,
                            price: parseFloat(item.price),
                            quantity: parseInt(item.quantity)
                        }));
                        updateCart();
                    }
                });
        }

        function addToCart(productId, name, price, quantity) {
            fetch('cart_handler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=add&product_id=${productId}&product_name=${encodeURIComponent(name)}&price=${price}&quantity=${quantity}`
            })
                .then(r => r.json())
                .then(data => {
                    if (data.status === 'not_logged_in') {
                        alert('Please sign in to add items to your cart!');
                        window.location.href = 'login.html';
                        return;
                    }
                    // Update local cart
                    const existing = cart.find(i => i.id === productId);
                    if (existing) {
                        existing.quantity += quantity;
                    } else {
                        cart.push({ id: productId, name, price, quantity });
                    }
                    updateCart();
                });
        }

        function removeFromCart(productId) {
            fetch('cart_handler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=remove&product_id=${productId}`
            })
                .then(r => r.json())
                .then(() => {
                    cart = cart.filter(item => item.id !== productId);
                    updateCart();
                });
        }

        function updateCart() {
            const cartList = document.getElementById('cartList');
            const cartCount = document.getElementById('cartCount');
            const cartTotal = document.getElementById('cartTotal');

            cartList.innerHTML = '';
            total = 0;
            let count = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                count += item.quantity;
                cartList.innerHTML += `
            <div class="cart-item d-flex justify-content-between align-items-center mb-2">
                <div>
                    ${item.name} x${item.quantity} (${formatPrice(item.price, currentCurrency)} each)
                    <button class="btn btn-sm btn-danger ms-2" onclick="removeFromCart('${item.id}')">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
                <span>${formatPrice(itemTotal, currentCurrency)}</span>
            </div>`;
            });

            cartCount.textContent = count;
            cartTotal.textContent = formatPrice(total, currentCurrency);

            if (cart.length === 0) {
                cartList.innerHTML = `<p class="text-muted">${translations[currentLanguage].emptyCart}</p>`;
            }
        }

        function checkout() {
            if (cart.length === 0) {
                alert(translations[currentLanguage].emptyCart);
                return;
            }
            alert(`${translations[currentLanguage].total}: ${formatPrice(total, currentCurrency)}\n${translations[currentLanguage].proceeding}`);
        }

        document.addEventListener('DOMContentLoaded', function () {
            // UPDATED: language listener now calls updateLanguage()
            document.querySelector('select[aria-label="Language"]').addEventListener('change', function () {
                currentLanguage = this.value;
                updateLanguage();
            });

            document.querySelector('select[aria-label="Currency"]').addEventListener('change', function () {
                currentCurrency = this.value === 'php' ? 'USD' : 'PHP';
                updateCart();
                updateProductPrices();
            });

            document.querySelectorAll('.btn-success').forEach((button, index) => {
                button.addEventListener('click', function () {
                    const card = this.closest('.card');
                    if (!card) return;
                    const productId = `product-${index + 1}`;
                    const name = card.querySelector('.card-title').textContent;
                    const priceEl = card.querySelector('.text-primary');
                    const price = parseFloat(priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9.]/g, ''));
                    const quantity = parseInt(card.querySelector('input[type="number"]').value) || 1;
                    addToCart(productId, name, price, quantity);
                });
            });

            loadCart();
            updateProductPrices();
        });

        document.addEventListener('click', function (event) {
            const cartDropdown = document.getElementById('cartItems');
            const cartLink = document.querySelector('.cart-link');
            if (!cartDropdown.contains(event.target) && !cartLink.contains(event.target)) {
                cartDropdown.style.display = 'none';
            }
        });
    </script>

</body>

</html>