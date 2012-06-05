<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>FuelPHP Framework</title>
<?php  echo Asset::css('bootstrap.css'); ?>
<?php  echo Asset::js(array('jquery.js','bootstrap.js','bootstrap-dropdown.js')); ?>
</head>
<body>
<div id="header">
	<div class="row">
		<div id="logo">
		</div>
	</div>
</div>
<div class="container">
	<div id="navbar" class="navbar navbar-static">
		<div class="navbar-inner">
			<div class="container" style="width: auto;">
				<a class="brand" href="#">Project Name</a>
				<ul class="nav">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
					</li>
				</ul>
				<ul class="nav pull-right">
					<li id="fat-menu" class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /navbar -->
	<ul class="breadcrumb">
		<li>
		<a href="#">Home</a><span class="divider">/</span>
		</li>
		<li>
		<a href="#">Library</a><span class="divider">/</span>
		</li>
		<li class="active">Data</li>
	</ul>
	<div class="hero-unit">
		<h1>Welcome!</h1>
		<p>
			You have successfully installed the FuelPHP Framework.
		</p>
		<p>
			<a class="btn primary large" href="http://docs.fuelphp.com">Read the Docs</a>
		</p>
	</div>
	<div class="row">
		<div class="span-one-third">
			<h2>Get Started</h2>
			<p>
				The controller generating this page is found at <code>APPPATH/classes/controller/welcome.php</code>.
			</p>
			<p>
				This view can be found at <code>APPPATH/views/welcome/index.php</code>.
			</p>
			<p>
				You can modify these files to get your application started quickly.
			</p>
		</div>
		<div class="span-one-third">
			<h2>Learn</h2>
			<p>
				The best way to learn FuelPHP is reading through the <a href="http://docs.fuelphp.com">Documentation</a>.
			</p>
			<p>
				Another good resource is the <a href="http://fuelphp.com/forums">Forums</a>. They are fairly active, and you can usually get a response quickly.
			</p>
		</div>
		<div class="span-one-third">
			<h2>Contribute</h2>
			<p>
				FuelPHP wouldn't exist without awesome contributions from the community. Use the links below to get contributing.
			</p>
			<ul>
				<li><a href="http://docs.fuelphp.com/general/coding_standards.html">Coding Standards</a></li>
				<li><a href="http://github.com/fuel/fuel">GitHub Respository</a></li>
				<li><a href="http://fuelphp.com/contribute/issue-tracker">Issue Tracker</a></li>
			</ul>
		</div>
	</div>
	<footer>
	<p class="pull-right">
		Page rendered in {exec_time}s using {mem_usage}mb of memory.
	</p>
	<p>
		<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
		<small>Version: <?php  echo e(Fuel::VERSION); ?>
		</small>
	</p>
	</footer>
</div>
<script>
$('.dropdown-toggle').dropdown();
</script>
</body>
</html>