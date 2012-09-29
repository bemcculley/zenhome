<!DOCTYPE html>
<html>
	<head>
		<title>ZenHome</title>
		<!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>zenhome/public_html/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>zenhome/public_html/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>zenhome/public_html/css/layout.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?php echo base_url(); ?>zenhome/public_html/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>zenhome/public_html/bootstrap/js/bootstrap-dropdown.js"></script>
	</head>
	<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="<? echo base_url(); ?>dashboard">ZenHome</a>
			<ul class="nav">
				<?
					if( isset( $menu ) ){
						foreach ( $menu as $item ) {
							?>
							<li><a href="<?php echo base_url() . $item[1]; ?>"><? echo $item[0]; ?></a></li>
							<?
						}
					}
				?>

			</ul>
		</div>
	</div>
