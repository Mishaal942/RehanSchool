<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Facilitators - Rehan School Clone</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      color: #333;
    }
    
    header {
      background: linear-gradient(135deg, #0066cc, #004999);
      color: #fff;
      padding: 30px 20px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    
    header h1 {
      font-size: 2.5em;
      margin-bottom: 15px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    
    nav {
      margin-top: 20px;
    }
    
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
      font-size: 1.1em;
      padding: 8px 16px;
      border-radius: 5px;
      transition: all 0.3s ease;
      display: inline-block;
    }
    
    nav a:hover {
      background: rgba(255,255,255,0.2);
      transform: translateY(-2px);
    }
    
    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 50px 20px;
    }
    
    .team {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      justify-content: center;
    }
    
    .member {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      text-align: center;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    
    .member::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, #0066cc, #00cc66);
    }
    
    .member:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }
    
    .member-avatar {
      width: 120px;
      height: 120px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3em;
      color: white;
      font-weight: bold;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .member h3 {
      color: #0066cc;
      font-size: 1.6em;
      margin-bottom: 10px;
      font-weight: 700;
    }
    
    .member .role {
      color: #666;
      font-size: 1.1em;
      margin-bottom: 20px;
      font-style: italic;
      font-weight: 500;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
      flex-wrap: wrap;
    }
    
    .social-links a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      font-size: 0.95em;
    }
    
    .social-links a.facebook {
      background: #1877f2;
      color: white;
    }
    
    .social-links a.linkedin {
      background: #0077b5;
      color: white;
    }
    
    .social-links a.youtube {
      background: #ff0000;
      color: white;
    }
    
    .social-links a:hover {
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    
    .founder-badge {
      display: inline-block;
      background: linear-gradient(135deg, #ffd700, #ffed4e);
      color: #333;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.85em;
      font-weight: bold;
      margin-top: 10px;
      box-shadow: 0 3px 10px rgba(255,215,0,0.4);
    }
    
    .director-badge {
      display: inline-block;
      background: linear-gradient(135deg, #e91e63, #f06292);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.85em;
      font-weight: bold;
      margin-top: 10px;
      box-shadow: 0 3px 10px rgba(233,30,99,0.4);
    }
    
    @media (max-width: 768px) {
      header h1 {
        font-size: 1.8em;
      }
      
      nav a {
        margin: 5px 10px;
        font-size: 1em;
      }
      
      .team {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>🌟 Our Facilitators 🌟</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="curriculum.php">Curriculum</a>
      <a href="facilitators.php">Facilitators</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  
  <div class="container">
    <section class="team">
      <!-- Rehan AllahWala - Founder -->
      <div class="member">
        <div class="member-avatar">R</div>
        <h3>Rehan AllahWala</h3>
        <p class="role">Founder of Rehan School</p>
        <span class="founder-badge">⭐ Founder</span>
        <div class="social-links">
          <a href="https://www.facebook.com/rehan33/" target="_blank" class="facebook">
            📘 Facebook
          </a>
          <a href="https://www.linkedin.com/in/rehanallahwala" target="_blank" class="linkedin">
            💼 LinkedIn
          </a>
          <a href="https://www.youtube.com/@rehanallahwala" target="_blank" class="youtube">
            ▶️ YouTube
          </a>
        </div>
      </div>

      <!-- Momina Allahwala - Director -->
      <div class="member">
        <div class="member-avatar">M</div>
        <h3>Momina Allahwala</h3>
        <p class="role">Director</p>
        <span class="director-badge">💎 Director</span>
        <div class="social-links">
          <a href="https://www.facebook.com/allahwali" target="_blank" class="facebook">
            📘 Facebook
          </a>
          <a href="https://www.linkedin.com/in/allahwali/" target="_blank" class="linkedin">
            💼 LinkedIn
          </a>
          <a href="https://www.youtube.com/@rehanschoolkorangicampus" target="_blank" class="youtube">
            ▶️ YouTube
          </a>
        </div>
      </div>

      <!-- Doulat EducationWala - Principal -->
      <div class="member">
        <div class="member-avatar">D</div>
        <h3>Doulat EducationWala</h3>
        <p class="role">Principal of Rehan School Online Academy</p>
        <div class="social-links">
          <a href="https://www.facebook.com/doulateducationwala/" target="_blank" class="facebook">
            📘 Facebook
          </a>
          <a href="https://www.linkedin.com/in/doulattailorswala/" target="_blank" class="linkedin">
            💼 LinkedIn
          </a>
          <a href="https://www.youtube.com/@DoulatEducationWala" target="_blank" class="youtube">
            ▶️ YouTube
          </a>
        </div>
      </div>

      <!-- Maryam Zulfiqar TrainingWali - Vice Principal -->
      <div class="member">
        <div class="member-avatar">M</div>
        <h3>Maryam Zulfiqar TrainingWali</h3>
        <p class="role">Vice Principal of Rehan School Online Academy</p>
        <div class="social-links">
          <a href="https://www.facebook.com/maryamzulfiqar.trainingwali" target="_blank" class="facebook">
            📘 Facebook
          </a>
          <a href="https://www.linkedin.com/in/maryam-zulfiqar-trainingwali/" target="_blank" class="linkedin">
            💼 LinkedIn
          </a>
          <a href="https://www.youtube.com/channel/UCiuRWaZ0NVQmPk2gXbi-OaQ" target="_blank" class="youtube">
            ▶️ YouTube
          </a>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
