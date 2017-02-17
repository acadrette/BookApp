<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> </title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link href="styles.css" rel="stylesheet">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                
    </head>
    <body>
        <?php include 'nav.php' ?>
        <div class="container">
          <div class="form">
            <form action="addAuthor.php" method="post" class="form-signin">
              <h1 class="form-signin-heading">Enter Author</h1>
      
              <label for="First"></label>
              <input type="text" name="First" class="form-control" placeholder="First"/>
              
              <label for="Last"></label>
              <input type="text" name="Last" class="form-control" placeholder="Last"/>
      
              <label for="BirthYear"></label>
              <input type="text" name="BirthYear" class="form-control" placeholder="Birth Year"/>
              
               <label for="DeathYear"></label>
              <input type="text" name="DeathYear" class="form-control" placeholder="Death Year"/>
      
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
             </form>
        </div><!--form-->
      </div><!--container-->
  </body>
</html>