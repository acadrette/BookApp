<?php

include 'dbConnection.php';
    
$Author_id = $_POST['Author_id'];

$Title = $conn->real_escape_string($_POST ['Title']);
$ReleaseDate = $conn->real_escape_string($_POST['ReleaseDate']);
$Genre = $conn->real_escape_string ($_POST['Genre']);
$Publisher =$conn->real_escape_string ($_POST['Publisher']);

if (isset($_POST['Book_id'])) {
    $Book_id = $_POST['Book_id'];
    $sql =  "UPDATE Book SET Title='$Title', ReleaseDate='$ReleaseDate', Author_id='$Author_id', Genre='$Genre', Publisher='$Publisher'
             WHERE id = $Book_id";
}             
else {
    $sql = "INSERT INTO Book (Title, Author_id, ReleaseDate, Genre, Publisher)
            VALUES ('$Title', '$Author_id','$ReleaseDate', '$Genre', '$Publisher')";

}  

?>

<?php include 'head.php'; ?>

      <div class="starter-template">
        
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Title: <?php echo $Title ?><br>
      Release Date: <?php echo $ReleaseDate?><br>
      Genre: <?php echo $Genre ?><br>
      Publisher: <?php echo $Publisher ?><br>
      

    </div>
  </body>
</html>