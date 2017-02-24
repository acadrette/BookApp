<?php 
include 'dbConnection.php';

if (isset($_GET ['Author_id'])) {
  
  $Author_id = $_GET['Author_id'];
  
  $AuthorSQL = "SELECT * FROM Author where id = $Author_id";
  $Author = $conn-> query($AuthorSQL)->fetch_assoc();
}


include 'head.php';

?>




          <div class="form">
            <form action="addAuthor.php" method="post" class="form-signin">
              
              <?php if(isset($Author_id)) echo "<input type = 'hidden' name='Author_id' value=" . $Author_id . " >"; ?>
              
              <h1 class="form-signin-heading">Enter Author</h1>
      
              <label for="First"></label>
              <input type="text" name="First" class="form-control" placeholder="First" <?php if (isset($Author['First'])) echo "value='" . $Author['First'] . "'"; ?>/>
              
              <label for="Last"></label>
              <input type="text" name="Last" class="form-control" placeholder="Last" <?php if (isset($Author['Last'])) echo "value='" . $Author['Last'] . "'"; ?>/>
      
              <label for="BirthYear"></label>
              <input type="text" name="BirthYear" class="form-control" placeholder="Birth Year" <?php if (isset($Author['BirthYear'])) echo "value='" . $Author['BirthYear'] . "'"; ?>/>
              
               <label for="DeathYear"></label>
              <input type="text" name="DeathYear" class="form-control" placeholder="Death Year" <?php if (isset($Author['DeathYear'])) echo "value='" . $Author['DeathYear'] . "'"; ?>/>
      
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
             </form>
        </div><!--form-->
      </div><!--container-->
  </body>
</html>