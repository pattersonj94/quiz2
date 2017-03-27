<!DOCTYPE HTML>
<html>
  <head>
      <title>Quiz 2</title>
      <meta name = "author" content="Jeremy Patterson">

      <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <h1>Please take your time to submit this form to enter in a chance to win a new car!</h1><br>
    <?php
      if(!isset($_COOKIE["first"])) {
    echo
    '<form action="register.php" method="post">
      First Name: <input type="text" name="first"><br>
      Last Name: <input type="text" name="last"><br>
      E-mail: <input type="text" name="email"><br>
      <input type="submit">
    </form>';

      } else
      {
         echo "<p>Hi, " . $_COOKIE["first"] . ", you recently signed up with the email address: " . $_COOKIE["email"] . ", thank you!</p>";
      }
    ?>

  </body>
</html>
