<html>
<head><title>Welcome to my excellent blog</title></head>
<body>
  <img src="storage/my-excellent-blog.png" alt="blog image">
  <h1>Welcome to my excellent blog https://github.com/sahbi-code</h1>


  <?php
  $dbserver = "192.168.157.130";
  $dbuser = "blogdbuser";
  $dbpassword = "motdepasse123";

  try {
      $conn = new PDO("mysql:host=$dbserver;dbname=mysql", $dbuser, $dbpassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
  } catch(PDOException $e) {
      echo "Database connection failed: " . $e->getMessage();
  }
  ?>
</body>
</html>
