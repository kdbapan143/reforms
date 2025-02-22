<html>
  <head>
    <title>RESC Website</title>
    <link rel="stylesheet" href="style3.css">
    
  </head>
 
  <body>
    
    <header class="head">
      <div class="head-logo">
        <img src="images/logo.png" alt="Logo">
      </div>

      <!--Registration button-->
      <div class="floating-button" onclick="document.getElementById('registration-form').style.display='block'">
        <img src="images/register.png" alt="" class="register-img">
    </div>
    
    <!-- Registration Form Modal -->
    <div id="registration-form" class="modal">
      <form class="modal-content" action="register.php" method="POST">
          <span onclick="document.getElementById('registration-form').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h2>Student Registration</h2>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="course">Course:</label>
          <input type="text" id="course" name="course" required>
          <button type="submit">Submit</button>
      </form>
    </div>


      <div class="head-title">
        <h1>REFORMS E-LEARNING & SERVICES CENTER</h1>
      </div>
      <nav class="head-menu">
        <ul class="menu">
          <li><a class="menuhome" href="#">Home</a></li>
         <!-- <li><a href="#">Course</a></li> -->
          <li><a class="menucont" href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <section class="course-container">
            <div class="course-box">
              <h2>Junior Course</h2>
              <ul>
                <li>Introduction</li>
                <li>MS-office</li>
                <li>MSW-LOGO</li> 
                <li>Q-BASIC</li>                
            </ul>
            
            </div>
            <div class="course-box">
              <h2>Senior Course</h2>
              <ul>
                <li>Advance Python</li>
                <li>Advance Java</li>
                <li>C/C++</li> 
                <li>DBMS</li>                
            </ul>
           
            </div>
            <div class="course-box">
              <h2>Programming</h2>
              <ul>
                <li>C/C++</li>
                <li>Python</li>
                <li>JAVA</li> 
                <li>C#</li>                
            </ul>
           
            </div>
            <div class="course-box">
              <h2>Networking</h2>
              <ul>
                <li>Network Concepts</li>
                <li>Topologies</li>
                <li>AI technologies</li> 
                <li>Advance technologies</li>                
            </ul>
            </div>
          </section>

          <section class="gallery-container">
            <h2>Our Gallery</h2>
            <div class="gallery-grid">
              <div class="gallery-item">
                <img src="images/frontview.jpeg" alt="Image 1">
                <p><center>RESC frontview</center></p>
              </div>
              <div class="gallery-item">
                <img src="images/theory.jpeg" alt="Image 2">
                <p><center>RESC Theory Room</center></p>
              </div>
              <div class="gallery-item">
                <img src="images/practical.jpeg" alt="Image 3">
                <p><center>RESC Practical Room</center></p>
              </div>
              <div class="gallery-item">
                <img src="images/sideview.jpeg" alt="Image 4">
                <p><center>RESC Side View</center></p>
              </div>
              <div class="gallery-item">
                <img src="images/office.jpg" alt="Image 5">
                <p><center>RESC office</center></p>
              </div>
              <div class="gallery-item">
                <img src="images/theoryroom-upper.jpg" alt="Image 6">
                <p><center>RESC Theory Room</center></p>
              </div>
            </div>
          </section>

          <section class="about-container">
            <h2>About Us</h2>
            <p>Welcome to Reforms E-Learning & Services Centre, where academic excellence meets holistic development. Our institute is dedicated to fostering a dynamic learning environment that empowers students to thrive intellectually, socially, and personally. With a rich history of educational innovation and a commitment to excellence, we strive to nurture the next generation of leaders, thinkers, and global citizens.
              At Reforms E-Learning & Services Centre, we believe in the transformative power of education to shape minds and change lives. Our dedicated faculty members are experts in their fields, passionate about teaching, and committed to inspiring students to reach their full potential. Through innovative teaching methodologies, experiential learning opportunities, and personalized support, we aim to cultivate critical thinking skills, creativity, and a lifelong love for learning. 
              </p>
          </section>
  </main>

 <!-- ChatBot Code --> 
  <div class="chatbot-button">
    <img src="images/chat bot.png" alt="Chat Bot" class="chatbot-btn">
    <!-- <button class="chatbot-btn">Chat with us</button> -->
  </div>

<!-- To create the chatbot dialog box -->
<div class="chatbot-dialog" id="chatbot-dialog">
  <div class="chatbot-header">
    <h2>Chatbot</h2>
    <button class="close-btn" id="close-btn">&times;</button>
  </div>
  <div class="chatbot-body">
    <p>Welcome to RESC!</p>
    <p>Press 1 : For Admission Related Query <br>
       Press 2 : For Course Related Query <br>
       Press 3 : For General Query
    </p>
    <input type="text" id="user-input" placeholder="Type your message...">
    <button class="send-btn" id="send-btn">Send</button>
  </div>
</div>
<script src="script.js"></script>
    <footer class="foot">
        <div class="foot-copyright">
            &copy; 2023 RESC Website
        </div>
        <div class="foot-social">
          <a href="#" class="fa-facebook"></a>
          <a href="#" class="fa-twitter"></a>
          <a href="#" class="fa-instagram"></a>
        </div>
      </footer>

    

  </body>
</html>