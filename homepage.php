<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caffé Lilio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<style>
  html,
  body {
    overflow-x: hidden;
    /* Prevents unwanted horizontal scroll */
    background: url('img/DSC09479-1.webp')no-repeat;
  }

  header.scrolled {
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .menu {
    background: url('img/bgabout.png') no-repeat center center/cover;
    padding: 50px 20px;
    text-align: center;
    color: white;
  }

  .menu h2 {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .menu-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
  }

  .menu-item.show {
    opacity: 1;
    transform: scale(1);
  }

  .menu-item {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    text-align: center;
  }

  .menu-item:hover {
    transform: scale(1.05);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
    transition: 0.3s ease;
  }

  section {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  section {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .btn {
    display: inline-block;
    background: #ff9800;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 25px;
    transition: 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
  }

  .btn::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.3);
    transform: scale(0);
    transition: transform 0.4s ease;
    border-radius: 50%;
  }

  .btn:hover::after {
    transform: scale(4);
  }


  header.scrolled {
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  /* Smooth Scroll Effect */
  html {
    scroll-behavior: smooth;
  }

  /* Fade-in for Contact & Map Section */
  .menu-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }

  .view-our-menu {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .about-content:nth-child(odd) {
    flex-direction: row-reverse;
  }

  .scroll-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #ff9800;
    color: white;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.3s ease-in-out;
  }

  .scroll-to-top:hover {
    background: #e68900;
  }

  .scroll-to-top.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    /* Dark overlay */
    justify-content: center;
    align-items: center;
    font-size: 15px;
    display: flex;
    padding: 20px;
  }

  .modal-content {
    background: white;
    padding: 25px;
    border-radius: 12px;
    width: 350px;
    text-align: center;
    position: relative;
    animation: fadeIn 0.3s ease-out;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
  }

  .modal-content h2 {
    font-family: 'Poppins', sans-serif;
  }

  .modal-content p {
    font-family: 'Poppins', sans-serif;
  }

  /* CLOSE BUTTON */
  .close {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    background: transparent;
    border: none;
  }

  .close:hover {
    color: #e74c3c;
  }

  /* FORM FIELDS */
  input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    font-size: 16px;
    transition: 0.3s;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-family: 'Poppins', sans-serif;
  }

  input:focus {
    border-color: black;
    outline: none;
  }

  /* LOGIN BUTTON */
  button {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
    font-family: 'Poppins', sans-serif;
  }

  /* STANDARD LOGIN BUTTON */
  button[type="submit"] {
    background: #1877f2;
    color: white;
    font-weight: bold;
  }

  button[type="submit"]:hover {
    background: #d4a100;
  }

  /* SOCIAL LOGIN BUTTONS */
  .social-login {
    display: flex;
    justify-content: center;
    gap: 10px;
    /* Adds spacing between buttons */
    margin-top: 15px;
  }

  /* STYLE FOR SOCIAL BUTTONS */
  .social-login button {
    width: 150px;
    /* ✅ Fixes long border issue */
    max-width: 100%;
    /* Ensures it doesn't stretch */
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: white;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
  }

  /* GOOGLE BUTTON */
  .google-login {
    background: #db4437;
  }

  .google-login:hover {
    background: #c1351d;
    transform: scale(1.05);
  }

  /* FACEBOOK BUTTON */
  .facebook-login {
    background: #1877f2;
  }

  .facebook-login:hover {
    background: #125ec4;
    transform: scale(1.05);
  }

  /* ICON STYLING */
  .google-login i,
  .facebook-login i {
    font-size: 20px;
  }

  /* OR TEXT */
  .or-text {
    font-size: 14px;
    color: #777;
    margin: 15px 0;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .or-text::before,
  .or-text::after {
    content: "";
    position: absolute;
    width: 40%;
    height: 1px;
    background: #ddd;
    top: 50%;
    transform: translateY(-50%);
  }

  .or-text::before {
    left: 0;
  }

  .or-text::after {
    right: 0;
  }

  /* REGISTER LINK */
  .register-link {
    margin-top: 15px;
    font-size: 14px;
  }

  .register-link a {
    font-family: 'Poppins', sans-serif !important;
    /* Change to your desired font */
    font-size: 16px;
    /* Adjust size if needed */
    font-weight: bold;
    color: #e6b800;
    text-decoration: none;
  }

  .register-link a:hover {
    text-decoration: underline;
  }

  p a {
    font-size: 12px;
    /* Adjust the size */
    font-weight: bold;
    /* Make it bold */
    font-family: 'Poppins', sans-serif;
    /* Change font style */
    color: black;
    /* Gold color */
    text-decoration: none;
    /* Remove underline */
  }

  p a:hover {
    text-decoration: underline;
    /* Add underline on hover */
  }

  /* FADE-IN ANIMATION */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }


  @media (max-width: 480px) {
    .modal-content {
      width: 90%;
      padding: 20px;
    }

    input,
    button {
      font-size: 14px;
      padding: 10px;
    }

    .social-login button {
      font-size: 14px;
      padding: 10px;
    }
  }
</style>

<!-----------------HTML CODE---------------------------------------->

