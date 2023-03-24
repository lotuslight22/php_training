<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>加強版水果字典</title>
	</head>
	<body>
	<?php
		$fruit[0] = array("a", "apple", "蘋果");
		$fruit[1] = array("b", "banana", "香蕉");
		$fruit[2] = array("c", "cherry", "櫻桃");
		$fruit[3] = array("d", "durian", "榴蓮");
		$fruit[4] = array("e", "elderberry", "接骨木漿果");
		$fruit[5] = array("f", "fig", "如圖");
		$fruit[6] = array("g", "grape", "葡萄");
		$fruit[7] = array("h", "honeydew melon", "蜜露瓜");
		$fruit[8] = array("i", "indian prune", "印度修剪");
		$fruit[9] = array("j", "jackfruit", "菠蘿蜜");
		$fruit[10] = array("k", "kiwi", "奇異果");
		$fruit[11] = array("l", "lychee", "刑事");
		$fruit[12] = array("m", "mango", "芒果");
		$fruit[13] = array("n", "nectarine", "油桃");
		$fruit[14] = array("o", "orange", "橘子");
		$fruit[15] = array("p", "papaya", "木瓜");
		$fruit[16] = array("q", "quince", "桲");
		$fruit[17] = array("r", "raspberry", "覆盆子");
		$fruit[18] = array("s", "strawberry", "草莓");
		$fruit[19] = array("t", "tomato", "番茄");
		$fruit[20] = array("u", "ugli fruit", "牙買加探戈");
		$fruit[21] = array("v", "vanilla bean", "香草豆");
		$fruit[22] = array("w", "watermelon", "西瓜");
		$fruit[23] = array("x", "ximenia", "西米亞");
		$fruit[24] = array("y", "yellow passion fruit", "黃色百香果");
		$fruit[25] = array("z", "zucchini", "夏南瓜");
		$x = 0;
		$j = "a";

		for ($i = 0; $i < sizeof($fruit); $i++)
		{
			foreach ($fruit[$i] as $values)
			{
				if (strtolower($_POST['varinput']) == $values)
				{
					header("location: $j.php");
					$x = 1;
					die();
				}
			}

			$j++;
		}

		if ($x == 0)
		{
			echo "水果字典中沒有 " . $_POST['varinput'] . " 這個單字.";
		}
	?>
	</body>
</html>