<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Events</title>
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

 <section class="hero">
    <h1>Events</h1>
    <p>IT events bring together tech enthusiasts and professionals to explore the latest trends in AI, cybersecurity, cloud computing, and more. With expert talks, workshops, and networking, it's the perfect place to learn, innovate, and connect!</p>
  </section>

  <section class="upcoming-events">
    <div class="event-card"></div>
    <div class="event-card"></div>
    <div class="event-card"></div>
  </section>

  <section class="past-events">
    <h2>Past Events</h2>
    <input type="text" placeholder="Search events" />
    <div class="past-event-card"></div>
    <div class="past-event-card"></div>
    <button class="load-more">Load more events</button>
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