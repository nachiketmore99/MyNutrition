<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicare</title>
  <link rel="stylesheet" href="css/style3.css">

</head>
<body>
  <script src="js/bmi.js"></script>
  <div class="topnav">
    <nav>
      <h3>Fitness</h3>
        <ul>
          <li class="active" ><a href="index.html">Home</a></li>
          <li><a>About</a></li>
          <li><a>Contact Us</a></li>
        </ul>  
      </nav>
    </div>

  <form class="box" action="hello.php" method="post">
    <h1>Contact Us</h1>
    <h2>Feel free to drop us a line below!</h2>
    <input name="name" type="text" class="feedback" placeholder="Enter full name" required>
    <input name="email" type="email" class="feedback" placeholder="Enter email" required>
    <textarea name="message" class="textarea" placeholder="Message" row="8" required></textarea>
    <input type="submit" class="submit" value="Send Message">
  </form>

</body>

</html>
