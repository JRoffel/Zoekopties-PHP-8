<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
	$query = '';
	$result = $connection -> query($query);
	$stuff = $result -> fetch_all(MYSQLI_ASSOC);
	