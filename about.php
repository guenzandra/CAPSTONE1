<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Caffé Lilio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    /* General Reset */
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Slide-in animation */
    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Hero Section (Background Fix) */
    .about-header {
      background: #333;
      /* Dark background */
      color: white;
      padding: 18px;
      font-size: 50px !important;
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      border-radius: 10px;
      display: inline-block;
      width: 100%;
      margin-top: 75px;
      animation: fadeIn 1s ease-in-out;
    }

    /* About content container */
    .about-content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 50px;
      padding: 40px;
      opacity: 0;
      /* Start hidden */
      animation: fadeIn 1s ease-in-out forwards;
      animation-delay: 0.5s;
    }

    /* Alternate layout for second about-content section */
    .about-content:nth-child(even) {
      flex-direction: row-reverse;
    }

    /* Text animation */
    .about-text {
      max-width: 600px;
      text-align: left;
      flex: 1;
      opacity: 0;
      animation: slideIn 1s ease-in-out forwards;
      animation-delay: 0.7s;
    }

    /* Image animation */
    .about-img {
      width: 450px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      flex: 1;
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out forwards;
      animation-delay: 0.9s;

      /* Smooth transition */
      transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Image hover effect */
    .about-img:hover {
      transform: scale(1.1) rotate(2deg);
      /* Slight rotation for a better effect */
      opacity: 1;
      /* Ensure full visibility */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    }

    /* Responsive Fix */
    @media (max-width: 768px) {
      .about-content {
        flex-direction: column !important;
        text-align: center;
      }

      .about-text {
        text-align: center;
      }

      .about-img {
        width: 90%;
      }
    }



    /* Responsive Fix */
    @media (max-width: 768px) {
      .about-content {
        flex-direction: column !important;
        text-align: center;
      }

      .about-text {
        text-align: center;
      }

      .about-img {
        width: 90%;
      }
    }
  </style>
</head>

<body>

  <header>
    <a href="index.html" class="logo">Caffé Lilio</a>
    <nav class="navbar">
      <a href="index.html">Home</a>
      <a href="menu.html">Menu</a>
      <a href="about.html" class="active">About</a>
      <a href="contact.html">Contact</a>
      <a href="reservation.html">Reservation</a>
    </nav>
    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-user" id="user-icon"></i>
    </div>
  </header>

  <section class="about" id="about">
    <div class="about-container">
      <h2 class="about-header">Our Story</h2>
      <div class="about-content">
        <div class="about-text">
          <p>Although it was a big challenge to establish such a business during global circumstances, the Salansang family still made it happen. It has always been their dream to establish an Italian restaurant that will serve nothing but authentic and premium quality Italian cuisine with their specialty Premium Angus Beef, Hand-tossed Pizza and real Italian Gelato. Talking about authenticity, Caffe Lilio guarantees that dishes like their premium angus beef and other ingredients are from their authentic Italian suppliers and being cooked by their Italian cuisine expert chefs.</p>
        </div>
        <div class="about-image">
          <img src="family.webp" alt="Caffé Lilio Interior" class="about-img">
        </div>
      </div>
      <div class="about-content">
        <div class="about-text">
          <p>Caffe Lilio offers a charming ambiance that perfectly complements its authentic Italian cuisine. Located in a cozy corner, our restaurant’s elegant interior creates a welcoming environment where guests can unwind and enjoy a delicious meal. From the warm, rustic decor to the intimate lighting, every corner of our cafe reflects the passion and dedication we put into providing an unforgettable dining experience. The beauty of Caffe Lilio isn’t just in the food but in the atmosphere where every detail is crafted with love and care to make your visit memorable.</p>
        </div>
        <div class="about-image1">
          <img src="place 3.jpg" alt="Cafe Lilio Interior" class="about-img">
        </div>
      </div>
    </div>
  </section>

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