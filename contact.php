<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Caffé Lilio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      margin-top: 80px;
      background: #f8f8f8;
    }

    /* Contact Section */
    .contact-section {
      text-align: center;
      padding: 50px 20px;
      background: url('cafe-bg.jpg') no-repeat center center/cover;
      color: #333;
      animation: fadeIn 1.5s ease-in-out;
    }

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

    .contact-section h2 {
      font-size: 42px;
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 15px;
      text-transform: uppercase;
    }

    .contact-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 40px;
      gap: 40px;
    }

    .contact-info,
    .contact-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: left;
      width: 400px;
      opacity: 0;
      transform: translateY(50px);
      animation: slideUp 1.2s ease-in-out forwards;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .contact-info {
      background: #333;
      color: white;
      animation-delay: 0.3s;
    }

    .info-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      color: #444;
      /* Change text color */
    }

    /* Specific text color styling */
    .info-item p {
      font-size: 16px;
      color: white;
      /* Gold color */
      margin: 0;
    }

    .info-item i {
      font-size: 24px;
      margin-right: 15px;
      color: white;
    }

    .social-icons a {
      color: white;
      font-size: 20px;
      margin-right: 10px;
      transition: 0.3s ease;
    }

    .social-icons a:hover {
      color: #FFD700;
      transform: scale(1.2);
    }

    .contact-form h3 {
      font-family: 'Poppins', sans-serif;
      font-size: 24px;
      margin-bottom: 20px;
      color: #222;
    }

    .contact-form {
      background: white !important;
      color: white !important;
      /* Makes text white */
    }



    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
      transition: 0.3s ease-in-out;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #FFD700#1877f2;
      box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }

    .contact-form button {
      background: #1877f2;
      color: white;
      padding: 12px 15px;
      border: none;
      cursor: pointer;
      font-size: 18px;
      border-radius: 5px;
      transition: 0.3s ease;
      width: 100%;
    }

    .contact-form button:hover {
      background: #e6c300;
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .contact-container {
        flex-direction: column;
      }

      .contact-info,
      .contact-form {
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
      <a href="contact.html" class="active">Contact</a>
      <a href="reservation.html">Reservation</a>
    </nav>
    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-user" id="user-icon"></i>
    </div>
  </header>

  <section class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-container">
      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>Brgy. Rizal st. cr 4th st., Liliw, Laguna</p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p>+49 2542 084</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p>caffelilio.liliw@gmail.com</p>
        </div>
        <div class="social-icons">
          <a href="https://www.facebook.com/caffelilio.ph" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/caffelilio.ph/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@caffelilioristorante" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form action="#" method="POST">
          <input type="text" name="name" placeholder="Name:" required>
          <input type="email" name="email" placeholder="Email:" required>
          <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
          <button type="submit">Send Message</button>
        </form>
      </div>
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