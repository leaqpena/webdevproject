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
    .news-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .news-card {
      width: 30%;
      margin-bottom: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .news-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .news-card h3 {
      margin: 15px;
      font-size: 1.5rem;
    }
    .news-card button {
      margin: 15px;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .news-card button:hover {
      background-color: #0056b3;
    }
    .news-content {
      margin: 15px;
      display: none;
      color: #333;
    }
  </style>
</head>
<body>
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
    </ul>
  </nav>
  <div class="auth-buttons">
    <button>Signup</button>
    <button>Signin</button>
  </div>
</header>

<section class="welcome">
  <h1>Meet Our Esteemed Faculty and Staff</h1><br>
  <p>Our dedicated faculty and staff are the backbone of the BSIT Society, guiding and shaping future IT professionals. Get to know the passionate educators and mentors who are committed to excellence in teaching, research, and innovation.</p>
</section>

<section class="featured-news">
 <center> <h2>Faculty and Staff</h2></center>
  <div class="news-container">
  <div class="news-card">
      <img src="{{ asset('img/s.png')}}" alt="News 5" style="height: 300px; width: 300px; object-fit: cover;" />
      <h3>Sir Sherwin G. Caday</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content"> BS InfoTech Program Chair</p>

    </div>
    <div class="news-card">
      <img src="{{ asset('img/jr.jpeg')}}" alt="News 3" style="height: 300px; width: 300px; object-fit: cover;" />
      <h3>Sir Junnie Ryh M. Sumacot </h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content"> CISA Head and IT Instructor</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/r.jpg')}}" alt="News 4" style="height: 300px; width: 300px; object-fit: cover;" />
      <h3>Sir Rexal S. Toledo </h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content"> IT Instructor</p>
    </div>
     <div class="news-card">
      <img src="{{ asset('img/ja.jpeg')}}" alt="News 2" style="height: 300px; width: 300px; object-fit: cover;" />
      <h3>Sir Julius Amfil E. Dublado</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">Office Incharge of Research and IT Instructor</p>
    </div>
    
  <div class="news-card">
  <img src="{{ asset('img/ch.png') }}" alt="News 1" style="height: 300px; width: 300px; object-fit: cover;" />
 <h3>Ma'am Christine A. Makilang </h3>
  <button class="see-more-btn">See More</button>
  <p class="news-content">Hi! I'm Ma'am Christine a visiting IT Instructor from SLSU Bontoc Southern Leyte. </p>
</div>   
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