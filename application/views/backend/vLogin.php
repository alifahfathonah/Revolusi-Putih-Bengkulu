<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Revolusi Putih Bengkulu</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>/assets/backend/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url()?>/assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>/assets/backend/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/backend/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">LOGIN ADMINISTRATOR</h2>
		        <div class="login-wrap">
                <label style="color: red"><?php if (isset($error_message)) {
                        echo $error_message;
                      }
                      echo validation_errors();
                      ?></label>
		            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
		            <br>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
		            <hr>
		            
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>/assets/backend/js/jquery.js"></script>
    <script src="<?= base_url()?>/assets/backend/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url()?>/assets/backend/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url()?>/assets/backend/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
