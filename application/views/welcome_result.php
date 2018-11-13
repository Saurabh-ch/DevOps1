<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dubaria</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.theme.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
<div id="header">
	
</div>
<div class="container">
	<div class="row">
		<p>Thank you for using our services. We've booked your ticket with the followig details</p>
	</div>
	<div class="row">
		<table class="table">
			<tr>
				<td><em>Email</em></td>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<td><em>Room</em></td>
				<td><?php echo $room ?></td>
			</tr>
			<tr>
				<td><em>Day</em></td>
				<td><?php echo $day ?></td>
			</tr>
		</table>
	</div>
	<div class="row">
		<button type="button" id="back" class="btn btn-primary">Make new booking</button>
	</div>
</div>

</body>
</html>
