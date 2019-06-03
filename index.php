<!DOCTYPE html><html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tool get link ảnh Viễn thám - soiqualang_chentreu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <script src="lib/modernizr-2.6.2.min.js"></script>
        <script src="lib/jquery-1.9.1.min.js"></script>
        <script src="lib/jquery.cookie-1.3.1.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="build/jquery.steps.js"></script>
		<!--date picker-->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		
		<script src="lib/redrose.js"></script>
		<style>
			section{
				overflow-y: scroll;
			}
		</style>
    </head>
    <body>
	<div class="container">
        <h1>Tool get link ảnh Viễn thám</h1>
		&#169; 2018 - <a href="https://dothanhlong.org/" target="_blank">soiqualang_chentreu</a>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Get Links</a></li>
			<li><a data-toggle="tab" href="#menu1">Hướng dẫn</a></li>
		</ul>
        <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		  <h3>Download link..</h3>
		  <?php include('tab1.html');?>
		</div>
		<div id="menu1" class="tab-pane fade">
		  <h3>Hướng dẫn sử dụng</h3>
		  <?php include('hd.html');?>
		</div>
	</div>
    </body>
</html>