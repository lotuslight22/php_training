<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>加強版水果字典</title>
	</head>
	<body>
		<h1>簡易字典查詢系統</h1>
		<p>親輸入要查詢的中文／英文單字：</p>
		<form method="POST" action="0324post.php">
			<input type="text" name="varinput" size="20" maxlength="20"><br>
			<input type="submit" value="送出查詢"><br>
		</form>
		<p>或直按瀏覽單字列表：</p>

		<?php
			foreach (range('A','Z') as $letter)
			{
				echo "<a href=" . $letter . ".php>" . $letter . "\t" . "</a>";
			}
		?>
	</body>
</html>
