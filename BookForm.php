<?php
include 'dbConnection.php';

$sql= "SELECT id, First, Last FROM Author";

$Authors = $conn->query($sql);

if (isset($_GET['Book_id'])) {
    
    $Book_id = $_GET['Book_id'];
    
    $BookSQL = "SELECT * FROM Book where id = $Book_id";
    $Book = $conn->query($BookSQL)->fetch_assoc();
}

include 'head.php';
?>
 
  <div class = "form">
    <form action="addBook.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Book</h1>
        
    <?php if(isset($Book_id)) echo "<input type='hidden' name='Book_id' value=" . $Book_id ." >"; ?>
    

      
           
               <label for="Author_id"></label>
        
                  <select name="Author_id">
                      <option value="" disabled selected>Select Author</option>
                    <?php
                    if ($Authors->num_rows > 0) {
                        // output data of each row
                        while($Author = $Authors->fetch_assoc()) {
                            echo "<option value='" . $Author["id"] ."'";
                            if (isset($Book['Author_id']) and  $Book['Author_id'] == $Author["id"]) echo "selected";
                            echo ">" . $Author["Last"] . "</option>";
                        }
                    }
                    ?>
      
              </select>
                <div>
                  <label for="Title"></label>
                  <input type="text" required name="Title" class="form-control" placeholder="Title" <?php if (isset($Book['Title'])) echo "value='" . $Book['Title'] . "'"; ?> />
              </div>
              <div>   
                  <label for="ReleaseDate"></label>
                  <input type="text" required name="ReleaseDate" class="form-control" placeholder="Release Date" <?php if (isset($Book['ReleaseDate'])) echo "value='" . $Book['ReleaseDate'] . "'"; ?>  />
              </div>
              <div>
                  <label for="Genre"></label>
                  <input type="text" required name="Genre" class="form-control" placeholder="Genre" <?php if (isset($Book['Genre'])) echo "value='" . $Book['Genre'] . "'"; ?>  />
              </div>
              <div>
                   <label for="Publisher"></label>
                  <input type="text" required name="Publisher" class="form-control" placeholder="Publisher"<?php if (isset($Book['Publisher'])) echo "value='" . $Book['Publisher'] . "'"; ?>  />
              </div>
          
                  <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
              </div>
               

            </form>    
        </div>    
        <?php include 'footer.php'?>
    </body>
</html>