<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Curriculum - Rehan School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  background-attachment: fixed;
  color: #333;
  overflow-x: hidden;
}

/* Header Styles */
header {
  background: linear-gradient(135deg, #0066cc 0%, #004999 100%);
  color: #fff;
  padding: 25px 20px;
  text-align: center;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  position: sticky;
  top: 0;
  z-index: 1000;
}

header h1 {
  font-size: 2.8em;
  margin-bottom: 15px;
  text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
  animation: fadeInDown 1s ease;
}

nav {
  margin-top: 15px;
}

nav a {
  color: white;
  text-decoration: none;
  margin: 0 20px;
  font-weight: bold;
  font-size: 1.1em;
  cursor: pointer;
  padding: 10px 20px;
  border-radius: 25px;
  transition: all 0.3s ease;
  display: inline-block;
}

nav a:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

/* Container */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* Hero Section */
.hero-section {
  background: white;
  padding: 50px 40px;
  margin: 30px auto;
  border-radius: 20px;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
  text-align: center;
  position: relative;
  overflow: hidden;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(90deg, #0066cc, #00cc66, #cc0066, #0066cc);
  background-size: 200% 100%;
  animation: gradientFlow 3s linear infinite;
}

@keyframes gradientFlow {
  0% { background-position: 0% 0%; }
  100% { background-position: 200% 0%; }
}

.hero-section h2 {
  color: #0066cc;
  font-size: 2.5em;
  margin-bottom: 25px;
  font-weight: 700;
}

.hero-section p {
  font-size: 1.2em;
  line-height: 1.8;
  color: #555;
  margin-bottom: 20px;
  text-align: left;
}

.core-values {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  margin-top: 35px;
}

.value-card {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 30px 25px;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
  text-align: center;
}

.value-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.value-card h3 {
  font-size: 1.5em;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.value-card p {
  font-size: 1.1em;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.95);
  text-align: center;
}

/* Curriculum Section */
section {
  background: white;
  padding: 50px 40px;
  margin: 30px auto;
  border-radius: 20px;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
}

section h2 {
  color: #0066cc;
  font-size: 2.5em;
  margin-bottom: 30px;
  text-align: center;
  font-weight: 700;
  position: relative;
  padding-bottom: 15px;
}

section h2::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, #0066cc, #00cc66);
  border-radius: 2px;
}

/* Level Cards */
.level {
  background: linear-gradient(135deg, #f0f8ff 0%, #e6f2ff 100%);
  padding: 35px 30px;
  margin: 25px 0;
  border-left: 6px solid #0066cc;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.level::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
  transition: 0.5s;
}

.level:hover::before {
  left: 100%;
}

.level:hover {
  transform: translateX(10px);
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
  border-left-width: 8px;
}

.level-header {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 20px;
}

.level-number {
  background: linear-gradient(135deg, #0066cc, #00cc66);
  color: white;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8em;
  font-weight: bold;
  box-shadow: 0 5px 15px rgba(0, 102, 204, 0.4);
  flex-shrink: 0;
}

.level h3 {
  color: #004a99;
  font-size: 1.8em;
  margin: 0;
  font-weight: 700;
}

.level p {
  font-size: 1.15em;
  line-height: 1.8;
  color: #555;
  margin-bottom: 20px;
}

.level ul {
  margin-left: 0;
  padding-left: 0;
  list-style: none;
}

.level li {
  font-size: 1.1em;
  padding: 12px 20px;
  margin: 10px 0;
  background: white;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  position: relative;
  padding-left: 50px;
}

.level li::before {
  content: '✓';
  position: absolute;
  left: 18px;
  top: 50%;
  transform: translateY(-50%);
  background: linear-gradient(135deg, #0066cc, #00cc66);
  color: white;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 0.9em;
}

.level li:hover {
  transform: translateX(8px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
  background: linear-gradient(135deg, #fff 0%, #f0f8ff 100%);
}

/* Highlight Boxes */
.highlight-box {
  background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
  padding: 25px 30px;
  border-radius: 15px;
  margin: 20px 0;
  box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
  border-left: 5px solid #ffa500;
}

.highlight-box strong {
  color: #cc6600;
  font-size: 1.2em;
  display: block;
  margin-bottom: 10px;
}

/* Skills Grid */
.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.skill-tag {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  padding: 15px 20px;
  border-radius: 25px;
  text-align: center;
  font-weight: 600;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
  transition: all 0.3s ease;
}

.skill-tag:hover {
  transform: translateY(-5px) scale(1.05);
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
}

/* Animations */
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.fade-in {
  animation: fadeInUp 0.8s ease;
}

/* Responsive Design */
@media(max-width: 768px) {
  header h1 {
    font-size: 2em;
  }
  
  nav a {
    margin: 5px 10px;
    font-size: 1em;
  }
  
  .hero-section {
    padding: 35px 25px;
  }
  
  .hero-section h2 {
    font-size: 1.8em;
  }
  
  section {
    padding: 35px 25px;
  }
  
  section h2 {
    font-size: 1.8em;
  }
  
  .level {
    padding: 25px 20px;
  }
  
  .level-header {
    flex-direction: column;
    text-align: center;
  }
  
  .level h3 {
    font-size: 1.4em;
  }
  
  .core-values {
    grid-template-columns: 1fr;
  }
}
</style>
</head>
<body>
<header>
<h1>📚 Our Curriculum</h1>
<nav>
<a onclick="goTo('index.php')">Home</a>
<a onclick="goTo('curriculum.php')">Curriculum</a>
<a onclick="goTo('facilitators.php')">Facilitators</a>
<a onclick="goTo('contact.php')">Contact</a>
</nav>
</header>

<div class="container">
<div class="hero-section fade-in">
<h2>🌟 Our Revolutionary Curriculum Plan</h2>
<p>We are educating the students based on real-life experiences of travel, business, and networking. This curriculum keeps evolving with new technologies that arrive every year but remains focused on becoming a global citizen of the world, being able to see ourselves in the mirror as one in 8 billion unique creations, and seeing everyone else as equal to ourselves.</p>

<div class="core-values">
<div class="value-card">
<h3>🎯 Core Value</h3>
<p>Focus on the life mission of making a positive impact on 10 million human beings.</p>
</div>
<div class="value-card">
<h3>🔑 Key Learning</h3>
<p>Communication, collaboration, honesty, modesty, meditation, languages, networks, friendship, problem-solving, how to learn, and technology training.</p>
</div>
</div>
</div>

<section class="fade-in">
<h2>🎓 Curriculum Levels</h2>

<div class="level">
<div class="level-header">
<div class="level-number">1</div>
<h3>5th Grade – Level One</h3>
</div>
<p>What normal schools call 5th grade is our level one. In this year, we start teaching technologies to the student including:</p>
<ul>
<li>Graphic Design</li>
<li>ChatGPT & AI Tools</li>
<li>Interview Taking and Giving</li>
<li>Making Videos & Content Creation</li>
<li>Learning to Learn via AI</li>
<li>Talking with Annie</li>
<li>Yoga & Physical Wellness</li>
<li>Meditation & Mindfulness</li>
<li>Ethics & Values</li>
<li>TEDx Talks Preparation</li>
</ul>
</div>

<div class="level">
<div class="level-header">
<div class="level-number">2</div>
<h3>6th Grade – Level Two</h3>
</div>
<p>We continue to teach items from level one, give a life mission to the child and make it their "Wala."</p>
<div class="highlight-box">
<strong>🎤 Special Focus:</strong> TEDx talks are about the Wala
</div>
<ul>
<li>Teach how to network and interview the TEDx speaker</li>
<li>Learn to earn $100 a month via freelancing</li>
<li>Personal Branding & Online Presence</li>
<li>Basic Entrepreneurship Skills</li>
<li>Time Management & Productivity</li>
</ul>
</div>

<div class="level">
<div class="level-header">
<div class="level-number">3</div>
<h3>7th Grade – Level Three</h3>
</div>
<p>All the items in level two, and the amount they have to learn to earn is $300 a month.</p>
<div class="highlight-box">
<strong>💰 Earning Goal:</strong> $300/month through freelancing
</div>
<ul>
<li>Advanced Freelancing Strategies</li>
<li>Client Management & Communication</li>
<li>Portfolio Development</li>
<li>Digital Marketing Basics</li>
<li>Financial Literacy & Budgeting</li>
</ul>
</div>

<div class="level">
<div class="level-header">
<div class="level-number">4</div>
<h3>8th Grade – Level Four</h3>
</div>
<p>All items in level three, and start a startup related to their Wala and grow it for the next four years to sell it for a million dollars by 12th grade.</p>
<div class="highlight-box">
<strong>🚀 Startup Launch:</strong> Begin your entrepreneurial journey!
</div>
<ul>
<li>Startup Ideation & Validation</li>
<li>Business Plan Creation</li>
<li>MVP Development</li>
<li>Market Research & Analysis</li>
<li>Team Building & Leadership</li>
<li>Pitch Deck Preparation</li>
</ul>
</div>

<div class="level">
<div class="level-header">
<div class="level-number">5</div>
<h3>12th Grade – Level Five</h3>
</div>
<p>Continue startup growth and personal development. Prepare for higher education and global opportunities.</p>
<ul>
<li>Startup Scaling & Growth Strategies</li>
<li>Advanced Business Analytics</li>
<li>Investment & Funding Opportunities</li>
<li>Global Market Expansion</li>
<li>College Application Preparation</li>
<li>Professional Networking</li>
<li>Exit Strategy Planning</li>
</ul>
</div>

<div class="level">
<div class="level-header">
<div class="level-number">6</div>
<h3>13th Grade – Level Six</h3>
</div>
<p>The student will be prepared to take the GED (General Educational Development) exam, and Matric (if needed), and pass with flying colors.</p>
<div class="highlight-box">
<strong>🎓 Certification:</strong> GED & Matric Preparation
</div>
<ul>
<li>GED Exam Preparation</li>
<li>Matric Exam Readiness</li>
<li>College Entrance Exams</li>
<li>Career Path Planning</li>
<li>Scholarship Applications</li>
<li>Real-world Project Portfolio</li>
<li>Industry Certifications</li>
</ul>
</div>
</section>

<section class="fade-in">
<h2>💼 Key Skills Developed</h2>
<div class="skills-grid">
<div class="skill-tag">🤖 AI & Technology</div>
<div class="skill-tag">💬 Communication</div>
<div class="skill-tag">🤝 Collaboration</div>
<div class="skill-tag">🎨 Creativity</div>
<div class="skill-tag">💡 Problem Solving</div>
<div class="skill-tag">🌍 Global Citizenship</div>
<div class="skill-tag">💼 Entrepreneurship</div>
<div class="skill-tag">🧘 Mindfulness</div>
<div class="skill-tag">📈 Business Skills</div>
<div class="skill-tag">🎯 Goal Setting</div>
<div class="skill-tag">💰 Financial Literacy</div>
<div class="skill-tag">🚀 Leadership</div>
</div>
</section>
</div>

<script>
// JS Navigation
function goTo(page){window.location.href = page;}

// Intersection Observer for fade-in animations
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.level').forEach(level => {
    level.style.opacity = '0';
    level.style.transform = 'translateY(30px)';
    level.style.transition = 'all 0.6s ease';
    observer.observe(level);
  });
});
</script>
</body>
</html>
