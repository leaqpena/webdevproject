<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BSIT Society Contact</title>
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-dP6ZnGZkm8unvcTEZ6b5s4L+PRkY7r2/f3BZoTFULB+6/C7kKMmKoN6aXfPjsysxBoj1DE5Kj9a9lW7l9V5lKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".see-more-btn").click(function() {
        var newsCard = $(this).closest(".news-card");
        var newsContent = newsCard.find(".news-content");
        newsContent.slideToggle();

        var btnText = $(this).text() === "See More" ? "See Less" : "See More";
        $(this).text(btnText);
      });
    });
  </script>
  <style>
    /* Animated Gradient Background for the Body */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(270deg, #f5f7fa, #c3cfe2, #f5f7fa);
      background-size: 600% 600%;
      animation: gradientAnimation 15s ease infinite;
    }

    @keyframes gradientAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* General Container Styling */
    .container {
      padding: 2rem;
    }

    /* Contact Section Container */
    .contact-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .contact-container h2 {
      font-size: 2rem;
      color: #007bff;
      margin-bottom: 1.5rem;
    }

    /* Flex container for contact cards */
    .contact-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      width: 100%;
    }

    /* Individual Contact Card */
    .contact-card {
      background-color: rgba(240, 248, 255, 0.9);
      width: 280px;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .contact-card i {
      font-size: 2.5rem;
      color: #007bff;
      margin-bottom: 1rem;
    }

    .contact-card h3 {
      font-size: 1.5rem;
      margin-bottom: 0.75rem;
      color: #333;
    }

    .contact-card p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 1rem;
    }

    .contact-card a {
      font-size: 1.1rem;
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
    }

    .contact-card a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
<header>
  <div class="logo">
    <img src="{{ asset('img/img1.jpg')}}" alt="logo" style="display: flex; justify-content: flex-start; margin: 0 auto; max-width:100px;" />
  </div>
  <nav>
    <ul>
      <li><a href="{{ route('welcome')}}">Home</a></li>
      <li><a href="{{ route('about')}}">About</a></li>
      <li><a href="{{ route('event')}}">Events</a></li>
      <li><a href="{{ route('contact')}}">Contact</a></li>
      <li><a href="{{ route('faculty')}}">Faculty and Staff</a></li>
    </ul>
  </nav>
  <div class="auth-buttons">
    <button>Signup</button>
    <button>Signin</button>
  </div>
</header>

<!-- Main Content -->
<main>
  <div class="container">
    <section class="welcome">
      <h1>Get in Touch with BSIT Society!</h1>
      <p>Have questions, suggestions, or need assistance? We’re here to help! </p>
    </section>

    <?php
      // Contact Information
      $email = "bits.slsu.bc@gmail.com";
      $facebook = "https://www.facebook.com/slsubitsofficial/";
    ?>

    <div class="contact-container">
      <h2>Contact Us</h2>
      <div class="contact-cards">
        <!-- Email Card -->
        <div class="contact-card">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>Drop us a message via email</p>
          <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
        </div>

        <!-- Facebook Card -->
        <div class="contact-card">
          <i class="fab fa-facebook"></i>
          <h3>Facebook</h3>
          <p>Visit our official Facebook page</p>
          <a href="<?= $facebook; ?>" target="_blank">slsubitsofficial</a>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <div class="quick-links">
      <h4>Quick Links</h4>
      <a href="mailto:bits.slsu.bc@gmail.com">Email: bits.slsu.bc@gmail.com</a><br>
      <a href="https://www.facebook.com/slsubitsofficial/">Facebook Page</a>
    </div>
    <div class="social-media">
      <h4>Follow Us</h4>
      <a href="#" aria-label="Facebook">
        <img src="{{ asset('img/fb.jpg')}}" alt="Facebook" style="width: 30px; height: 30px;" />
      </a>
      <a href="#" aria-label="Instagram">
        <img src="{{ asset('img/ig.jpg')}}" alt="Instagram" style="width: 30px; height: 30px;" />
      </a>
      <a href="#" aria-label="Twitter">
        <img src="{{ asset('img/twitter.jpg')}}" alt="Twitter" style="width: 30px; height: 30px;" />
      </a>
    </div>
    <div class="newsletter">
      <h4>Newsletter</h4>
      <input type="email" placeholder="Enter your email" />
      <button>Subscribe</button>
    </div>
  </div>
  <br>
  <p>&copy; BSIT Society. All rights reserved.</p>
</footer>
</body>
</html>