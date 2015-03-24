<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
	$query = 'select game.id as game_id, game.name as game_name from game';
	$result = $connection -> query($query);
	$stuffs = $result -> fetch_all(MYSQLI_ASSOC);

	$website_query = 'select id, name from website;';
	$website_result = $connection -> query($website_query);
	$websites = $website_result -> fetch_all(MYSQLI_ASSOC);
