<?php
include 'dbConnection.php';

  $sql = "SELECT * FROM Author";
        
  $result = $conn->query($sql);
?>

<?php include 'head.php' ?>

          <table class= "table">
            
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

