<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nav</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Registreren</a></li>
        <li><a href="login.php">Inloggen</a></li>
        <li><a href="logout.php">Uitloggen</a></li>
        
        <?php
          if (isset($_SESSION["username"])) {
            echo '<li>Ingelogd als ' . $_SESSION['username'] . '</li>
            <li><a href="logout.php">Uitloggen</a></li>';
          } else {
            echo '<li><a href="register.php">Registreren</a></li>
            <li><a href="login.php">Inloggen</a></li>';
          }
        ?>
    </ul>
  </nav>
</body>
</html>