
<!-- Copyrights @ Frends 2.0, Akshat jain -->

<?php
	$email = isset($_GET['email']) ? $_GET['email'] : "" ;
	$hash = isset($_GET['hash']) ? $_GET['hash'] : "";
	$name = isset($_GET['name']) ? $_GET['name'] : "" ;
	
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Frends | New User</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/cus.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
</head>

<body id="page-top" class="index">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Frends</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#new">New User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
	
	<section id="new">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WELCOME, <span><?php echo ($name); ?></span></h2>
                    <h3 class="section-subheading text-muted">One more step to go. Please Confirm your identity.</h3>
                </div>
            </div>
			<div class="row">
				<div class="col-md-8">
					<form class="form-horizontal" role="form" method="POST" onsubmit="return valconfirmidform();" action="checkcode.php?email=<?php echo $email; ?>&name=<?php echo $name; ?>&hash=<?php echo $hash; ?>" name="confirmUser">
						<div class="form-group">
							<label for="Scode" class="col-sm-3	control-label">Security Code*</label>
							<div class="col-sm-7">
							<input type="text" class="form-control" id="Scode" placeholder="Security Code" name="Scode">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-2">
							<button type="submit" class="btn btn-default">Sign in</button>
							</div>
							<!--<div class="col-sm-offset-3 col-sm-2">
							<button type="submit" class="btn btn-default">Re send</button>
							</div>-->
						</div>
					</form>
				</div>
				<div class="col-md-4 text-center" style="word-wrap : break-word;">
					<h3 class="section-subheading text-muted">Please check your Inbox for the security code and enter it here.</h3>
				<div>
			</div>
		</div>
	</section>

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Frends 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="err.php" target = "_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="err.php" target = "_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="err.php" target = "_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="err.php">Privacy Policy</a>
                        </li>
                        <li><a href="err.php">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	

</body>

</html>