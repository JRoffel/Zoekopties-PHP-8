<?php
	require'index.action.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
		<form action="review.php">
			<p>
				<label>Spel:</label>
				<select name="game_id">
				<?php foreach($stuffs as $stuff): ?>
					<option value="<?= $stuff['game_id']?>"><?= $stuff['game_name']?></option>
				<?php endforeach; ?>
				</select>
			</p>
			<p>
				<label>website:</label>
				<span class="options">
				<?php foreach($websites as $website): ?>
					<input type="radio" name="website_id" value="<?=$website['id']?>" /><label><?=$website['name']?></label><br/>
				<?php endforeach; ?>
				</span>
			</p>
			<input type="submit" value="verstuur" />
		</form>
	</div>
</body>
</html>