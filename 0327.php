<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>成績統計程式</title>
	</head>
	<body>
		<?php
			$checker = 0;

			if (isset($_POST['inputsubmit'])) {
				if (preg_match("/[^a-zA-Z]/", $_POST['inputname'])) {
					echo "學生姓名：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['inputid'])) {
					echo "學生學號：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (!filter_var($_POST['inputemail'], FILTER_VALIDATE_EMAIL)) {
					echo "Email：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['cnscore'])) {
					echo "國文成績：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['enscore'])) {
					echo "英文成績：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['mascore'])) {
					echo "數學成績：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['phscore'])) {
					echo "物理成績：無效的格式!" . "<br>";
					$checker = 1;
				}

				if (preg_match("/[^0-9]/", $_POST['chscore'])) {
					echo "化學成績：無效的格式!" . "<br>";
					$checker = 1;
				}

				if ($checker == 1) {
					echo "<a href=0327.php>" . "回上一頁繼續輸入成績" . "</a>";
					die();
				} else {
					$fileopen = fopen("0327db.txt", "a");
					$input = $_POST['inputname'] . "*" . $_POST['inputid'] . "*". $_POST['inputemail'] . "*" . $_POST['cnscore'] . "*" . $_POST['enscore'] . "*" . $_POST['mascore'] . "*" . $_POST['phscore'] . "*" . $_POST['chscore'] . ">>";
					$filewrite = fwrite($fileopen, $input);
					fclose($fileopen);

					echo "寫入完成！" . "<a href=0327.php>" . "回上一頁繼續輸入成績" . "</a>";
					die();
				}
			}
		?>

		<h1>成績統計程式</h1>
		<form method="POST" action="0327.php">
			<p>學生姓名：<input type="text" name="inputname" size="20" maxlength="20"></p><br>
			<p>學生學號：<input type="text" name="inputid" size="10" maxlength="8"></p><br>
			<p>Email：<input type="text" name="inputemail" size="30" maxlength="30"></p><br>
			<br>
			<p>國文成績：<input type="text" name="cnscore" size="3" maxlength="3"></p><br>
			<p>英文成績：<input type="text" name="enscore" size="3" maxlength="3"></p><br>
			<p>數學成績：<input type="text" name="mascore" size="3" maxlength="3"></p><br>
			<p>物理成績：<input type="text" name="phscore" size="3" maxlength="3"></p><br>
			<p>化學成績：<input type="text" name="chscore" size="3" maxlength="3"></p><br>
			<br>
			<input type="submit" name="inputsubmit" value="送出查詢">
		</form>
	</body>
</html>