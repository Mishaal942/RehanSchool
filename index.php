<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Rehan School - AI-Enabled Education</title>
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
  background: #f7f9fc;
  color: #333;
  overflow-x: hidden;
}

/* Header Styles */
header {
  background: linear-gradient(135deg, #0066cc 0%, #004999 100%);
  color: #fff;
  padding: 25px 20px;
  text-align: center;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
}

header::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
  animation: headerGlow 10s infinite;
}

@keyframes headerGlow {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(-20%, -20%); }
}

header h1 {
  font-size: 2.8em;
  margin-bottom: 15px;
  text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
  position: relative;
  z-index: 1;
}

nav {
  margin-top: 15px;
  position: relative;
  z-index: 1;
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

/* Intro Section */
.intro {
  padding: 60px 40px;
  text-align: center;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  position: relative;
  overflow: hidden;
}

.intro::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
  background-size: cover;
  background-position: bottom;
  opacity: 0.3;
}

.intro h2 {
  font-size: 3em;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  position: relative;
  z-index: 1;
  animation: fadeInDown 1s ease;
}

.intro p {
  font-size: 1.4em;
  max-width: 800px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  animation: fadeInUp 1s ease;
}

@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Features Section */
.features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  padding: 60px 40px;
  background: #eef5ff;
  max-width: 1400px;
  margin: 0 auto;
}

.feature {
  background: white;
  padding: 35px 25px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.feature::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 5px;
  background: linear-gradient(90deg, #0066cc, #00cc66);
  transition: 0.5s;
}

.feature:hover::before {
  left: 0;
}

.feature:hover {
  transform: translateY(-15px);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
}

.feature-icon {
  font-size: 3.5em;
  margin-bottom: 20px;
  display: block;
}

.feature h3 {
  color: #0066cc;
  font-size: 1.6em;
  margin-bottom: 15px;
  font-weight: 700;
}

.feature p {
  color: #666;
  font-size: 1.1em;
  line-height: 1.6;
}

/* Stats Section */
.stats {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  background: linear-gradient(135deg, #0066cc 0%, #004999 100%);
  padding: 60px 40px;
  max-width: 1400px;
  margin: 0 auto;
}

.stat {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(10px);
  color: white;
  padding: 40px 20px;
  border-radius: 15px;
  text-align: center;
  transition: all 0.3s ease;
  border: 2px solid rgba(255, 255, 255, 0.2);
}

.stat:hover {
  transform: scale(1.05);
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.stat h3 {
  font-size: 3.5em;
  margin-bottom: 10px;
  font-weight: bold;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.stat p {
  font-size: 1.3em;
  font-weight: 600;
  letter-spacing: 1px;
}

/* Testimonials Section */
.testimonials {
  padding: 60px 40px;
  text-align: center;
  background: white;
  position: relative;
}

.testimonials h2 {
  font-size: 2.5em;
  color: #0066cc;
  margin-bottom: 40px;
  font-weight: 700;
}

#testimonialContainer {
  max-width: 800px;
  margin: 0 auto;
  min-height: 120px;
  position: relative;
}

#testimonialContainer p {
  font-size: 1.3em;
  font-style: italic;
  color: #555;
  line-height: 1.8;
  padding: 30px;
  background: #f8f9fa;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  position: relative;
}

#testimonialContainer p::before {
  content: '"';
  font-size: 4em;
  color: #0066cc;
  position: absolute;
  top: -10px;
  left: 20px;
  opacity: 0.3;
}

button {
  padding: 12px 35px;
  border: none;
  border-radius: 25px;
  background: linear-gradient(135deg, #0066cc, #00cc66);
  color: white;
  cursor: pointer;
  margin-top: 20px;
  font-size: 1.1em;
  font-weight: bold;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
}

button:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 102, 204, 0.5);
}

/* Articles Section */
.articles {
  padding: 60px 40px;
  text-align: center;
  background: #eef5ff;
}

.articles h2 {
  font-size: 2.5em;
  color: #0066cc;
  margin-bottom: 40px;
  font-weight: 700;
}

.articles ul {
  list-style: none;
  max-width: 800px;
  margin: 0 auto;
}

.articles li {
  background: white;
  padding: 20px 30px;
  margin: 15px 0;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  font-size: 1.2em;
  transition: all 0.3s ease;
  text-align: left;
  position: relative;
  padding-left: 50px;
}

.articles li::before {
  content: '📄';
  position: absolute;
  left: 20px;
  font-size: 1.5em;
}

