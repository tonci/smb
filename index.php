<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Science Meets Business</title>
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="wrapAll">
		<? if (empty($_GET['thanks'])): ?>
			<div>
				
<p>
Business is taking a lot from the science, but doesn't give so much in return.
We can make that happen! Join us today and help the science go further and further.
<a href="#full_story" class="fancybox">Read More...</a>
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
	<div id="full_story" style="width: 600px;display:none;">
					<p>I lot of people think of the science like something far away from what we really are.<br />
				A person can live without having much to know about the world, about math, about chemistry or physics. <br />
				Is this true? ... NO!<br />
				The science makes our life easier and better, The science is the one responsible for the future inventions that are changing the way we live and helping the business stays at the top of its glory.
				</p>

				<p>
				Isn't it the business that has taken the electrical current from the science and has made the light bulb and the switches on every house wall affordable for everyone? Or, isn't it the business that is bringing the computers and oprating systems as we know them today?
				</p>
				<p>
				Business is taking a lot from the science, but doesn't give so much in return.
				We can make that happen! Join us today and help the science go further and further.
				</p>
				</div>
</body>

</html>