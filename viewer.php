<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Averigua que significa tu nombre</title>
	<meta property="og:title"
	content="!Ven y averigua que significa tu nombre!" />
	<meta property="og:description" content="Acabo de descubrir el significado de mi nombre ven tu tambien y descubre el tuyo" />
	<meta property="og:site_name" content="No esperes mas,ya tus amigos lo estan haciendo,
	ven y averigua cuales son las cualidades con las que esta relacionado tu nombre"/>
	<meta property="article:author" content="https://www.facebook.com/cgomezmendz" />
	<meta property="og:image"
	content="image.php?name=<?php echo $name ?>&amp;gender=<?php echo $gender ?>" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<meta name="tags" content="significado de mi nombre,nombre significado,nombre, descripcion nombre,nombre,facebook, descubre, nombre, significado, amigos, compartir, face, nombres">
	<link href="bootstrap-social.css" rel="stylesheet" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
	<style>

	</style>
</head>
<body>
	<div class="container">

		<div class="container">
			<img class="img-responsive" src="image.php?name=<?php echo $name ?>&amp;gender=<?php echo $gender ?>" title="<?php echo $name ?>" alt="<?php echo $name ?>" />
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="index.php"><button type="button" class="btn btn-primary">Averigua el significado de tu nombre</button></a></br>
					<div class="fb-container">
					  <a
   class="btn btn-default"
   href="http://www.facebook.com/sharer.php?u=http://<?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] ?>&t=Acabo%20de%20descubrir%20el%20significado%20de%20mi%20nombre%20ven%20tu%20tambien%20y%20descubre%20el%20tuyo"
>
   <i class="fa fa-thumbs-o-up fa-lg fb">Compartelo con tus amigos de facebook</i>
</a>


<a
   class="btn btn-default"
  target="_blank" href="http://www.facebook.com/plugins/like.php?href=http://<?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] ?>"
>
   <i class="fa fa-thumbs-o-up fa-lg fb">Dale Like</i>
</a></br>


<a
   class="btn btn-default"
   href="http://twitter.com/share?url=http://<?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] ?>&text=Acabo%20de%20descubrir%20el%20significado%20de%20mi%20nombre%20ven%20tu%20tambien%20y%20descubre%20el%20tuyo&via=cgomezmendez"
>
   <i class="fa fa-twitter fa-lg tw">Compartelo en twitter</i>
</a>




					<div>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- nombre add -->
					<ins class="adsbygoogle"
					style="display:inline-block;width:728px;height:90px"
					data-ad-client="ca-pub-8641396055197409"
					data-ad-slot="4768349572"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					
			</div>
		</div>
		<script type="text/javascript">
						( function() {
							if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
							var unit = {"calltype":"async[2]","publisher":"cgomezmendez","width":550,"height":250,"sid":"Chitika Default"};
							var placement_id = window.CHITIKA.units.length;
							window.CHITIKA.units.push(unit);
							document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
						}());
					</script>
				</div>
				<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
	</div>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-52750745-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>