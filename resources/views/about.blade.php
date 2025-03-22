<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#contactForm').submit(function (event) {
        event.preventDefault();
        alert('Thank you for contacting us! We will get back to you soon.');
        $(this).trigger('reset');
      });
    });
  </script>
  <style>
    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 40px 0;
    }
    video {
      width: 80%;
      max-width: 900px;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    section {
      padding: 20px;
      margin: 20px auto;
      max-width: 900px;
      background-color: #f9f9f9;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    h2 {
      color: #007bff;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>
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

  <section id="video-section">
    <h2>Discover Our Program</h2>
    <div class="video-container">
      <video controls>
        <source src="{{ asset('video/bsit.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <section id="goal">
    <h1>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY PROGRAM</h1><br><br>
    <h2>GOAL</h2><br>
    <p>The Information Technology program commits to produce competitive graduates in the field of Information Technology</p>
  </section>

  <section id="objectives">
    <h2>OBJECTIVES</h2><br>
    <p>1. To provide students with technical and managerial skills in the field of Information Technology;<br><br>
2. To train students to be well-versed on application development, installation, operation, maintenance and administration;<br><br>
3. To expose students in advance information technology in diverse learning environments;<br><br>
4. To develop students' skills in areas of research, development and extension; and<br><br>
5. To imbibe in the students moral, ethical and social values needed in the field of information technology.<br><br>
</p>
  </section>

  <section id="outcomes">
    <h2>GRADUATE OUTCOMES</h2><br>
    <table>
      <thead>
        <tr>
          <th>Graduate Outcomes Code</th>
          <th>Graduate Outcomes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>IT01</td>
          <td>Apply knowledge of computing, science, and mathematics appropriate to the discipline.</td>
        </tr>
        <tr>
          <td>IT02</td>
          <td>Understand best practices and standards and their applications.</td>
        </tr>
        <tr>
          <td>IT03</td>
          <td>Analyze complex problems, and identify and define the computing requirements appropriate to its solution.</td>
        </tr>
        <tr>
          <td>IT04</td>
          <td>Identify and analyze user needs and consider them in the selection, creation, evaluation and administration of computer-based systems.</td>
        </tr>
        <tr>
          <td>IT05</td>
          <td>Design, implement, and evaluate computer-based systems, processes, components, or programs to meet desired needs and requirements under various constraints.</td>
        </tr>
        <tr>
          <td>IT06</td>
          <td>Integrate IT-based solutions into the user environment effectively.</td>
        </tr>
        <tr>
          <td>IT07</td>
          <td>Apply knowledge with current techniques, skills, tools and practices necessary for the IT profession.</td>
        </tr>
        <tr>
          <td>IT08</td>
          <td>Function effectively as a member or leader of a development team recognizing the different roles within a team to accomplish a common goal.</td>
        </tr>
        <tr>
          <td>IT09</td>
          <td>Assist in the creation of an effective IT project plan.</td>
        </tr>
        <tr>
          <td>IT10</td>
          <td>Communicate effectively with the computing community and with society at large about complex computing activities through logical writing, presentations, and clear instructions.</td>
        </tr>
        <tr>
          <td>IT11</td>
          <td>Analyze the local and global impact of computing information technology on individuals, organizations, and society.</td>
        </tr>
      </tbody>
    </table>
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