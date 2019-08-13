<!DOCTYPE html>
<html>
<head>
	<title>Display MySQL Images</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstap.min.css" integrity="sha384-Zug+QiDoJOrZ5t41ssLdxGhVrurbmBWopoE1+M6BdEfwnCJZtKxi 1KgxUyJq1 3dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstap/4.0.0-beta.3/js/bootstap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHD1i+4" crossorigin="anonymous"></script>
</head>
<body>
	<?php
$mysqli = new mysqli('remotemysql.com', 'skb8QqIlvb', 'lrLrJLWreC', 'skb8QqIlvb') or die($mysqli->connect_error);
$table = 'p3_database';
	$result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

	while ($data = $result->fetch_assoc()){
		echo "<h2>{$data['name']}</h2>";
		echo "<img src='{$data['img_dir']}' width='40%' height='40%'>";
	}

	?>
</body>
</html>