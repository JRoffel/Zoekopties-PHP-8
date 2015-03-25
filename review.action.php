<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');

	$query = "select game.name as game_name, platform, developer.name as developer_name, publisher.name as publisher_name, grade, description, review.url as review_url, website.name as website_name from game left join game on review.game_id = game.id left join publisher on game.publisher_id = publisher.id left join developer on game.developer_id = developer.id left join website on review.website_id = website.id where game.id =".$_GET['game_id'].";";

	$review_result = $connection->query($query);
	$reviews = $review_result->fetch_all(MYSQLI_ASSOC);
?>