<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
       <div class="container">
          <h1>PHP Quizzer</h1>
       </div>
    </header>
    <main>
      <div class="container">
        <h2>You're Done!</h2>
        <p>Congrats! You have completed the test</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?> </p>
        <a href="questions.php?n=1" class="start">Take Again</a>
      </div>
    </main>
    <footer>
       <div class="container">
          Copyright &copy; 2018, PHP Quizzer
       </div>
    </footer>
</body>
</html>