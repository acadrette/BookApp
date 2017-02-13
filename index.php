<?php
include 'dbConnection.php';

  $sql = 'SELECT * FROM  Author join Book on Book.author_id = Author.id';
  $result = $conn->query($sql);
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
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                
        <link rel="stylesheet" type="text/css" href="styles.css">
        
    </head>
    
    <body>
      <?php include 'nav.php'?>
        <div class="container">
          <div class="indexdata">
             <?php
                while ($row = $result->fetch_assoc()){
                  echo $row['First']. " | " . $row['Last'] . " | " . $row['BirthYear'] . " | ". $row['DeathYear'] . " | ".
                  $row['Title'] . " | ". $row['ReleaseDate'] . " | " . $row['Genre'] . " | " . $row['Publisher'] . '<br>';
                }
              ?>
          </div>
        </div>
    </body>
</html> 