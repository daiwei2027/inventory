<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="left">
		<?php
		require "common.php";
		?>
	</div>
	<?php
	$id = $_GET["id"];

	$sql = 'SELECT * FROM category WHERE id=' . $id;
	$result = $conn->query($sql);
	$row = $result->fetch_row();
	?>
	<div id="right">
		<form action="modifyCategory.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			分类名：<input type="text" name="name" value="<?php echo $row[1]; ?>"><br>
			<input type="submit"><br>
			<input type="reset">
		</form>
	</div>
</body>

</html>
