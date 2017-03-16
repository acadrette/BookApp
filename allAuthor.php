<?php
include 'dbConnection.php';

$orderBy = 'Last';

if (isset($_GET['sortBy'])){
    $orderBy = $_GET['sortBy'];
}

if (isset ($_GET['filterBy']) and $_GET['filterBy'] != 'all') {
    $filterBy = $_GET['filterBy'];
}

  $sql = "SELECT * FROM Author"; 
    
if(isset($filterBy)) {
    $sql = $sql . "WHERE Author.Last = '" . $filterBy . "'";
    
}

$sql = $sql . " ORDER BY " . $orderBy;


$result = $conn->query($sql);
  

?>

<?php include 'head.php' ?>
<h1 class="form-signin-heading">Authors</h1>
        <a href="AuthorForm.php" class="btn btn-default">Add Author</a>
          <table class= "table table-hover">
              
               <form method ="get">
            <label for "sortBy"> sort by</label>    
            <select name= "sortBy">
                <option <?php if ($orderBy =="Last") echo "selected";?> value="Last">Last Name</option>
                <option <?php if ($orderBy == "First") echo "selected";?> value="First">First Name</option>
            </select><br><br>
            
           
                
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

            
             <thead>
              <tr>
                <th>First</th>
                 <th>Last</th>
                 <th></th>
                 <th></th>
               </tr>
             </thead>
             
            <tbody>
             
             <?php
             
                while ($row = $result->fetch_assoc()){
                  echo "<tr><td>" .  $row['First']. "</td><td>" . $row['Last'] . 
                "</td><td> <a href=deleteAuthor.php?Author_id=" . $row['id']  ."> delete author</a>" . 
                      "</td><td> <a href=AuthorForm.php?Author_id=" . $row['id']  . "> update author</a>". 
                  "</td></tr>";
                }
              ?>
         
             </tbody>
          </table>
        </div>
      <?php include 'footer.php'?>
    </body>
</html> 

