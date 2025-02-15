<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank & Donation</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
    }

    .header {
      background: linear-gradient(135deg,rgb(190, 206, 200), #dcedc1);
      padding: 15px 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header a {
      color: #333;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      padding: 10px 15px;
      border-radius: 25px;
      transition: all 0.3s ease;
    }

    .header a.logo {
      font-size: 24px;
      font-weight: 700;
      color: #333;
      letter-spacing: 1px;
      background: rgba(216, 9, 9, 0.3);
      padding: 10px 20px;
      border-radius: 25px;
    }

    .header a:hover {
      background: rgba(255, 255, 255, 0.5);
      color: #555;
      transform: translateY(-2px);
    }

    .header a.act {
      background: rgba(212, 15, 15, 0.5);
      color: #555;
      border-radius: 25px;
    }

    .header-right {
      display: flex;
      gap: 10px;
    }

    @media screen and (max-width: 768px) {
      .header {
        flex-direction: column;
        align-items: flex-start;
      }

      .header-right {
        margin-top: 10px;
        flex-direction: column;
        width: 100%;
      }

      .header-right a {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo">Blood Bank & Donation</a>
    <div class="header-right">
      <a href="about_us.php" <?php if($active=='about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php" <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php" <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>
</body>
</html>