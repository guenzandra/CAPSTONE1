<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation | Caffé Lilio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin-top: 80px;
      background: #f8f8f8;
      opacity: 0;
      animation: fadeIn 1s ease-in forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .reservation-section {
      text-align: center;
      padding: 50px 20px;
      background: url('cafe-bg.jpg') no-repeat center center/cover;
      color: #333;
    }

    .reservation-section h2 {
      font-size: 42px;
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 15px;
      text-transform: uppercase;
      transform: translateY(-20px);
      opacity: 0;
      animation: slideIn 1s ease-in-out forwards;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .reservation-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 40px;
      gap: 40px;
    }

    .reservation-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: left;
      width: 700px;
      opacity: 0;
      animation: fadeInUp 1s ease-in-out forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .reservation-form h3 {
      font-family: 'Poppins', sans-serif;
      font-size: 24px;
      margin-bottom: 20px;
      color: #222;
    }

    .reservation-form input,
    .reservation-form textarea,
    .reservation-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
      transition: 0.3s ease-in-out;
    }

    .reservation-form input:focus,
    .reservation-form textarea:focus {
      border-color: #FFD700;
      box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }

    .reservation-form button {
      background: #1877f2;
      color: white;
      padding: 12px 15px;
      border: none;
      cursor: pointer;
      font-size: 18px;
      border-radius: 5px;
      transition: transform 0.3s ease-in-out, background 0.3s;
      width: 100%;
    }

    .reservation-form button:hover {
      background: #e6c300;
      transform: scale(1.05);
    }

    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
      opacity: 0;
      animation: fadeIn 2s ease-in forwards;
    }

    @media (max-width: 768px) {
      .reservation-container {
        flex-direction: column;
      }

      .reservation-form {
        width: 100%;
        max-width: 400px;
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
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
      <a href="reservation.html" class="active">Reservation</a>
    </nav>
    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-user" id="user-icon"></i>
    </div>
  </header>

  <section class="reservation-section">
    <h2>Reservation</h2>
    <div class="reservation-container">
      <div class="reservation-form">
        <h3>Reserve Your Table</h3>
        <form action="#" method="POST">
          <input type="text" name="name" placeholder="Full Name:" required>
          <input type="email" name="email" placeholder="Email:" required>
          <input type="tel" name="phone" placeholder="Phone Number:" required>
          <input type="date" name="date" required>
          <input type="time" name="time" required>
          <input type="text" name="guests" placeholder="Number of Guests:" required>
          <textarea name="message" placeholder="Special Requests" rows="4"></textarea>
          <button type="submit">Reserve Now</button>
        </form>
      </div>
    </div>
  </section>



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

  <script src="script.js"></script>
</body>

</html>