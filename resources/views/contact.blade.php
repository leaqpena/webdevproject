<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
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

<header>
    <div class="logo">
        <img src="{{ asset('img/img1.jpg')}}" alt="logo" style="display: flex; justify-content: flex-start; margin:0 auto; max-width:100px;" />
    </div>
    <nav>
       <style>
  ul li a:hover {
    color: #007bff; 
  }
</style>

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



  <section class="welcome">
    <h1>Welcome to BSIT Society</h1>
    <p>The BSIT Society is a dynamic community dedicated to empowering IT students
 through knowledge-sharing, skill-building, and professional growth. Whether you're passionate 
about programming, cybersecurity, web development, or emerging technologies, our society
 provides opportunities for collaboration, innovation, and networking. Join us as we explore 
the ever-evolving world of IT, engage in exciting events, and build a future driven
 by technology and creativity!</p>
    <button>Join Us</button>
  </section>

  <section class="featured-news">
    <h2>Featured News</h2>
    <div class="news-container">
      <div class="news-card">
        <img src="{{ asset('img/img3.jpg')}}" alt="News 1" />
        <h3>BITS Organization participates in Care and Share</h3>
        <button class="see-more-btn">See More</button>
        <p class="news-content" style="display:none;">On March 3, 2023, at the BS Fisheries Fishpond, BITS actively participated in the Care and Share initiative. Students, alongside the BS in Fisheries program, worked hand in hand to clean the fishpond, remove debris, and properly segregate waste. Their teamwork and dedication contributed to a cleaner and healthier environment, reflecting their commitment to sustainability and community service.<br><br>
Photos | James Uno Simpao | The Sunset Creatives
</p>
      </div>
      <div class="news-card">
        <img src="{{ asset('img/img2.jpg')}}" alt="News 2" />
        <h3>BITS 'n Love: A Valentine's Day Celebration</h3>
        <button class="see-more-btn">See More</button>
        <p class="news-content" style="display:none;">Last February 14, 2025, The Bontoc Information Technology Society spread joy and happiness on Valentine's Day with BITS 'n' Love! The event was held at the Multi-Purpose Covered Court, SLSU - Bontoc Campus.
The magic of the season was felt as voices filled the air in the singing competition and emotions came to life in the contemporary dance contest. From heartfelt melodies to expressive movements, love was celebrated in all its forms, including friendship and unity.<br><br>
More than just a competition, this event brought people together, created beautiful memories, and shared moments of laughter, joy, and appreciation. It truly made this Valentine's celebration one to remember!<br><br>
#BITSnLove #BITS #HappyValentinesDay
</p>
      </div>
      <div class="news-card">
        <img src="{{ asset('img/img4.jpg')}}" alt="News 3" />
        <h3>BITS joins in Time Capsule Activity</h3>
        <button class="see-more-btn">See More</button>
        <p class="news-content" style="display:none;">On March 3, 2025, Bontoc Information Technology Society (BITS)  joined the time capsule burial alongside the faculty, staff, and other student organizations. The event was led by the SAS Head, Dr. Peter June D. Dadios, who delivered a brief message before placing some of his personal items into the capsule. Dr. Gladys L. Pascual, Campus Director, Jimmy E. Salamida, Faculty Dean,  and other faculty members also contributed meaningful items. Among the capsule’s contents were business cards, old coins, vouchers and group photos, all meant to serve as a glimpse into the past. The time capsule was sealed with the collective hope of revisiting these memories when it is unearthed 10 years from now.<br><br>
Photos | James Uno Simpao | The Sunset Creatives</p>
      </div>
    </div>
  </section>

  <section class="upcoming-events">
    <h2>Upcoming Events</h2>
    <div class="events-container">
      <div class="event-placeholder"></div>
      <div class="event-placeholder"></div>
      <div class="event-placeholder"></div>
    </div>
  </section>

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
</body>
</html>