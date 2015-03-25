<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php foreach($reviews as $review): ?>
<html>
	<head>
		<title> metacritic </title>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
<body>
<div class="container">
		<div class="header"> 
			<h1> Metacritic </h1>
		</div>
		<h2><?= $review['game_name'] ?></h2>
		<ul class="naam">
			<li>Platform: <?= $review['platform'] ?></li>
			<li>Ontwikkelaar: <?= $review['developer_name'] ?></li>
			<li>Uitgever: <?= $review['publisher_name'] ?></li>
			<li>Reviews by website: <?= $review['website_name'] ?></li>
		</ul>
		<ul>
			<li>Grade: <?= $review['grade'] ?></li>
			<li><?= $review['description'] ?></li>
			<li><a href="<?= $review['review_url'] ?>">lees meer</a></li>
		</ul>
		<hr>
	</div>
</body>
</html>
<?php endforeach; ?>