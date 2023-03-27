<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>加強版水果字典</title>
	</head>
	<body>
		<?php
		
		$fruit = array(
			"a" => array("apple" => "蘋果"),
			"b" => array("banana" => "香蕉"),
			"c" => array("cherry" => "櫻桃"),
			"g" => array("grape" => "葡萄"),
			"m" => array("mango" => "芒果"),
			"o" => array("orange" => "橘子"),
			"s" => array("strawberry" => "草莓"),
			"t" => array("tomato" => "番茄"),
			"w" => array("watermelon" => "西瓜")
		);

		$x = 0;

		if (isset($_GET['word'])) {
			foreach ($fruit as $value => $desc) {
				foreach ($desc as $en => $cn) {
					if ($_GET['word'] == $value) {
						echo "<h1>" . strtoupper($value) . ":</h1>";
						echo "<p>" . $en . ": " . $cn . "</p>";
						$x = 1;
						die();
					}
				}
			}
		}

		if (isset($_POST['submitbtn'])) {
			foreach ($fruit as $value => $desc) {
				foreach ($desc as $en => $cn) {
					if (strtolower($_POST['varinput']) == $value || strtolower($_POST['varinput']) == $en || $_POST['varinput'] == $cn) {
						echo "<h1>" . strtoupper($value) . ":</h1>";
						echo "<p>" . $en . ": " . $cn . "</p>";
						$x = 1;
						die();
					}
				}
			}

			if ($x == 0) {
				echo "水果字典中沒有 " . $_POST['varinput'] . " 這個單字.";
				die();
			}
		}
		?>

		<h1>簡易字典查詢系統</h1>
		<p>親輸入要查詢的中文／英文單字：</p>
		<form method="POST" action="0324.php">
			<input type="text" name="varinput" size="20" maxlength="20"><br>
			<input type="submit" name="submitbtn" value="送出查詢"><br>
		</form>
		<p>或直按瀏覽單字列表：</p>

		<?php
		foreach (range('A','Z') as $letter) {
			$y = 0;

			foreach($fruit as $value => $desc) {
				if (strtolower($letter) == $value) {
					$y = 1;
					echo "<a href=0324.php?word=" . strtolower($letter) . ">" . $letter . "</a>";
				}
			}

			if ($y == 0) {
				echo $letter;
			}
		}
		?>
	</body>
</html>