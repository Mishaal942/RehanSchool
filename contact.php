<?php include 'db.php'; ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?,?,?)");
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();
  $success = "Message sent successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact - Rehan School Clone</title>
  <style>
    body{font-family:Arial;background:#f7f9fc;margin:0;padding:0;color:#333;}
    header{background:#0066cc;color:#fff;padding:20px;text-align:center;}
    nav a{color:white;text-decoration:none;margin:0 15px;font-weight:bold;}
    form{background:white;width:60%;margin:30px auto;padding:20px;border-radius:8px;box-shadow:0 0 8px #ccc;}
    input,textarea{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:4px;}
    button{background:#0066cc;color:white;padding:10px 20px;border:none;border-radius:4px;cursor:pointer;}
    button:hover{background:#004a99;}
    .msg{color:green;text-align:center;}
  </style>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="curriculum.php">Curriculum</a>
      <a href="facilitators.php">Facilitators</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <?php if(isset($success)) echo "<p class='msg'>$success</p>"; ?>
  <form method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</body>
</html>
