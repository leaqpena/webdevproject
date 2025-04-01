<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BSIT Society Website</title>
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
    /* RESET */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      color: #333;
    }

    /* ------------------ HEADER ------------------ */

    /* NAV */
    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }
    nav ul li a {
      text-decoration: none;
      color: black; /* ensure visibility on white header */
      font-weight: 500;
      transition: color 0.3s ease;
    }
    nav ul li a:hover {
      color: #007bff;
    }
    /* Auth Buttons */
    .auth-buttons {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .auth-buttons button {
      padding: 0.5rem 1rem;
      border: none;
      background: #007bff;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .auth-buttons button:hover {
      background: #0056b3;
    }

    /* ------------------ MAIN ------------------ */
    main {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    /* TAB BUTTONS */
    .tabs {
      display: flex;
      justify-content: center;
      margin-bottom: 1.5rem;
    }
    .tabs button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 0.75rem 1.5rem;
      margin: 0 0.5rem;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 4px;
      transition: background 0.3s ease;
    }
    .tabs button.active,
    .tabs button:hover {
      background: #0056b3;
    }

    /* EVENTS SECTION */
    .events-section {
      display: none; /* Hide by default */
      position: relative;
    }
    .events-section.active {
      display: block;
    }
    .events-section h2 {
      margin-bottom: 1rem;
      font-size: 1.8rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-align: center;
    }

    /* SLIDER CONTAINERS (Horizontal Scroll) */
    .news-container,
    .events-slider {
      display: flex;
      flex-direction: row;
      gap: 1rem;
      overflow-x: auto;
      scroll-behavior: smooth;
      padding: 0.5rem;
    }

    /* EVENT/NEWS CARD */
    .event-card, .news-card {
      background-color: #fff;
      border-radius: 8px; /* slightly larger radius */
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      flex: 0 0 auto;
      width: 280px;        /* fixed width to line up horizontally */
      min-width: 280px;
      margin: 0.5rem 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      text-align: center;
    }
    .event-card img, .news-card img {
      width: 100%;
      height: 180px;      /* uniform image height */
      object-fit: cover;  /* crops images nicely */
      border-bottom: 1px solid #ddd;
    }
    .news-card h3, .event-card h3 {
      font-size: 1.1rem;
      margin: 1rem 0 0.5rem;
      padding: 0 1rem;
    }
    .news-card p, .event-card p {
      font-size: 0.95rem;
      margin: 0 1rem 1rem;
      line-height: 1.4;
    }

    /* SEE MORE BUTTON (optional) */
    .see-more-btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 0.5rem 1rem;
      margin: 0 1rem 1rem;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background 0.3s ease;
    }
    .see-more-btn:hover {
      background-color: #0056b3;
    }

    /* SLIDER BUTTONS (Horizontal positioning) */
    .slider-btn {
      cursor: pointer;
      border: none;
      background: #333;
      color: #fff;
      font-size: 1.5rem;
      padding: 0.5rem 0.8rem;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      opacity: 0.7;
      transition: opacity 0.3s ease;
      z-index: 2;
    }
    .slider-btn:hover {
      opacity: 1;
    }
    .prev-btn {
      left: 0;
    }
    .next-btn {
      right: 0;
    }

    /* ------------------ FOOTER ------------------ */
    
  </style>
</head>
<body>

<!-- HEADER -->
<header>
  <div class="logo">
    <img src="{{ asset('img/img1.jpg')}}" alt="logo" style="display: flex; justify-content: flex-start; margin:0 auto; max-width:100px;" />
  </div>
  <nav>
    <ul>
      <li><a href="{{ route('welcome')}}">Home</a></li>
      <li><a href="{{ route('about')}}">About</a></li>
      <li><a href="{{ route('event')}}">Events</a></li>
      <li><a href="{{ route('contact')}}">Contact</a></li>
      <li><a href="{{ route('faculty')}}">Faculty and Staff</a></li>
      <li><a href="{{ route('officers')}}">BITS Officers</a></li>
    </ul>
  </nav>
  <div class="auth-buttons">
    <button>Signup</button>
    <button>Signin</button>
  </div>
</header>

