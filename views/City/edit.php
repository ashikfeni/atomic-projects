<?php
	include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');
    use \App\City\City;
    use \App\Utility\Utility;
    $cityItem = new City();
    $city = $cityItem->show($_GET["id"]);


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
                  <label class="control-label col-sm-3" for="field1">User Name:</label>
                  <div class="col-sm-9">
                  	<input type="hidden" name="id" value="<?php echo $city->id;?>">
                    <input type="text" name="user" class="form-control" id="field1" value="<?php echo $city->user;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="field2">City:</label>
                  <div class="col-sm-9">          
                    <select class="form-control" name="city_name" id="field2">
					  <option value="Dhaka"  <?php if(trim($city->city_name) == "Dhaka"){echo " selected";} ?>>Dhaka</option>
					  <option value="Sylhet" <?php if(trim($city->city_name) == "Sylhet"){echo " selected";} ?>>Sylhet</option>
					  <option value="Chittagong" <?php if(trim($city->city_name) == "Chittagong"){echo " selected";} ?>>Chittagong</option>
					  <option value="Barisal" <?php if(trim($city->city_name) == "Barisal"){echo " selected";} ?>>Barisal</option>
					  <option value="Rangpur" <?php if(trim($city->city_name) == "Rangpur"){echo " selected";} ?>>Rangpur</option>
					  <option value="Khulna" <?php if(trim($city->city_name) == "Khulna"){echo " selected";} ?>>Khulna</option>
					  <option value="Rajshahi" <?php if(trim($city->city_name) == "Rajshahi"){echo " selected";} ?>>Rajshahi</option>
					</select>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" name="submit">Update</button>
                  </div>
                </div>
              </form>
          <p class="text-center"><a href="index.php">Go to Homepage</a></p>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>