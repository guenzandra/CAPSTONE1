<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caffé Lilio Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <style>
    html,
    body {
      overflow-x: hidden;
      background-image: url('img/DSC09479-1.webp') cover;
      /* Prevents unwanted horizontal scroll */
    }

    .menu h1 {
      margin-top: 80px;
      text-align: center;
      background-color: #333;
      /* Dark brown for a coffee-style theme */
      color: white;
      /* Ensures text remains readable */
      padding: 20px;
      border-radius: 10px;
      text-transform: uppercase;
      animation: fadeIn 1s ease-in-out;
    }

    .menu-items {
      margin-top: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.5s ease-out forwards;
    }

    .menu h2 {
      color: black;
      text-align: left;
      animation: slideIn 0.8s ease-in-out;
    }

    .menu-categories-container {
      display: flex;
      overflow-x: auto;
      /* Enables horizontal scrolling */
      gap: 10px;
      padding: 10px;
      justify-content: flex-start;
      white-space: nowrap;
      max-width: 100%;
      scrollbar-width: thin;
      scrollbar-color: gray;
      scroll-behavior: smooth;
      animation: fadeInUp 0.8s ease-in-out;
    }

    /* Custom Scrollbar for WebKit Browsers */
    .menu-categories-container::-webkit-scrollbar {
      height: 8px;
    }

    .menu-categories-container::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #c79a00, #ffd700);
      /* Gold gradient */
      border-radius: 10px;
    }

    .menu-categories-container::-webkit-scrollbar-track {
      background: #f8f8f8;
      border-radius: 10px;
    }

    /* Smooth Scrolling */
    .menu-categories-container {
      scroll-behavior: smooth;
    }

    /* Category Buttons */
    .category-btn {
      font-family: 'Poppins', sans-serif;
      background-color: #c79a00;
      letter-spacing: 1px;
      color: #fff;
      padding: 12px 18px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
      white-space: nowrap;
      font-size: 14px;
      transition: all 0.4s ease-in-out;
    }

    .category-btn:hover {
      background: orange;
      transform: scale(1.05);
      box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.5);
      /* Glow effect */
      transition: all 0.s ease-in-out;
    }

    .category-btn.active {
      background: rgb(41, 40, 38);
      /* Gold color */
      color: black;
      transform: scale(1.1);
      animation: bounce 0.3s ease-in-out;
    }

    @media (max-width: 768px) {
      .menu-items {
        flex-direction: column;
        align-items: center;
      }
    }

    @media (max-width: 768px) {
      .menu-categories-container {
        flex-wrap: nowrap;
        overflow-x: auto;
        /* Enables horizontal scrolling on mobile */
        justify-content: flex-start;
        padding: 5px;
      }

      .category-btn {
        font-size: 12px;
        padding: 8px 12px;
        /* Reduce padding for smaller screens */
      }
    }

    @media (max-width: 480px) {
      .menu-categories-container {
        gap: 5px;
      }

      .category-btn {
        font-size: 11px;
        padding: 6px 10px;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes bounce {

      0%,
      100% {
        transform: scale(1.1);
      }

      50% {
        transform: scale(1.2);
      }
    }

    .menu-items {
      padding: 20px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 10px;
      min-height: 300px;
      /* Ensure the section has height */
    }

    .best-seller-section {
      background-image: url('img/blur1.jpg');
      background-size: cover;
      background-position: center;
      padding: 40px 0;
    }

    .price-id {
      font-weight: bold;
      font-size: 18px;
      font-family: 'Courier New', Courier, monospace;
    }

    .search-box {
      margin: 20px;
      text-align: center;
    }

    .search-box input {
      width: 80%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>

  <header>
    <a href="homepage.php" class="logo">Caffé Lilio</a>
    <nav class="navbar">
      <a href="homepage.php">Home</a>
      <a href="menu.php" class="active">Menu</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="reservation.php">Reservation</a>
    </nav>
    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-user" id="user-icon"></i>
    </div>
  </header>

  <!----------- SA NAVBAR RIGHT TO ------------>
  <div class="cart-sidebar" id="cartSidebar">
    <h3>My Order</h3>
    <ul id="cartItems"></ul>
    <p>Total: <span id="cartTotal">0.00</span></p>
    <button class="checkout-btn">Check Out</button>
  </div>

  <style>
    .cart-sidebar {
      position: fixed;
      right: -300px;
      top: 0;
      width: 300px;
      height: 100vh;
      background: white;
      color: black;
      padding: 20px;
      box-shadow: -3px 0 5px rgba(0, 0, 0, 0.2);
      transition: right 0.3s ease-in-out;
      font-family: Arial, sans-serif;
      z-index: 1000;
    }

    .cart-sidebar.active {
      right: 0;
    }

    .content-wrapper {
      transition: margin-right 0.3s ease-in-out;
    }

    .content-wrapper.shift {
      margin-right: 300px;
    }

    body.sidebar-active .content-wrapper {
      margin-right: 300px;
      /* Mag-aadjust ito kapag lumabas ang cart sidebar */
    }

    .main-content {
      transition: margin-right 0.3s ease-in-out;
    }

    .main-content.shrink {
      margin-right: 300px;
    }

    .cart-item {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #ddd;
    }

    .remove-btn {
      background: none;
      border: none;
      color: red;
      font-size: 16px;
      cursor: pointer;
    }

    .checkout-btn {
      width: 100%;
      padding: 10px;
      background: green;
      color: white;
      border: none;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
    }
  </style>
  <script src="function.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let cart = [];
      const cartSidebar = document.getElementById("cartSidebar");
      const cartItems = document.getElementById("cartItems");
      const cartTotal = document.getElementById("cartTotal");
      const mainContent = document.querySelector(".main-content");
      const addToCartButtons = document.querySelectorAll(".add-button");

      function addToCart(itemName, price) {
        cart.push({
          name: itemName,
          price: parseFloat(price)
        });
        updateCart();
      }

      function updateCart() {
        cartItems.innerHTML = "";
        let total = 0;

        cart.forEach((item, index) => {
          let li = document.createElement("li");
          li.classList.add("cart-item");
          li.innerHTML = `
  <span>${item.name} - PHP ${item.price.toFixed(2)}</span>
  <button class="remove-btn" onclick="removeItem(${index})">&times;</button>
  `;
          cartItems.appendChild(li);
          total += item.price;
        });

        cartTotal.textContent = total.toFixed(2);

        if (cart.length > 0) {
          cartSidebar.classList.add("active");
          mainContent.classList.add("shrink");
        } else {
          cartSidebar.classList.remove("active");
          mainContent.classList.remove("shrink");
        }
      }

      window.removeItem = function(index) {
        cart.splice(index, 1);
        updateCart();
      };

      addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
          let item = this.closest(".menu-item");
          let name = item.querySelector("h3").textContent.trim();
          let price = item.querySelector(".price-id").textContent.trim().replace("₱", "");
          addToCart(name, price);
        });
      });
    });
  </script>



  <!-- Menu Categories -->
  <section class="menu" id="menu">


    <div class="menu-categories-container">

      <div class="menu-categories-container">
        <button class="category-btn" onclick="filterMenu('all', this)">all</button>
        <button class="category-btn" onclick="filterMenu('best-seller', this)">Best Seller</button>
        <button class="category-btn" onclick="filterMenu('burger', this)">Burger</button>
        <button class="category-btn" onclick="filterMenu('salads-soup', this)">Salads & Soup</button>
        <button class="category-btn" onclick="filterMenu('pasta', this)">Pasta</button>
        <button class="category-btn" onclick="filterMenu('pizza', this)">Pizza</button>
        <button class="category-btn" onclick="filterMenu('dessert', this)">Dessert</button>
        <button class="category-btn" onclick="filterMenu('main-course-fish', this)">Main Course Fish</button>
        <button class="category-btn" onclick="filterMenu('main-course-chicken', this)">Main Course Chicken</button>
        <button class="category-btn" onclick="filterMenu('pork', this)">Main Course Pork</button>
        <button class="category-btn" onclick="filterMenu('beef', this)">Main Course Beef</button>
        <button class="category-btn" onclick="filterMenu('drinks', this)">Drinks</button>
        <button class="category-btn" onclick="filterMenu('coffee', this)">Coffee</button>
        <button class="category-btn" onclick="filterMenu('liquor', this)">Liquor</button>
      </div>

    </div>

    <h2>Best-Seller</h2>
    <div class="menu-items">
      <div class="menu-item best-seller" data-category="burger" onclick="redirectToDetails">
        <img src="img/image1.png" alt="burger">
        <h3>Ossobuco</h3>
        <p>Hearty dish made by slow-cooking veal shanks with a flavorful mix of white wine, broth, tomatoes, onions, carrots, celery, garlic, and herbs.</p><br>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item best-seller" onclick="redirectToDetails">
        <img src="img/image2.png" alt="Porchetta">
        <h3>Porchetta</h3>
        <p>Seasoned with garlic, rosemary, fennel, black pepper, and other aromatic herbs.</p><br><br><br>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item best-seller" onclick="redirectToDetails">
        <img src="img/image3.jpg" alt="Fried Calamari">
        <h3>Fried Calamari</h3>
        <p>Crispy, golden-brown seafood delicacy made from fresh squid that is lightly battered and deep-fried to perfection.</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
    </div>


    <h2>Burger</h2>
    <div class="menu-items">
      <div class="menu-item burger" data-category="burger" onclick="redirectToDetails">
        <img src="img/single-cab.jpg" alt="burger">
        <h3>Single Cab</h3>
        <p>single beef patty, a soft toasted bun, and classic toppings like lettuce, tomato, pickles, onions, and a special sauce or mayo.</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item burger" onclick="redirectToDetails">
        <img src="img/double-cab.jpg" alt="burger">
        <h3>Double Cab</h3>
        <p>two juicy beef patties stacked between a toasted bun, often layered with melted cheese, crisp lettuce, fresh tomato, pickles, onions, and a signature sauce or mayo.</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item burger" onclick="redirectToDetails">
        <img src="img/bacon-cab.jpg" alt="burger">
        <h3>Bacon Cab</h3>
        <p>crispy, smoky bacon, melted cheese, and fresh toppings like lettuce, tomato, pickles, and onions.</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item burger" onclick="redirectToDetails">
        <img src="img/burger-steak.jpg" alt="burger">
        <h3>Burger Steak</h3>
        <p>Pan Grilled Angus Beef Patty with Mushroom Sauce Served with Salad and Mushed Potato</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>

      <div class="menu-item burger" onclick="redirectToDetails">
        <img src="img/panini.jpg" alt="burger">
        <h3>Panini</h3>
        <p>Flattened Focaccia Bread with Special Cheese Rolled with Arugula Shrimp Stundried Tomato</p>
        <span class="price-id">230.00</span>
        <button class="add-button" onclick="">Add to Cart</button>
      </div>
      <div class="menu-item burger" onclick="redirectToDetails">
        <img src="img/grilled-mushroom.jpg" alt="burger">
        <h3>Grilled Mushroom</h3>
        <p>crispy, smoky bacon, melted cheese, and fresh toppings like lettuce, tomato, pickles, and onions.</p>
      </div>
    </div>
  </section>

  <script>
    function filterMenu(category, element) {
      let items = document.querySelectorAll('.menu-item');
      let buttons = document.querySelectorAll('.category-btn');
      let sections = document.querySelectorAll('.menu-items');
      let headings = document.querySelectorAll('.menu h2');

      // Remove active class from all buttons
      buttons.forEach(btn => btn.classList.remove('active'));

      // Add active class to the clicked button
      element.classList.add('active');

      // Hide all items initially
      items.forEach(item => {
        item.style.display = "none";
      });


      if (category === 'all') {
        items.forEach(item => item.style.display = "block");
      } else {
        let matchingItems = document.querySelectorAll(`.${category}`);
        matchingItems.forEach(item => item.style.display = "block");
      }

      sections.forEach((section, index) => {
        let visibleItems = section.querySelectorAll('.menu-item[style="display: block;"]');
        if (visibleItems.length === 0) {
          section.style.display = "none";
          headings[index].style.display = "none"; // Hide section title
        } else {
          section.style.display = "flex";
          headings[index].style.display = "block"; // Show section title
        }
      });

      // Show/Hide sections based on filtered items
      sections.forEach(section => {
        let visibleItems = section.querySelectorAll('.menu-item[style*="display: block"]').length > 0;
        section.style.display = visibleItems ? "flex" : "none";
      });

      headings.forEach(heading => {
        let section = heading.nextElementSibling;
        let visibleItems = section.querySelectorAll('.menu-item[style*="display: block"]').length > 0;
        heading.style.display = visibleItems ? "block" : "none";
      });


    }

    document.addEventListener("DOMContentLoaded", function() {
      const modal = document.getElementById("login-modal");
      const closeButton = document.querySelector(".modal-content .close");
      const userIcon = document.getElementById("user-icon");

      // ✅ Ensure the modal is hidden when the page loads
      if (modal) {
        modal.style.display = "none";
      } else {
        console.error("❌ ERROR: #login-modal not found.");
        return;
      }

      if (!closeButton || !userIcon) {
        console.error("❌ ERROR: Missing elements (.close, #user-icon)");
        return;
      }

      // ✅ Show modal when clicking the user icon (Not the menu)
      userIcon.addEventListener("click", function(event) {
        event.preventDefault(); // Prevents default behavior
        console.log("✅ User icon clicked, opening modal.");
        modal.style.display = "flex"; // Show modal
      });

      // ✅ Close modal when clicking close button
      closeButton.addEventListener("click", function() {
        console.log("✅ Close button clicked");
        modal.style.display = "none"; // Hide modal
      });

      // ✅ Close modal when clicking outside of it
      window.addEventListener("click", function(event) {
        if (event.target === modal) {
          console.log("✅ Clicked outside modal, closing");
          modal.style.display = "none";
        }
      });

      // ✅ Ensure the modal doesn't close if clicking inside
      modal.querySelector(".modal-content").addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent closing when clicking inside the modal
      });
    });
  </script>

  <footer>
    <p>© 2025 Caffé Lilio. All rights reserved.</p>
  </footer>

  <div id="login-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Login</h2>
      <form>
        <input type="text" placeholder="Username or Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>

      <p>Or login with:</p>
      <div class="social-login">
        <button class="google-login"><i class="fab fa-google"></i></button>
        <button class="facebook-login"><i class="fab fa-facebook"></i></button>
      </div>

      <p>Don't have an account? <a href="register.html">Create Account</a></p>
    </div>
  </div>


</body>

</html>