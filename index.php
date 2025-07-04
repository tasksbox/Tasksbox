<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to TaskBox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .hero {
      padding: 40px 20px;
      text-align: center;
      background: linear-gradient(to bottom right, #00b4cc, #008d92);
      color: white;
      min-height: 100vh;
    }
    .hero h1 {
      font-size: 40px;
      margin-bottom: 10px;
    }
    .hero p {
      font-size: 18px;
      margin-bottom: 25px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    .btn-box {
      margin-top: 20px;
    }
    .btn-box a {
      text-decoration: none;
      padding: 12px 24px;
      margin: 10px;
      background-color: white;
      color: #008d92;
      font-weight: bold;
      border-radius: 8px;
      display: inline-block;
      transition: 0.3s ease;
    }
    .btn-box a:hover {
      background-color: #005d61;
      color: white;
    }

    .note {
      margin-top: 40px;
      font-size: 14px;
      background-color: white;
      color: #333;
      padding: 15px;
      border-radius: 10px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>
<body>
  <div class="hero">
    <h1>📲 TaskBox</h1>
    <p>Earn rewards by completing simple tasks! Submit screenshots, invite friends, and withdraw your coins easily.</p>
    
    <div class="btn-box">
      <a href="login.php">🔐 Login</a>
      <a href="register.php">📝 Register</a>
    </div>

    <div class="note">
      💡 <strong>How It Works:</strong><br>
      Complete tasks listed by the admin, upload proof, and earn ₹7 per task upon approval!<br>
      Refer your friends and earn ₹1 when they complete a task!
    </div>
  </div>
</body>
</html>