<!-- MAIN CONTENT -->
<main>
  <!-- Tab Buttons for toggling events -->
  <div class="tabs">
    <button id="pastTab" class="active">Past Events</button>
    <button id="upcomingTab">Upcoming Events</button>
  </div>

  <!-- PAST EVENTS SECTION -->
  <section id="pastEventsSection" class="events-section active">
    <h2>Past Events</h2>
    <div class="news-container" id="pastEventsSlider">
      <!-- Example News Card 1 -->
      <div class="news-card">
        <img src="<?= asset('img/img8.jpg'); ?>" alt="News 1" />
        <h3>BITS joins Org Fair 2024 🎉</h3>
        <p class="news-content">
          BITS had a great time at Org Fair 2024, sharing our embedded systems project, games, and capstone projects.
          #BITSOrg2024 #SLSUBCOrgFair2024
        </p>
        <button class="see-more-btn">See More</button>
      </div>

      <!-- Example News Card 2 -->
      <div class="news-card">
        <img src="{{ asset('img/img9.jpg')}}" alt="News 2" />
        <h3>🎉 ASEAN Month Celebration Success!</h3>
        <p class="news-content">
          A huge shoutout to the Bontoc Information Technology Society, in collaboration with the Supreme Student Council,
          for hosting the ASEAN Month Celebration.
          #ASEANMonth #BITS
        </p>
        <button class="see-more-btn">See More</button>
      </div>

      <!-- Example News Card 3 -->
      <div class="news-card">
        <img src="{{ asset('img/img10.jpg')}}" alt="News 3" />
        <h3>Intramurals 2024!</h3>
        <p class="news-content">
          Get ready for the SLSU Bontoc Campus Intramurals 2024! Join in and compete in exciting events.
          #SLSUBCIntramurals2024
        </p>
        <button class="see-more-btn">See More</button>
      </div>

      <!-- Example News Card 4 -->
      <div class="news-card">
        <img src="{{ asset('img/img11.jpg')}}" alt="News 4" />
        <h3>EVCO 2024!</h3>
        <p class="news-content">
          Best of luck to our SLSU Bontoc Campus representatives as they compete in the Java Category for the Eastern Visayas Coding Olympics 2024!
          #EasternVisayasCodingOlympics2024 #BITS
        </p>
        <button class="see-more-btn">See More</button>
      </div>

      <!-- Add additional news-card elements as needed -->
    </div>
    <!-- Slider Buttons for Past Events -->
    <button class="slider-btn prev-btn" data-target="pastEventsSlider" data-direction="prev">&#10094;</button>
    <button class="slider-btn next-btn" data-target="pastEventsSlider" data-direction="next">&#10095;</button>
  </section>

  <!-- UPCOMING EVENTS SECTION -->
  <section id="upcomingEventsSection" class="events-section">
    <h2>Upcoming Events</h2>
    <div class="events-slider" id="upcomingEventsSlider">
      <div class="news-card">
        <img src="<?= asset(''); ?>" alt="Upcoming Event" />
        <h3>IT DAY</h3>
        <p class="news-content">
          Tune in for upcoming updates, IT Students! IT’s going to be exciting and definitely something to look forward to!
        </p>
        <button class="see-more-btn">See More</button>
      </div>
    </div>
    <!-- Slider Buttons for Upcoming Events -->
    <button class="slider-btn prev-btn" data-target="upcomingEventsSlider" data-direction="prev">&#10094;</button>
    <button class="slider-btn next-btn" data-target="upcomingEventsSlider" data-direction="next">&#10095;</button>
  </section>
</main>

<!-- FOOTER -->

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
  </div><br>
  <p>&copy; BSIT Society. All rights reserved.</p>
</footer>

<!-- JavaScript for Tab Toggle and Horizontal Slider -->
<script>
  // Tab toggle functionality
  document.getElementById('pastTab').addEventListener('click', function() {
    document.getElementById('pastEventsSection').classList.add('active');
    document.getElementById('upcomingEventsSection').classList.remove('active');
    this.classList.add('active');
    document.getElementById('upcomingTab').classList.remove('active');
  });

  document.getElementById('upcomingTab').addEventListener('click', function() {
    document.getElementById('upcomingEventsSection').classList.add('active');
    document.getElementById('pastEventsSection').classList.remove('active');
    this.classList.add('active');
    document.getElementById('pastTab').classList.remove('active');
  });

  // Horizontal slider functionality for both sections
  document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".slider-btn");

    buttons.forEach(button => {
      button.addEventListener("click", () => {
        const sliderId = button.getAttribute("data-target");
        const direction = button.getAttribute("data-direction");
        const slider = document.getElementById(sliderId);

        // Determine the width of one card (news-card or event-card)
        let card = slider.querySelector('.news-card') || slider.querySelector('.event-card');
        if (card) {
          const cardStyle = getComputedStyle(card);
          const cardWidth = card.offsetWidth;
          const cardMarginRight = parseInt(cardStyle.marginRight) || 0;
          const scrollAmount = cardWidth + cardMarginRight;

          if (direction === "prev") {
            slider.scrollBy({
              left: -scrollAmount,
              behavior: "smooth"
            });
          } else {
            slider.scrollBy({
              left: scrollAmount,
              behavior: "smooth"
            });
          }
        }
      });
    });
  });
</script>

</body>
</html>