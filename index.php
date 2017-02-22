<?php
include 'dbConnection.php';

  $sql = "SELECT 
        Book.id as Book_id, Title, ReleaseDate, Genre, Publisher, First, Last, BirthYear, DeathYear
        FROM Book JOIN Author ON Author.id = Book.Author_id";
  $result = $conn->query($sql);
?>

<?php include 'head.php' ?>

          <table class= "table">
            
             <thead>
              <tr>
                <th>First</th>
                 <th>Last</th>
                 <th>Birth Year</th>
                 <th>Death Year</th>
                 <th>Title</th>
                 <th>Release Date</th>
                 <th>Genre</th>
                 <th>Publisher</th>
               </tr>
             </thead>
             
            <tbody>
              <tr>
                
             <td>
             <?php
             
                while ($row = $result->fetch_assoc()){
                  echo $row['First']. " | " . $row['Last'] . " | " . $row['BirthYear'] . " | ". $row['DeathYear'] . " | ".
                  $row['Title'] . " | ". $row['ReleaseDate'] . " | " . $row['Genre'] . " | " . $row['Publisher'] . " | <a href=deleteBook.php?Book_id=" . $row['Book_id']  ."> delete</a>" . 
                  " | <a href=BookForm.php?Book_id=" . $row['Book_id']  . "> update book</a>". "<br>";
                }
              ?>
              </td>
            
            
               </tr>
             </tbody>
          </table>
        </div>
        <?php include 'footer.php'?>
    </body>
</html> 