<body>
  <header>
    <a href="#" class="logo">Caffé Lilio</a>
    <nav class="navbar">
      <a href="homepage.php" class="active">Home</a>
      <a href="menu.php">Menu</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
      <a href="reservation.php">Reservation</a>
    </nav>
    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-user" id="user-icon"></i>
    </div>
  </header>
  <button id="scrollToTop" class="scroll-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>


  <section class="home" id="home">
    <div class="content">
      <h1>Caffé Lilio Ristorante</h1>
      <p>Experience the best food in Liliw Laguna!</p>
      <a href="#menu" class="btn">Explore Menu</a>
    </div>
  </section>


  <section class="about" id="about">
    <h2>About Us</h2>
    <div class="about-content">
      <img src=img/place1.jpg alt="Caffé Lilio" class="about-img">
      <div class="about-text">
        <p>At Caffé Lilio, we believe in bringing the finest quality food and coffee to our customers. Established in the heart of Liliw, Laguna, our restaurant is a family-owned business that offers a variety of delicious dishes, from freshly baked pastries to hearty meals like Ossobuco and Porchetta. Our mission is to provide a warm and welcoming atmosphere for guests to enjoy a memorable dining experience.</p>
        <p>Our team of chefs uses only the best ingredients to create flavorful meals that satisfy all your cravings. Whether you're here for a casual lunch or a special celebration, we are dedicated to making every visit enjoyable.</p>
      </div>
    </div>
  </section>

  <section class="menu" id="menu">
    <h2>Our Menu</h2>
    <div class="menu-items">
      <div class="menu-item" onclick="redirectToDetails('ossobuco', 'image1.png', 'Ossobuco', 'Aromatic and rich in flavor.', 450)">
        <img src=img/image1.png alt="Ossobuco">
        <h3>Ossobuco</h3>
        <p>hearty dish made by slow-cooking veal shanks with a flavorful mix of white wine, broth, tomatoes, onions, carrots, celery, garlic, and herbs.</p>
      </div>
      <div class="menu-item" onclick="redirectToDetails('porchetta', 'image2.png', 'Porchetta', 'Freshly baked and delicious.', 400)">
        <img src="img/image2.png" alt="Porchetta">
        <h3>Porchetta</h3>
        <p>seasoned with garlic, rosemary, fennel, black pepper, and other aromatic herbs.</p>
      </div>
      <div class="menu-item" onclick="redirectToDetails('friedCalamari', 'image3.jpg', 'Fried Calamari', 'Healthy and satisfying.', 350)">
        <img src="img/image3.jpg" alt="Fried Calamari">
        <h3>Fried Calamari</h3>
        <p>crispy, golden-brown seafood delicacy made from fresh squid that is lightly battered and deep-fried to perfection.</p>
      </div>
    </div>


  </section>
  <div class="view-our-menu">
    <a href="menu.php" class="btn">View Our Menu</a>
  </div>

  <section class="visit-container" id="contact">
    <div class="visit-info">
      <h2>Visit Us</h2>
      <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <p>Brgy. Rizal st. cr 4th st., Liliw, Laguna.</p>
      </div>
      <div class="info-item">
        <i class="fas fa-phone"></i>
        <p>+49 2542 084</p>
      </div>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <p>caffelilio.liliw@gmail.com</p>
      </div>
      <div class="info-item">
        <a href="https://www.facebook.com/caffelilio.ph" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/caffelilio.ph/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@caffelilioristorante" target="_blank" class="social-icon tiktok">
          <i class="fab fa-tiktok"></i>
        </a>
      </div>
    </div>
    </div>
    <div class="visit-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.823568421758!2d121.4329315!3d14.1323022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5bc02c4f1977%3A0x88727b5a78560087!2sCaff%C3%A8%20Lilio!5e0!3m2!1sen!2sph!4v1710170241341!5m2!1sen!2sph"
        width="100%"
        height="300"
        style="border:0; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.2);"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>
  <footer>
    <p>© 2025 Caffé Lilio. All rights reserved.</p>
  </footer>

  <!-------------------------JS FILE------------------------------>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sections = document.querySelectorAll("section");
      const menuItems = document.querySelectorAll(".menu-item");
      const header = document.querySelector("header");
      let lastScrollTop = 0; // Variable to track the last scroll position

      function revealOnScroll() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        sections.forEach((section) => {
          const sectionTop = section.getBoundingClientRect().top;

          if (sectionTop < window.innerHeight * 0.8) {
            section.classList.add("visible");
          } else if (scrollTop < lastScrollTop) { // If scrolling up, re-trigger animation
            section.classList.remove("visible");
            setTimeout(() => section.classList.add("visible"), 100);
          }
        });

        // Add animation to header when scrolling
        if (scrollTop > 50) {
          header.classList.add("scrolled");
        } else {
          header.classList.remove("scrolled");
        }

        lastScrollTop = scrollTop;
      }

      function animateMenuItems() {
        menuItems.forEach((item, index) => {
          setTimeout(() => {
            item.classList.add("show");
          }, index * 150);
        });
      }

      window.addEventListener("scroll", revealOnScroll);
      animateMenuItems();
      revealOnScroll();
    });

    document.addEventListener("DOMContentLoaded", function() {
      const header = document.querySelector("header");
      let lastScrollTop = 0;

      window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
          header.classList.add("scrolled");
        } else {
          header.classList.remove("scrolled"); // Ensure it returns to normal
        }

        lastScrollTop = scrollTop;
      });
    });
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




  <script src="script.js"></script>

</body>

</html>