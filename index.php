<?php
include 'dbConnection.php';

$orderBy = 'Last';

if (isset($_GET['sortBy'])){
    $orderBy = $_GET['sortBy'];
}

if (isset ($_GET['filterBy']) and $_GET['filterBy'] != 'all') {
    $filterBy = $_GET['filterBy'];
}

  $sql = "SELECT 
        Book.id as Book_id, Title, ReleaseDate, Genre, Publisher, First, Last, BirthYear, DeathYear
        FROM Book JOIN Author ON Author.id = Book.Author_id "; 
    
if(isset($filterBy)) {
    $sql = $sql . "WHERE Author.Last = '" . $filterBy . "'";
    
}

$sql = $sql . " ORDER BY " . $orderBy;


$result = $conn->query($sql);
  
$AuthorSql = "SELECT DISTINCT Last FROM Author";

$Authors = $conn->query($AuthorSql);
     
include 'head.php' 
?>

<h1>Literary Database</h1>


    <form method ="get">
            <label for "sortBy"> sort by</label>    
            <select name= "sortBy">
                <option <?php if ($orderBy =="Last") echo "selected";?> value="Last">Last</option>
                <option <?php if ($orderBy == "Title") echo "selected";?> value="Title">Title</option>
                <option <?php if ($orderBy == "ReleaseDate") echo "selected";?> value="ReleaseDate">Release Date</option>
            </select><br><br>
            
            <label for ="filterBy">Filter by Author</label>
            <select name = "filterBy">
                <option>all</option>
                
            <?php
            if ($Authors->num_rows > 0){
            while($Author = $Authors->fetch_assoc()) {
                 echo "<option value='" . $Author["Last"] ."'";
                echo ">" . $Author["Last"] . "</option>";
              }
         }
         ?>
            </select>
            
            
                <button type="submit" class="btn">Submit</button>
    </form>

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
             
                while ($row = $result->fetch_assoc()) {
                  echo "<tr><td>" .  $row['First']. "</td><td> " . $row['Last'] . "</td><td> " . $row['BirthYear'] . "</td><td> ". $row['DeathYear'] . "</td><td> ".
                  $row['Title'] . "</td><td> ". $row['ReleaseDate'] . " </td><td> " . $row['Genre'] . " </td><td> " . $row['Publisher'] .
                  " </td><td> <a href=deleteBook.php?Book_id=" . $row['Book_id']  ."> delete book</a>" . 
                  " </td><td> <a href=BookForm.php?Book_id=" . $row['Book_id']  . "> update book</a>". "</td></tr>";
                }
             ?>
            
             </tbody>
          </table>
        </div>
    </body>
    <?php include 'footer.php'?>
</html> 