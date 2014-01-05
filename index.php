<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Science Meets Business</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="wrapAll">
		<? if (empty($_GET['thanks'])): ?>
			<div>
				<p>
					here is some text here is some text here is some text here is some text
					here is some text here is some text
					here is some text here is some text
					here is some text here is some text
				</p>
				<form action="subscribe.php" method="post">
					<input type="text" name="email" placeholder="E-mail" />
					<input type="submit" name="submit" value="Subscibe" />
				</form>
			</div>
		<? else: ?>
			<div>
				<p>
					Thanks for subscribing!
				</p>
			</div>
		<? endif; ?>
	</div>
</body>

</html>