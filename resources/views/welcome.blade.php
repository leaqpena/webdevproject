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
  <h1>Welcome to BSIT Society</h1><br>
  <p>The BSIT Society is a dynamic community dedicated to empowering IT students through knowledge-sharing, skill-building, and professional growth.</p>
  <button>Join Us</button>
</section>

<section class="featured-news">
  <h2>Featured News</h2>
  <div class="news-container">
    <div class="news-card">
      <img src="{{ asset('img/img3.jpg')}}" alt="News 1" />
      <h3>Cleaning Together for a Better Environment!</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">On March 3, 2023, at the BS Fisheries Fishpond, BITS actively participated in the Care and Share initiative. Students, alongside the BS in Fisheries program, worked hand in hand to clean the fishpond, remove debris, and properly segregate waste. Their teamwork and dedication contributed to a cleaner and healthier environment, reflecting their commitment to sustainability and community service.<br><br>
Photos | James Uno Simpao | The Sunset Creatives</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/img2.jpg')}}" alt="News 2" />
      <h3>Love was in the air!</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">Last February 14, 2025, The Bontoc Information Technology Society spread joy and happiness on Valentine's Day with BITS 'n' Love! The event was held at the Multi-Purpose Covered Court, SLSU - Bontoc Campus.
The magic of the season was felt as voices filled the air in the singing competition and emotions came to life in the contemporary dance contest. From heartfelt melodies to expressive movements, love was celebrated in all its forms, including friendship and unity.<br>
More than just a competition, this event brought people together, created beautiful memories, and shared moments of laughter, joy, and appreciation. It truly made this Valentine's celebration one to remember!<br><br>
#BITSnLove #BITS #HappyValentinesDay</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/img4.jpg')}}" alt="News 3" />
      <h3>Shine Time Capsule!</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">On March 3, 2025, Bontoc Information Technology Society (BITS)  joined the time capsule burial alongside the faculty, staff, and other student organizations. The event was led by the SAS Head, Dr. Peter June D. Dadios, who delivered a brief message before placing some of his personal items into the capsule. Dr. Gladys L. Pascual, Campus Director, Jimmy E. Salamida, Faculty Dean,  and other faculty members also contributed meaningful items. Among the capsule’s contents were business cards, old coins, vouchers and group photos, all meant to serve as a glimpse into the past. The time capsule was sealed with the collective hope of revisiting these memories when it is unearthed 10 years from now.<br><br>
Photos | James Uno Simpao | The Sunset Creatives
</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/img5.jpg')}}" alt="News 4" />
      <h3>𝐒𝐋𝐒𝐔 𝐇𝐎𝐔𝐑 | Mighty Kingfishers, get ready to engage in a meaningful discussion this 𝐌𝐚𝐫𝐜𝐡 𝟏𝟗, 𝟐𝟎𝟐𝟓, 𝐚𝐭 𝟏:𝟎𝟎 𝐏𝐌!</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">Join Assistant Prof II Noel E. Celeste, Program Chair of BS Agriculture, as he shares valuable insights on "𝐀𝐆𝐑𝐈 𝐂𝐎𝐍𝐍𝐄𝐂𝐓: 𝐆𝐫𝐨𝐰𝐢𝐧𝐠 𝐅𝐚𝐫𝐦𝐬, 𝐆𝐫𝐨𝐰𝐢𝐧𝐠 𝐅𝐮𝐭𝐮𝐫𝐞𝐬."<br>
Also, tune in as Associate Prof V, Program Chair of BS Information Technology, talks about "𝐓𝐀𝐋𝐊 𝐈.𝐓. 𝐎𝐔𝐓."<br>
Catch it LIVE on Radyo Pilipinas Sogod (104.7 MHz) and on their official Facebook Page Radyo Pilipinas Sogod.<br><br> #WeAreSLSyoU.</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/img6.jpg')}}" alt="News 5" />
      <h3>𝐁𝐈𝐓𝐒 𝐣𝐨𝐢𝐧𝐬 𝐀𝐜𝐚𝐝𝐞𝐦𝐢𝐜-𝐅𝐞𝐬𝐭 𝐒𝐲𝐦𝐩𝐨𝐬𝐢𝐮𝐦: 𝐂𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐢𝐧𝐠 𝐒𝐋𝐒𝐔'𝐬 𝟐𝟏𝐬𝐭 𝐀𝐧𝐧𝐢𝐯𝐞𝐫𝐬𝐚𝐫𝐲</h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">In celebration of the 21st Anniversary of Southern Leyte State University (SLSU), Bontoc Information Technology Society joins the simultaneous Academic-Fest Symposium, held at Multi-Purpose Covered Court, SLSU - Bontoc Campus on March 3, 2025. The event brought together 𝗳𝗼𝗿𝗺𝗲𝗿 𝗕𝗜𝗧𝗦 𝗼𝗳𝗳𝗶𝗰𝗲𝗿𝘀 𝗮𝗻𝗱 𝗹𝗲𝗮𝗱𝗲𝗿𝘀, to share their experiences, insights, and words of encouragement with students.<br><br>
The resource speakers shared valuable insights on thriving in IT and student leadership. Ms. Jona Mae C. Tahup, stressed the importance of responsibility and handwork. Ms. Hazel Jay M. Meode encouraged students to stay focused and find the right circle of friends that can help you overcome all the challenges. Ms. Girlie F. Reviso highlighted perseverance and commitment as keys to success, while Ma'am Cyrelle T. Chico inspired students to embrace growth, leadership, and collaboration. Together, they wished the students success and resilience in their academic and organizational journey.<br><br>
To conclude the program, Dr. Gladys L.  Pascual, Campus Director, delivered an inspiring and challenging message, motivating students to strive for excellence, always seize the opportunity and lastly use the education to create meaningful change.
The symposium not only honored the university’s milestone but also empowered students to continue the legacy of leadership, unity, and success within the BITS community and beyond.<br><br>
#BITSSymposium #LUPADSLSyoU21<br><br>
✏️ Jomaico Abusca
</p>
    </div>
    <div class="news-card">
      <img src="{{ asset('img/img7.jpg')}}" alt="News 6" />
      <h3>Join us for a heartwarming celebration this Valentine’s Day! 💖 </h3>
      <button class="see-more-btn">See More</button>
      <p class="news-content">The BITS n' Love Program by the Bontoc Information Technology Society is here, and we’ve got a night full of talent, love, and fun! 🎶✨<br><br>
Come witness amazing vocal solo performances and an exciting contemporary contest that will surely steal your heart! 💫
Let’s make this Valentine’s Day unforgettable! 💌<br><br>
#BITSnLove</p>
    </div>
  </div>
</section>

<footer>
  <p>&copy; BSIT Society. All rights reserved.</p>
</footer>
</body>
</html>
