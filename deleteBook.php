<?php
 
include 'dbConnection.php';

$Book_id = $_GET['Book_id'];

$sql = "DELETE FROM Book WHERE id=$Book_id";

$result = $conn->query($sql);

include 'head.php';

if ($conn->query($sql) === TRUE) {
    echo "Book deleted successfully";
} else {
    echo "There was an issue deleting the Book: " . $conn->error;
}
$conn->close();

?>
         </div>
    </body>
</html> 
