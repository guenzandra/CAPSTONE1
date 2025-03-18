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
    <h3>My Cart</h3>
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
    }

    .cart-sidebar.active {
      right: 0;
    }

    .main-content {
      transition: margin-right 0.3s ease-in-out;
    }

    .main-content.shrink {
      margin-right: 300px;
    }

    .cart-item {
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

    <!-- Categories -->
     <div class="search-box">
    <input type="text" id="search" name="Search" placeholder="Search...">
  </div>

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


    <h2>Salads & Soup</h2>
    <div class="menu-items">
      <div class="menu-item salads-soup" data-category="burger" onclick="redirectToDetails">
        <img src="img/caesar.jpg" alt="burger">
        <h3>Caesar</h3>
        <p>Hearty dish made by slow-cooking veal shanks with a flavorful mix of white wine, broth, tomatoes, onions, carrots, celery, garlic, and herbs.</p>
      </div>
      <div class="menu-item salads-soup " onclick="redirectToDetails">
        <img src="img/mango-salad.jfif" alt="Porchetta">
        <h3>Gorgonzola Mango Salad</h3>
        <p>Seasoned with garlic, rosemary, fennel, black pepper, and other aromatic herbs.</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/insalata.jpg" alt="Fried Calamari">
        <h3>Insalata Greca</h3>
        <p>Crispy, golden-brown seafood delicacy made from fresh squid that is lightly battered and deep-fried to perfection.</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/kale.jpg" alt="Fried Calamari">
        <h3>Kale</h3>
        <p>Crispy, golden-brown seafood delicacy made from fresh squid that is lightly battered and deep-fried to perfection.</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/burrata.jpg" alt="Fried Calamari">
        <h3>Burrata</h3>
        <p>Crispy, golden-brown seafood delicacy made from fresh squid that is lightly battered and deep-fried to perfection.</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/grande.jpg" alt="Fried Calamari">
        <h3>Insalata Grande</h3>
        <p> mix of fresh greens, vegetables, proteins, and flavorful toppings.</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/giorno.jfif" alt="Fried Calamari">
        <h3>Zuppa Del Giorno</h3>
        <p>Soup of the day(daily fresh and nutritious soup)</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/mare.webp" alt="Fried Calamari">
        <h3>Zuppa Di Mare</h3>
        <p>Mixed seafood, basil, tomato with toasted Bread</p>
      </div>
      <div class="menu-item salads-soup" onclick="redirectToDetails">
        <img src="img/fungi.jpg" alt="Fried Calamari">
        <h3>Zuppa Di Fungi</h3>
        <p>Cream of Mushroom</p>
      </div>
    </div>


    <h2>pizza</h2>
    <div class="menu-items">
      <div class="menu-item pizza" data-category="pizza" onclick="redirectToDetails">
        <img src="img/image1.png" alt="burger">
        <h3>Burrata Con Mortadella</h3>
        <p>Whole burrata, Mortadella, pesto, walnuts and mozzarella cheese</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/image2.png" alt="Porchetta">
        <h3>Proscitutto E Gorgonzola</h3>
        <p>Gorgonzola, tomato, mozzarella and parma ham</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/metroPizza.jfif" alt="Fried Calamari">
        <h3>Metro</h3>
        <p>(1/2meter) mozzarella, parmesan, provolone cheese, chopped tomato and arugula</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/cacciatore.jfif" alt="Fried Calamari">
        <h3>Cacciatore</h3>
        <p>Wild salami, anchovies, Gorgonzola cheese, mozzarella and tomato</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/allmeat.jpg" alt="Fried Calamari">
        <h3>All Meat</h3>
        <p>Ham, salami, sausage, bacon, mozzarella and tomato</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/fourcheese.jpg" alt="Fried Calamari">
        <h3>Four Cheese</h3>
        <p>Gorgonzola, parmesan, taleggio, mozzarella and tomato</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/bianca.jpg" alt="Fried Calamari">
        <h3>Bianca</h3>
        <p>Special cream cheese, mozzarella, parmesan with Mortadella</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/pepperoni.jpg" alt="Fried Calamari">
        <h3>Pepperoni</h3>
        <p>Spicy salami, mozzarella and tomato</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/pizzaDeMare.jpg" alt="Fried Calamari">
        <h3>Pizza Di Mare</h3>
        <p>Seafood, tomato and mozzarella garlic</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/calzone.jpg" alt="Fried Calamari">
        <h3>Calzone</h3>
        <p>Folded pizza stuffed with ricotta and spinach and salmon gralax</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/milano.jpg" alt="Fried Calamari">
        <h3>Milano</h3>
        <p>Cream Cheese mascarpone ricotta cheese, mozzarella and spinach</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/verdure.jfif" alt="Fried Calamari">
        <h3>Verdure</h3>
        <p>Grilled vegetables, tomato, and mozzarella</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/salsiccia.jfif" alt="Fried Calamari">
        <h3>Salsiccia</h3>
        <p>Italian pork sausage, mushroom, arugula, tomato, mozzarella and truffle aroma</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/scatola.jfif" alt="Fried Calamari">
        <h3>Scatola</h3>
        <p>Pesto sauce, mozzarella, capers and corned spicy tuna</p>
      </div>
      <div class="menu-item pizza" onclick="redirectToDetails">
        <img src="img/margherita.jfif" alt="Fried Calamari">
        <h3>Margherita</h3>
        <p>White mozzarella, basil, oregano, and extra virgin olive oil</p>
      </div>
    </div>


    <h2>Pasta</h2>
    <div class="menu-items">
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiGamberiNeri.jpg" alt="Fried Calamari">
        <h3>Spaghetti Ai Gamberi neri</h3>
        <p>Black pasta with big mussels, shrimp in white wine and eggplant sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiDeMareAlPesto.jpg" alt="Fried Calamari">
        <h3>Spaghetti De Mare Al Pesto</h3>
        <p>Pasta mixed with seafood, mushroom, dried porcini cream and homemade pesto</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiAllaCarbonara.jpg" alt="Fried Calamari">
        <h3>Spaghetti Alla Carbonara</h3>
        <p>Authentic Italian pasta with crispy panetta parmesan eggyolk</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiMareBasilico.jpg" alt="Fried Calamari">
        <h3>Spaghetti Mare Basilico</h3>
        <p>Pasta with seafood, white wine, basil and tomato sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/linguineVongole.jpg" alt="Fried Calamari">
        <h3>Linguine Vongole</h3>
        <p>Pasta with clams in white wine, garlic, parsley and olive oil sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiAglioOlioGamberiti.jpg" alt="Fried Calamari">
        <h3>Spaghetti Aglio Olio Gamberiti</h3>
        <p>Pasta mixed with garlic, green pepper, shrimps, parsley and olive oil sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/linguineTartufo.jpg" alt="Fried Calamari">
        <h3>Linguini Tartufo</h3>
        <p>Pasta mixed with dried porcini mushroom in white truffle aroma cream sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/fettucineConSalsiccia.jfif" alt="Fried Calamari">
        <h3>Fettuccine Con Salsiccia</h3>
        <p>Flat pasta with olives, pancetta and italian sausage in tomato sauce and parmesan</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/rigatoniAnelioRagu.jpg" alt="Fried Calamari">
        <h3>Rigatoni anello ragu</h3>
        <p>Stewed lamb in mascarpone cream sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/penneScampi.jpg" alt="Fried Calamari">
        <h3>Penne Scampi</h3>
        <p>Tube pasta in tomato, mixed cherry tomato, white wine and mushroom</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/pastaAlaPutanesca.jpg" alt="Fried Calamari">
        <h3>Spaghetti Ala Putanesca</h3>
        <p>pasta, garlic, capers, anchovies, olives, basil and tomato sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/spaghettiEpepe.jfif" alt="Fried Calamari">
        <h3>Spaghetti Cacio e Pepe</h3>
        <p>Crushed pepper corn with butter, olivr oil, parsley and pecorino cheese</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/peneArriabbiata.jpg" alt="Fried Calamari">
        <h3>Penne Arrabiata</h3>
        <p>Tube pasta in aged parmesan with dried porcini, green and red chilly and light spicy sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/GnocchiQuatro.jfif" alt="Fried Calamari">
        <h3>Gnocchi Quattro Formaggio</h3>
        <p>Homemade Potato dumplings with spinach in four cheese sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/img/img/img/img/img/img/img/ravioliSpinachi.jpg" alt="Fried Calamari">
        <h3>Ravioli Spinach Formaggio</h3>
        <p>Filled Ravioli with spinach ricotta parmesan in basil toamto sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/img/img/img/img/img/img/beefLasagna.jpg" alt="Fried Calamari">
        <h3>Beef Lasagna</h3>
        <p>Flat layered pasta with US angus beef in mozzarella and bechamel sauce</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/img/img/img/img/img/zucchiniEggplant.jfif" alt="Fried Calamari">
        <h3>Zucchini and Eggplant</h3>
        <p>layered Zucchini and Eggplant with tomato. mozzarella and taleggio cheese</p>
      </div>
      <div class="menu-item pasta" onclick="redirectToDetails">
        <img src="img/img/img/img/img/bakedZitti.jfif" alt="Fried Calamari">
        <h3>Baked Ziti</h3>
        <p>Tube pasta with ricotta cheese and baked tomato parmesan and mozzarella cheese</p>
      </div>
    </div>


    <h2>Dessert</h2>
    <div class="menu-items">
      <div class="menu-item dessert" data-category="burger" onclick="redirectToDetails">
        <img src="img/img/img/img/tiramisu.jfif" alt="burger">
        <h3>Tiramisu</h3>
        <p>Tiramisu cake is a classic Italian dessert made with layers of coffee-soaked ladyfingers (savoiardi) and a rich, creamy mascarpone filling.</p>
      </div>
      <div class="menu-item dessert" onclick="redirectToDetails">
        <img src="img/img/img/cheesecaka.jpg" alt="Porchetta">
        <h3>Cheese cake</h3>
        <p>Cheesecake is a rich, creamy dessert made with a smooth mixture of cream cheese, sugar, and eggs, typically set on a crust made of crushed cookies or graham crackers.</p>
      </div>
      <div class="menu-item dessert" onclick="redirectToDetails">
        <img src="img/img/red velvet.jpg" alt="Fried Calamari">
        <h3>Red Velvet</h3>
        <p>Red velvet cake is a soft, moist, and mildly chocolate-flavored cake known for its vibrant red color and velvety texture.</p>
      </div>
      <div class="menu-item dessert" onclick="redirectToDetails">
        <img src="img/chocolatecake.jpg" alt="Fried Calamari">
        <h3>Chocolate Cake</h3>
        <p>Chocolate cake is a rich, moist dessert made with cocoa powder or melted chocolate, giving it a deep, indulgent flavor.</p>
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