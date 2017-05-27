
<!-- Copyrights @ Frends 2.0, Akshat jain -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Frends | Log In</title>

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
                    <li>
                        <a class="page-scroll" href="#log">Log In</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#forgot">Forgot Password</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Join our public section for using services</div>
                <div class="intro-heading">L . O . G . I . N</div>
                <a href="#new" class="page-scroll btn btn-xl">New User</a>
				<a href="#log" class="page-scroll btn btn-xl">Login</a>
            </div>
        </div>
    </header>
	
	<section id="new">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">NEW REGISTRATION</h2>
                    <h3 class="section-subheading text-muted">We welcome our new users warmly. Join us for free.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
					<form class="form-horizontal" role="form" method="POST" onsubmit="return valnewuserform();" action="getregisdetails.php" name="newUser">
						<div class="form-group">
							<label for="fname" class="col-sm-2	control-label">First Name*</label>
							<div class="col-sm-4">
							<input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
							</div>
							<label for="lname" class="col-sm-2 control-label">Last Name</label>
							<div class="col-sm-4">
							<input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
							</div>
						</div>
						<div class="form-group">
							<label for="mobile" class="col-sm-2 control-label">Mobile*</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" value="+91" readonly>
							</div>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email*</label>
							<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">Password*</label>
							<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for="conpassword" class="col-sm-2 control-label">Confirm Password*</label>
							<div class="col-sm-10">
							<input type="password" class="form-control" id="conpassword" placeholder="Confirm Password" name="conpassword">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
                </div>
				<div class="col-md-4 text-center" style="word-wrap : break-word;">
					<h3 class="section-subheading text-muted">( * ) mark the necessary fields.<br><br>Please enter a valid E-mail address and mobile number. It will be used for confirmation and communication.</h3>
				<div>
            </div>
        </div>
    </section>

	<section id="log">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LOG IN</h2>
                    <h3 class="section-subheading text-muted">Log into your account and get in touch with our world class services.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<form class="form-horizontal" role="form" method="POST" onsubmit="return valloginform();" action="getlogindetails.php" name="loginform">
						<div class="form-group">
							<label for="emaillog" class="col-sm-2 control-label">Email*</label>
							<div class="col-sm-10">
							<input type="email" class="form-control" id="emaillog" placeholder="Email" name="emaillog">
							</div>
						</div>
						<div class="form-group">
							<label for="passwordlog" class="col-sm-2 control-label">Password*</label>
							<div class="col-sm-10">
							<input type="password" class="form-control" id="passwordlog" placeholder="Password" name="passwordlog">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Log in</button>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </section>
	
	<section id="forgot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">FORGOT PASSWORD</h2>
                    <h3 class="section-subheading text-muted">Remember only the good time you spend. Else, leave it to us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					
                </div>
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
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
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
