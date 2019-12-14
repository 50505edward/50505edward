<?
 session_start();
?>
<!DOCTYPE HTML>
<head>
<meta charset = "utf--8">
<title>Information cars</title>
<style>
a.no-uline { text-decoration:none; }
div { border : 1px solid gray;}
#container{ width:700px;padding:0px;margin:0 auto;}
#header{padding:40px; margin-bottom:15px;}
#contents{width:700px;padding:0px;margin-bottom:0px}
#footer{padding:20px;}
div.images img{width:200px;}
</style>
<body>
	<div id="container">
		<div id="header">
			<? include "./lib/header.php"; ?>
		</div>
		<div class="images">
		<div id="contents" align="center">
			<? include "./lib/contents.php"; ?>
		</div>
		</div>
	</div>
<? include "./lib/car's inform.php"; ?>
</body>
</html>