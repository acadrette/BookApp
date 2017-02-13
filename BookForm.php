<?php
include 'dbConnection.php';

$sql= "SELECT id, First, Last FROM Author";

$Authors = $conn->query($sql);

include 'head.php';
?>
 

<form action="addBook.php" method="post" class="form-signin">
  <div class = "form">
       <h1 class="form-signin-heading">Enter Book</h1>
           <label for="Author_id">Author:</label>
              <select name="Author_id">
                <?php
                if ($Authors->num_rows > 0) {
                    // output data of each row
                    while($Author = $Authors->fetch_assoc()) {
                        echo "<option value='" . $Author["id"] ."'";
                        echo ">" . $Author["First"] . $Author["Last"] . "</option>";
                    }
                }
              
                ?>
              </select>
          
                  <label for="Title"></label>
                  <input type="text" name="Title" class="form-control" placeholder="Title"/>
                  
                  <label for="ReleaseDate"></label>
                  <input type="text" name="ReleaseDate" class="form-control" placeholder="Release Date"/>
          
                  <label for="Genre"></label>
                  <input type="text" name="Genre" class="form-control" placeholder="Genre"/>
                  
                   <label for="Publisher"></label>
                  <input type="text" name="Publisher" class="form-control" placeholder="Publisher"/>
          
                  <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
              </div>
               

            </form>    
        </div>    
    </body>
</html>