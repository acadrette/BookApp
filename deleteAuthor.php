<?php 

include 'dbConnection.php';

$Author_id = $_GET['Author_id'];

$sql = "DELETE FROM Author WHERE id=$Author_id";

$result = $conn -> query ($sql);

include 'head.php';

if ($conn->query($sql) === TRUE) {
    echo "Author deleted successfully";
} else {
    echo "There was an issue deleting the Author: " . $conn->error;
    
}

?>

     </div>
    </body>
</html> 