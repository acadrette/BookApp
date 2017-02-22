<?php
    include 'dbConnection.php';
    
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $BirthYear = $_POST['BirthYear'];
    $DeathYear = $_POST['DeathYear'];
    $sql = "INSERT INTO Author (First, Last, BirthYear, DeathYear)
    VALUES ('$First', '$Last', '$BirthYear', '$DeathYear')";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> </title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link href="styles.css" rel="stylesheet">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                
    </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      First: <?php echo $First ?><br>
      Last: <?php echo $Last ?><br>
      Birth Year: <?php echo $BirthYear ?><br>
      Death Year: <?php echo $DeathYear ?><br>

    </div>
  </body>
</html>