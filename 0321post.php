<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>簡易字典查詢系統</title>
	</head>
	<body>
	<?php
		$dict = array('apple', 'orange', 'watermelon', 'strawberry', 'pineapple');
		$ans = array('蘋果', '橘子', '西瓜', '草莓', '鳳梨');
		$x = 0;
		
		for ($i = 0; $i < sizeof($dict); $i++)
		{ 
			if ($_POST['varinput'] == $dict[$i])
			{
				echo "<table>";
					echo "<tr>";
						echo "<td>" . "英文" . "</td>";
						echo "<td>" . "中文" . "</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>" . $dict[$i] . "</td>";
						echo "<td>" . $ans[$i] . "</td>";
					echo "</tr>";
				echo "</table>";
				$x = 1;
			}
		}

		if ($x == 0)
		{
			echo "水果字典中沒有 " . $_POST['varinput'] . " 這個單字.";
		}
	?>
	</body>
</html>