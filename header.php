<!DOCTYPE html>
<html lang="en">



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
          <?php
            if(isset($pageTitle)){
              print $pageTitle;
            } else {
              print 'Flying High Acrobatics';
            }
           ?>

        </title>
<meta property="og:image" content="http://martinkvist.dk/assets/img/team/5.jpg">
<link rel="image_src" href="http://martinkvist.dk/assets/img/team/5.jpg">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<!-- Facebook tags-->
        <?php
        //SETTING PAGE TITLE
        $scriptName = basename($_SERVER['REQUEST_URI']);

        //set Facebook variables (if not already defined inside the Pages)
        $fbTitle = (isset($pageTitle))?$pageTitle:'Martin Kvist';
        $fbImg =(isset($pageImg))?$pageImg: "/assets/img/team/5.png";
        $fbDesc = (isset($pageDesc))?$pageDesc:'Pursuing a better understanding of injury causality,
        prevention, and performance enhancement in acrobatic sports.';

        ?>



    </head>

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Martin Kvist - Stud. Master of Science in Sports...</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">

              <li>
								<a href="index.php"><i class="fa fa-home"></i><br>Home</a>
                </li>

						<li>
							<a href="portfolio.php"><i class="fa fa-camera"></i><br>Projects</a>
						</li>
					<!--	<li>
							<a href="services.php"><i class="fa fa-tasks"></i><br>Services</a>
						</li> -->
						<li>
							<a href="about.php"><i class="fa fa-user"></i><br>About</a>
						</li>
						<li>
							<a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
				<!--		<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="pricing-tables.php">Pricing tables</a></li>
							</ul>
						</li>-->
					</ul>
				</div>
			</div>
		</nav>
