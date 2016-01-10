<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="create_wrapper">
          <form class="form-horizontal" role="form" action="store.php" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field1">Book Tittle:</label>
                  <div class="col-sm-9">
                    <input type="text" name="book_title" class="form-control" id="field1" placeholder="Enter Book Tittle">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field2">Author:</label>
                  <div class="col-sm-9">          
                    <input type="text" name="author" class="form-control" id="field2" placeholder="Enter Creator Name">
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                  </div>
                </div>
              </form>
          <p class="text-center"><a href="../../index.php">Go to Homepage</a> | <a href="index.php">Go to Book List</a></p>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>