<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');
    
    use \App\ProfilePicture\ProfilePicture;
    use \App\Utility\Utility;
    
    $profile = new ProfilePicture();
    $profiles = $profile->index();
    
    
    
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
		<h1 class="text-center">Profile Picture</h1>
    <div class="wrapper">
        <?php echo Utility::message(); ?>
        <div class="actionDiv"><span>Search / Filter </span> 
            <span id="utility">Download as PDF | XL  <a href="create.php">Add New</a></span>
            <select>
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
            </select>
        </div>
    <table class="table table-bordered">
	<thead>
	<tr>
	  <th>SL</th>
	  <th>#ID</th>
	  <th>Name &dArr;</th>
	  <th>Profile Picture &dArr;</th>
	  <th>Action</th>
	</tr>
	</thead>
	<tbody>
	 <?php
	   $slno =1;
	   foreach($profiles as $profile){
	   ?>
		<tr>
			<td><?php echo $slno;?></td>
			<td><?php echo $profile->id;?></td>
			<td><a href="show.php?id=<?php echo $profile->id;?>"><?php echo $profile->name;?></a></td>
                        <td><img src="upload/<?php echo $profile->profile_pic;?>" /></td>
			<td>
          <a href="show.php?id=<?php echo $profile->id;?>">View</a> | 
          <a href="edit.php?id=<?php echo $profile->id;?>">Edit</a> | 
          <form action="delete.php" method="post">
              <input type="hidden" name ="id" value="<?php echo $profile->id;?>">
              <button type="submit" class="delete">Delete</button>
          </form> | 
          Trash/Recover | Email to Friend 
      </td>
		</tr>
	<?php
		$slno++;
	}
	?>
        
	</tbody>
	</table>
      </div>
      <p class="text-center"><a href="../../index.php">Go to Homepage</a> | <a href="create.php">Profile Picture List</a></p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script>
           $('.delete').bind('click',function(e){
               var deleteItem = confirm("Are you sure you want to delete?");
               if(!deleteItem){
                  //return false; 
                  e.preventDefault();
               }
           }); 
    </script>
  </body>
</html>