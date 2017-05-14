<?php 
$dir = "images/";
$files = preg_grep('/^([^.])/', scandir($dir));
$i=1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>jQuery Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="header">
	<div id="menu">
		<h2>jQuery Portfolio</h2>		
	</div>
</div>
<div id="overlay"></div>
<div id="frame">
	<table id="frame-table">
		<tr>
			<td id="left">
				<img src="icons/left.png" alt="left">
			</td>
			<td id="right">
				<img src="icons/right.png" alt="right">
			</td>
		</tr>
	</table>
	<img id="main" src="" alt="">
	<div id="description">
		<p></p>
	</div>
</div>
<div id="wrapper">
	<ul id="portfolio">
	<?php foreach ($files as $file) { ?>
		<li><img id="<?php echo $i; ?>" src="<?php echo $dir."".$file; ?>" alt="img"></li>
	<?php $i++; } ?>
	</ul>
</div>

</body>
</html>