.articles li:hover {
  transform: translateX(10px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  background: linear-gradient(135deg, #fff 0%, #f0f8ff 100%);
}

/* Footer */
footer {
  background: #222;
  color: white;
  text-align: center;
  padding: 30px 20px;
  margin-top: 0;
  font-size: 1.1em;
}

footer p {
  margin: 0;
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
  
  .intro h2 {
    font-size: 2em;
  }
  
  .intro p {
    font-size: 1.1em;
  }
  
  .features {
    grid-template-columns: 1fr;
    padding: 40px 20px;
  }
  
  .stats {
    grid-template-columns: 1fr;
    padding: 40px 20px;
  }
  
  .stat h3 {
    font-size: 2.5em;
  }
}

/* Loading Animation */
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

.pulse {
  animation: pulse 2s infinite;
}
</style>
</head>
<body>
<header>
<h1>🎓 Rehan School</h1>
<nav>
<a onclick="goTo('index.php')">Home</a>
<a onclick="goTo('curriculum.php')">Curriculum</a>
<a onclick="goTo('facilitators.php')">Facilitators</a>
<a onclick="goTo('contact.php')">Contact</a>
</nav>
</header>

<section class="intro">
<h2>Innovative AI-Enabled Education</h2>
<p>Fostering entrepreneurial and holistic skills in students worldwide through cutting-edge technology and personalized learning experiences.</p>
</section>

<section class="features">
<div class="feature">
  <span class="feature-icon">🤖</span>
  <h3>AI-Enabled Education</h3>
  <p>Smart learning powered by advanced AI tools for personalized education and adaptive learning experiences.</p>
</div>
<div class="feature">
  <span class="feature-icon">🌱</span>
  <h3>Holistic Development</h3>
  <p>Building comprehensive skills beyond academics including emotional intelligence and critical thinking.</p>
</div>
<div class="feature">
  <span class="feature-icon">💼</span>
  <h3>Entrepreneurial Focus</h3>
  <p>Training tomorrow's leaders and innovators with practical business skills and startup mindset.</p>
</div>
<div class="feature">
  <span class="feature-icon">🌍</span>
  <h3>Global Community</h3>
  <p>Connect with students worldwide and learn from diverse perspectives in a collaborative environment.</p>
</div>
<div class="feature">
  <span class="feature-icon">📚</span>
  <h3>Expert Facilitators</h3>
  <p>Learn from industry experts and experienced educators dedicated to your success.</p>
</div>
<div class="feature">
  <span class="feature-icon">🎯</span>
  <h3>Practical Learning</h3>
  <p>Hands-on projects and real-world applications to prepare you for future challenges.</p>
</div>
</section>

<section class="stats">
<div class="stat"><h3 id="studentsCount">0</h3><p>Students</p></div>
<div class="stat"><h3 id="teamCount">0</h3><p>Team Members</p></div>
<div class="stat"><h3 id="campusesCount">0</h3><p>Campuses</p></div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
<h2>💬 What Our Students Say</h2>
<?php
$testimonials = [];
$res = $conn->query("SELECT * FROM testimonials ORDER BY created_at DESC");
while($row = $res->fetch_assoc()){
    $testimonials[] = $row;
}
if(count($testimonials) > 0){
    echo "<div id='testimonialContainer'>";
    foreach($testimonials as $index => $t){
        $display = $index === 0 ? "" : "style='display:none'";
        echo "<p $display>{$t['feedback']} <br><strong>– {$t['name']}</strong></p>";
    }
    echo "</div>";
    echo "<button onclick='nextTestimonial()'>Next Testimonial ➡️</button>";
} else {
    echo "<p>No testimonials available yet.</p>";
}
?>
</section>

<section class="articles">
<h2>📰 Latest Articles</h2>
<ul>
<?php
$res = $conn->query("SELECT * FROM articles ORDER BY created_at DESC LIMIT 3");
if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){
        echo "<li>{$row['title']}</li>";
    }
} else {
    echo "<li>No articles available yet.</li>";
}
?>
</ul>
</section>

<footer>
<p>&copy; 2025 Rehan School. All rights reserved. | Empowering Future Leaders 🚀</p>
</footer>

<script>
// JS Navigation
function goTo(page){window.location.href = page;}

// Animate stats with easing
function animateStats(id, target){
    let c = 0;
    let increment = Math.ceil(target / 50);
    let i = setInterval(() => {
        if(c >= target){
            clearInterval(i);
            document.getElementById(id).innerText = target;
        } else {
            c += increment;
            if(c > target) c = target;
            document.getElementById(id).innerText = c;
        }
    }, 30);
}

window.onload = function(){
    animateStats("studentsCount", 500);
    animateStats("teamCount", 30);
    animateStats("campusesCount", 10);
}

// Testimonials slider
let idx = 0;
function nextTestimonial(){
    let t = document.querySelectorAll("#testimonialContainer p");
    if(t.length > 0){
        t[idx].style.display = "none";
        idx = (idx + 1) % t.length;
        t[idx].style.display = "block";
    }
}

// Auto-rotate testimonials every 5 seconds
setInterval(() => {
    let t = document.querySelectorAll("#testimonialContainer p");
    if(t.length > 1){
        nextTestimonial();
    }
}, 5000);
</script>

</body>
</html>
