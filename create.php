<!doctype html>
<html>
	<head>
		<title>My Blog</title>
	</head>
	<body>
		<?php require_once('nav.php');?>
		<section>
			<h2>Write a story</h2>
			<form action="process.php" method="post">
				<label>Title<br>
					<input type="text" name="title">
				</label>
				<br><br>
				<label>Category<br>
					<input type="text" name="cat">
				</label>
				<br><br>
				<label>Article<br>
					<textarea name="article"></textarea>
				</label>
				<br><br>
				<input type="submit" value="Post Story">
			</form>
		</section>
		<hr>
	</body>
</html>