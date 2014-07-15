<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=163677820481120&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="container">
		<img class="img-responsive" src="image.php?name=<?php echo $name ?>&amp;gender=<?php echo $gender ?>" title="<?php echo $name ?>" alt="<?php echo $name ?>" />
		<div class="fb-share-button" data-href="http://<?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] ?>"></div>
		<div class="panel panel-default">
			<div class="panel-body">
			   <a href="index.php"><button type="button" class="btn btn-primary">Averigua el significado de tu nombre</button></a>
			</div>
		</div>
	</div>
</body>
</html>