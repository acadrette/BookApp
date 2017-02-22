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
               </tr>
             </thead>
             
            <tbody>
              <tr>
                
             <td>
             <?php
             
                while ($row = $result->fetch_assoc()){
                  echo $row['First']. "  " . $row['Last'] . "<br>";
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

