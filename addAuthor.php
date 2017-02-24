<?php
    include 'dbConnection.php';
    
    $First = real_escape_string($_POST ['First']);
    $Last = real_escape_string($_POST['Last']);
    $BirthYear = real_escape_string($_POST['BirthYear']);
    $DeathYear = real_escape_string($_POST['DeathYear']);
    
    if (isset($_POST ['Author_id'])) {
      $Author_id = $_POST ['Author_id'];
      $sql = "UPDATE Author SET First='$First', Last ='$Last', BirthYear='$BirthYear', DeathYear='$DeathYear' 
              WHERE id ='Author_id'";
    }
    else {
    $sql = "INSERT INTO Author (First, Last, BirthYear, DeathYear)
    VALUES ('$First', '$Last', '$BirthYear', '$DeathYear')";
    }
    
    include 'head.php';
?>


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