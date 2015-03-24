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
					<option value="1">Dragon Age: Origins</option>
					<option value="2">Professor Layton and the Curious Village</option>
					<option value="3">Braid</option>
					<option value="4">Damnation</option>
					<option value="5">Mass Effect</option>
					<option value="6">LittleBigPlanet</option>
					<option value="7">Overlord</option>
				</select>
			</p>
			<p>
				<label>website:</label>
				<span class="options">
					<input type="radio" name="website_id" value="1" /><label>IGN</label><br/>
					<input type="radio" name="website_id" value="2" /><label>Eurogamer</label><br/>
					<input type="radio" name="website_id" value="3" /><label>Game Informer</label><br/>
					<input type="radio" name="website_id" value="4" /><label>VideoGamer</label><br/>
					<input type="radio" name="website_id" value="5" /><label>GameSpot</label><br/>
					<input type="radio" name="website_id" value="6" /><label>Absolute Games</label><br/>
					<input type="radio" name="website_id" value="7" /><label>Vandal Online</label><br/>
					<input type="radio" name="website_id" value="8" /><label>GameShark</label><br/>
					<input type="radio" name="website_id" value="9" /><label>1UP</label><br/>
				</span>
			</p>
			<input type="submit" value="verstuur" />
		</form>
	</div>
</body>
</html>
