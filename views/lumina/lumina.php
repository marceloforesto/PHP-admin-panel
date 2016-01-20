<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Lumina</title>

	<?php foreach ($query2 as $row) : ?>
		<?php if($row->id == 8) $icon = $row->data; ?>
	<?php endforeach ?>

	<link rel="shortcut icon" href="<?php echo $icon ?>">

	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/creative.css" type="text/css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">


	<?php foreach ($query2 as $row) : ?>
			<img src="<?php if($row->id == 7) $imag = $row->data; ?>" />
	<?php endforeach ?>

	<style>
		.aboutcontanier {
			background-image: url("<?php echo $imag ?>");
  	    	background-repeat: no-repeat;
    	    background-attachment: fixed;
         	background-position: center;
		}
	</style>
</head>

<body class="home">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#home">
					<div id="img_nav">
						<?php foreach ($query2 as $row) : ?>
							<img src="<?php if($row->id == 1) echo $row->data; ?>" />
						<?php endforeach ?>
					</div>
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#about">
						<?php foreach ($query as $row) : ?>
										<?php if($row->id == 49) echo $row->data; ?>	
						<?php endforeach ?>
					</a></li>
		  			<li><a class="page-scroll" href="#left-sidebar">
		  				<?php foreach ($query as $row) : ?>
										<?php if($row->id == 50) echo $row->data; ?>	
						<?php endforeach ?>
		  			</a></li>
					<li><a class="page-scroll" href="#faq">
						<?php foreach ($query as $row) : ?>
										<?php if($row->id == 52) echo $row->data; ?>	
						<?php endforeach ?>
					</a></li>
					<li><a class="page-scroll" href="#contact">
						<?php foreach ($query as $row) : ?>
										<?php if($row->id == 51) echo $row->data; ?>	
						<?php endforeach ?>
					</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!-- home -->
<section class="bg-dark header-content" id="home">
	<br><br><br><br>
	<div class="container">
	<div id="img1">
		<?php foreach ($query2 as $row) : ?>
			<img src="<?php if($row->id == 2) echo $row->data; ?>" />
		<?php endforeach ?>
	</div>
	<div id="img2">
		<?php foreach ($query2 as $row) : ?>
			<img src="<?php if($row->id == 3) echo $row->data; ?>" />
		<?php endforeach ?>
	</div>
	<div id="logo">
		<?php foreach ($query2 as $row) : ?>
			<img src="<?php if($row->id == 1) echo $row->data; ?>" />
		<?php endforeach ?>
	</div>
	</div>
	<br><br><br>
</section>

<!-- about -->
<section class="no-padding" id="about">
        <div class="aboutcontanier">
            <div class="row">
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				
				<h1 class="page-title page-header text-center">
					<?php foreach ($query as $row) : ?>
						<?php if($row->id == 12) echo $row->data; ?>	
					<?php endforeach ?>
				</h1>
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 13) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
				<div id="about_img">
						<?php foreach ($query2 as $row) : ?>
							<img src="<?php if($row->id == 4) echo $row->data; ?>" />
						<?php endforeach ?>
				</div>
						<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 1) echo $row->data; ?>	
						<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 2) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 14) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 3) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 15) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 4) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 16) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 5) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 6) echo $row->data; ?>	
					<?php endforeach ?>
				</p>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>
						<?php foreach ($query as $row) : ?>
							<?php if($row->id == 17) echo $row->data; ?>	
						<?php endforeach ?>
					</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="">
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 18) echo $row->data; ?>	
							<?php endforeach ?>
						</a><br><span class="small text-muted">
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 7) echo $row->data; ?>	
							<?php endforeach ?>
						</span></li>
						<li><a href="">
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 19) echo $row->data; ?>	
							<?php endforeach ?>
						</a><br><span class="small text-muted">
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 8) echo $row->data; ?>	
							<?php endforeach ?>
						</span></li>
						<li><a href="">
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 20) echo $row->data; ?>	
							<?php endforeach ?>
						</a><br><span class="small text-muted">
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 9) echo $row->data; ?>	
							<?php endforeach ?>
						</span></li>
						<li><a href="">
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 21) echo $row->data; ?>	
							<?php endforeach ?></a><br><span class="small text-muted">
								<?php foreach ($query3 as $row) : ?>
									<?php if($row->id == 10) echo $row->data; ?>	
								<?php endforeach ?>
							</span></li>
						<li><a href="">
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 22) echo $row->data; ?>	
							<?php endforeach ?>
						</a><br><span class="small text-muted">
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 11) echo $row->data; ?>	
							<?php endforeach ?>
						</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /about -->
</section>

<!-- sidebar-left -->
<section class="bg-warning no-padding" id="left-sidebar">
	<div class="container">
		<div class="row">
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 23) echo $row->data; ?>	
							<?php endforeach ?>
						</h4>
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 12) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 24) echo $row->data; ?>	
							<?php endforeach ?>
						</h4>
						<p>
						<div id="leftsidebar_img1">
							<?php foreach ($query2 as $row) : ?>
								<img src="<?php if($row->id == 5) echo $row->data; ?>" />
							<?php endforeach ?>
						</div>	
						</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 25) echo $row->data; ?>	
							<?php endforeach ?></h4>
						<p>
						<div id="leftsidebar_img2">
							<?php foreach ($query2 as $row) : ?>
								<img src="<?php if($row->id == 6) echo $row->data; ?>" />
							<?php endforeach ?>
						</div>	
						</p>
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 13) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<h1 class="page-title page-header ontainer text-center">
					<?php foreach ($query as $row) : ?>
						<?php if($row->id == 26) echo $row->data; ?>	
					<?php endforeach ?>
				</h1>				
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 14) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 15) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 16) echo $row->data; ?>	
					<?php endforeach ?>
				</p>

				<h2>
					<?php foreach ($query as $row) : ?>
						<?php if($row->id == 27) echo $row->data; ?>	
					<?php endforeach ?>
				</h2>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 17) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 18) echo $row->data; ?>	
					<?php endforeach ?>
				</p>

				<blockquote>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 19) echo $row->data; ?>	
					<?php endforeach ?>
				</blockquote>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 20) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 21) echo $row->data; ?>	
					<?php endforeach ?>
				</p>

				<h3>
					<?php foreach ($query as $row) : ?>
						<?php if($row->id == 28) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 22) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 23) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /sidebar-left -->
