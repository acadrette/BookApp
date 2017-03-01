<?php
include 'dbConnection.php';

  $sql = "SELECT 
        Book.id as Book_id, Title, ReleaseDate, Genre, Publisher, First, Last, BirthYear, DeathYear
        FROM Book JOIN Author ON Author.id = Book.Author_id";
  $result = $conn->query($sql);
?>

<?php include 'head.php' ?>

<h1>Literary Database</h1>

          <table class= "table table-hover">
            
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
                 <th></th>
                 <th></th>
               </tr>
             </thead>
             
            <tbody>
             <?php
             
                while ($row = $result->fetch_assoc()){
                  echo "<tr><td>" .  $row['First']. "</td><td> " . $row['Last'] . "</td><td> " . $row['BirthYear'] . "</td><td> ". $row['DeathYear'] . "</td><td> ".
                  $row['Title'] . "</td><td> ". $row['ReleaseDate'] . " </td><td> " . $row['Genre'] . " </td><td> " . $row['Publisher'] .
                  " </td><td> <a href=deleteBook.php?Book_id=" . $row['Book_id']  ."> delete book</a>" . 
                  " </td><td> <a href=BookForm.php?Book_id=" . $row['Book_id']  . "> update book</a>". "</td></tr>";
                }
              ?>
            
             </tbody>
          </table>
        </div>
        <?php include 'footer.php'?>
    </body>
</html> 