<?php
	include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');
    use \App\ProfilePicture\ProfilePicture;
    use \App\Utility\Utility;
    $profileItem = new ProfilePicture();
    $profile = $profileItem->show($_GET["id"]);


 ?>
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
          <form class="form-horizontal" role="form" action="update.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field1">Name:</label>
                  <div class="col-sm-9">
                  	<input type="hidden" name="id" value="<?php echo $profile->id;?>">
                    <input type="text" name="name" class="form-control" id="field1" value="<?php echo $profile->name;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field2">Profile Picture:</label>
                  <div class="col-sm-9">          
                    <input type="file" name="profile_pic" class="form-control" id="field2"  value="<?php echo $profile->email;?>">
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" name="submit">Update</button>
                  </div>
                </div>
              </form>
          <p class="text-center"><a href="../../index.php">Go to Homepage</a> | <a href="index.php">Profile Picture List</a></p>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>