</section>

<!-- faq -->
<section class = "no-padding" id="faq">
	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">
			<?php foreach ($query as $row) : ?>
							<?php if($row->id == 32) echo $row->data; ?>	
			<?php endforeach ?>
		</h2>
		<p class="text-muted">
			<?php foreach ($query3 as $row) : ?>
				<?php if($row->id == 28) echo $row->data; ?>	
			<?php endforeach ?>
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">
				<?php foreach ($query as $row) : ?>
							<?php if($row->id == 33) echo $row->data; ?>	
				<?php endforeach ?>
			</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>
						<?php foreach ($query as $row) : ?>
							<?php if($row->id == 34) echo $row->data; ?>	
						<?php endforeach ?>
					</h4></div>
					<div class="h-body text-center">
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 29) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>
						<?php foreach ($query as $row) : ?>
							<?php if($row->id == 35) echo $row->data; ?>	
						<?php endforeach ?>
					</h4></div>
					<div class="h-body text-center">
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 30) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>
						<?php foreach ($query as $row) : ?>
							<?php if($row->id == 36) echo $row->data; ?>	
						<?php endforeach ?>
					</h4></div>
					<div class="h-body text-center">
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 31) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>
						<?php foreach ($query as $row) : ?>
							<?php if($row->id == 37) echo $row->data; ?>	
						<?php endforeach ?>
					</h4></div>
					<div class="h-body text-center">
						<p>
							<?php foreach ($query3 as $row) : ?>
								<?php if($row->id == 32) echo $row->data; ?>	
							<?php endforeach ?>
						</p>
					</div>
				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">
		<h2 class="text-center top-space">
			<?php foreach ($query as $row) : ?>
				<?php if($row->id == 38) echo $row->data; ?>	
			<?php endforeach ?>
		</h2>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 39) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 33) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
			</div>
			<div class="col-sm-6">
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 40) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 34) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 41) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 35) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
			</div>
			<div class="col-sm-6">
				<h3>
					<?php foreach ($query as $row) : ?>
							<?php if($row->id == 42) echo $row->data; ?>	
					<?php endforeach ?>
				</h3>
				<p>
					<?php foreach ($query3 as $row) : ?>
						<?php if($row->id == 36) echo $row->data; ?>	
					<?php endforeach ?>
				</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>
				<?php foreach ($query3 as $row) : ?>
					<?php if($row->id == 37) echo $row->data; ?>	
				<?php endforeach ?>
			</h4>
  		</div>
  		<br>
</section>
<!-- /faq -->


<!-- contact -->

	<section class="bg-primary no-padding" id="contact">
		<div class="container">
			<div class="row">
				<!-- Article main content -->
				<article class="col-sm-9 maincontent">
					<header class="page-header">
						<div class="col-lg-12 text-center">
							<h1 class="page-title">
								<?php foreach ($query as $row) : ?>
									<?php if($row->id == 29) echo $row->data; ?>	
								<?php endforeach ?>
							</h1>
						</div>
					</header>

					<p>
						<?php foreach ($query3 as $row) : ?>
							<?php if($row->id == 24) echo $row->data; ?>	
						<?php endforeach ?>
					</p>
					<br>
						<?php foreach ($query as $row) : ?>
									<?php if($row->id == 54) $email_to = $row->data; ?>	
						<?php endforeach ?>
						<?php echo form_open('lumina/send_email/' . $email_to); ?>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" type="text" name = "name" placeholder="Name">
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name = "email" placeholder="Email">
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" name = "phone" placeholder="Phone">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<textarea name = "text" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6 container text-center">
									<input class="btn btn-action" type="submit" value="Send message">
								</div>
							</div>
							<br>
						<?php echo form_close(); ?>

				</article>
				<!-- /Article -->

				<!-- Sidebar -->
				<aside class="col-sm-3 sidebar sidebar-right">

					<div class="widget">
						<h4>
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 30) echo $row->data; ?>	
							<?php endforeach ?>
						</h4>
						<address>
							<?php foreach ($query3 as $row) : ?>
									<?php if($row->id == 26) echo $row->data; ?>	
							<?php endforeach ?>
						</address>
						<h4>
							<?php foreach ($query as $row) : ?>
								<?php if($row->id == 31) echo $row->data; ?>	
							<?php endforeach ?>
						</h4>
						<address>
							<?php foreach ($query3 as $row) : ?>
									<?php if($row->id == 27) echo $row->data; ?>	
							<?php endforeach ?>
						</address>
					</div>

				</aside>
				<!-- /Sidebar -->

			</div>
		</div>	<!-- /contact -->
	</section>

<section class="no-padding" class="container-full top-space">
	<div id="map"></div>
</section>

	<footer class="no-padding" id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="container text-center">
								<?php foreach ($query as $row) : ?>
									<?php if($row->id == 47) echo $row->data; ?>	
								<?php endforeach ?>
							</p>
						</div>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>

	<!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/creative.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
	<script src="assets/js/google-map.js"></script>

</body>
</html>