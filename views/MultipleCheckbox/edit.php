<?php
	include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');
    use \App\MultipleCheckbox\MultipleCheckbox;
    use \App\Utility\Utility;
    $checkboxItem = new MultipleCheckbox();
    $checkbox = $checkboxItem->show($_GET["id"]);


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
          <form class="form-horizontal" role="form" action="update.php" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field1" ><span class="text-right">Name:</span></label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="<?php echo $checkbox->id;?>"> 
                    <input type="text" name="name" class="form-control" id="field1"value="<?php echo $checkbox->name;?>">
                  </div>
                </div>
                <div class="form-group">
                <div class="checkbox">
                  <?php 
                    if($checkbox->hobby){
                      $unserialize = unserialize($checkbox->hobby);
                    }
                   ?>
                  <p>Please Check your favorite Hobby</p>
                  <label><input type="checkbox" value="Cooking" name="hobby[]" <?php if(in_array("Cooking",$unserialize)){echo " checked";} ?>>Cooking</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Painting" name="hobby[]" <?php if(in_array("Painting",$unserialize)){echo " checked";} ?>>Painting</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Playing" name="hobby[]" <?php if(in_array("Playing",$unserialize)){echo " checked";} ?>>Playing</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Cycling" name="hobby[]" <?php if(in_array("Cycling",$unserialize)){echo " checked";} ?>>Cycling</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Photography" name="hobby[]" <?php if(in_array("Photography",$unserialize)){echo " checked";} ?>>Photography</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Programming" name="hobby[]" <?php if(in_array("Programming",$unserialize)){echo " checked";} ?>>Programming</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="Hooping" name="hobby[]" <?php if(in_array("Hooping",$unserialize)){echo " checked";} ?>>Hooping</label>
                </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" name="submit">Update</button>
                  </div>
                </div>
              </form>
          <p class="text-center"><a href="../../index.php">Go to Homepage</a> | <a href="index.php">Go to Multiple Checkbox List</a></p>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>