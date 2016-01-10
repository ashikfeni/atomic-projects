<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
	<div class="wrapper">
        <form action="store.php" method="post">
            <fieldset>
                <legend>Birthday</legend>
                <div>
                    <label for="title" >Name</label><br>
                    <input autofocus="autofocus" 
                           id="title" 
                           placeholder="Enter the name" 
                           type="text" 
                           name="name"
                           tabindex="1"
                           required="required"
                           size="30"
                    />
                    <br><br>
                    <label for="title" >Birthday</label><br>
                    <input autofocus="autofocus" 
                           id="title" 
                           placeholder="Enter your Brithday" 
                           type="text" 
                           name="birthday"
                           tabindex="2"
                           required="required"
                           size="30"
                    />
                </div>
				<br>
                <button  tabindex="3" type="submit">Save</button>
                <button  tabindex="4" type="submit">Save & Add Again</button>
<!--                <input type="submit" value="Save" />-->
                <input tabindex="5" type="reset" value="Reset" />
            </fieldset>
        </form> 
        <nav id="footer_nav">
            <li><a href="index.php">Go to List</a></li>
            <li><a href="javascript:history.go(-1)">Back</a></li>
        </nav>
	</div>
    </body>
</html>


