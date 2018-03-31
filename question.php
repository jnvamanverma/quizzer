<?php session_start(); ?>
<?php include 'database.php'; ?> 
<?php
  //Set question number
  $number = (int) $_GET['n'];
 
  /*
   *   Get total questions
   */
   $query = "SELECT * FROM questions";
  //Get $results
   $results = $mysqli->query($query) or die($mysqli->error);
   $total = $results->num_rows;
  
  /*
  * Get Question
  */
  $query = "SELECT * FROM questions
     WHERE question_number = $number";

     //Get result
     $result = $mysqli->query($query) or die($mysqli->error);

     $question = $result->fetch_assoc();

  /*
  * Get Choices
  */
  $query = "SELECT * FROM choices
  WHERE question_number = $number";

  //Get results
  $choices = $mysqli->query($query) or die($mysqli->error);
?>
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
         <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
         <p class="question">
           <?php echo $question['text']; ?>
         </p>
         <form action="process.php" method="post">
           <ul class="choices">
             <?php while($row = $choices->fetch_assoc()): ?>
              <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
             <?php endwhile; ?>
           </ul>
           <input type="submit" value="Submit">
           <input type="hidden" name="number" value="<?php echo $number; ?>">
         </form>
      </div>
    </main>
    <footer>
       <div class="container">
          Copyright &copy; 2018, PHP Quizzer
       </div>
    </footer>
</body>
</html>