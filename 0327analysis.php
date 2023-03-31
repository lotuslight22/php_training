<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>成績統計程式</title>
	</head>
	<body>
	<?php
		$fileopen = fopen("0327db.txt", "r");
		$data = fread($fileopen, filesize("0327db.txt"));

		$student = explode(">>", $data);
		$realinfo = array();
		foreach ($student as $index => $info) {
  			$temp = explode("*", $info);
  			$total = ($temp[3] + $temp[4] + $temp[5] + $temp[6] + $temp[7]);
    		$average = ($temp[3] + $temp[4] + $temp[5] + $temp[6] + $temp[7])/5;
   			$temp[] = $total;
   			$temp[] = $average;
    		$realinfo[] = $temp;
		}

		function compare($a, $b) {
    		return $b[9] - $a[9];
		}

		usort($realinfo, "compare");

		echo "<table><tr>
    	<td>名次</td>
    	<td>姓名</td>
    	<td>學號</td>
    	<td>Email</td>
    	<td>國文</td>
    	<td>英文</td>
    	<td>數學</td>
    	<td>物理</td>
    	<td>化學</td>
    	<td>總分</td>
    	<td>平均分數</td></tr>";

		foreach ($realinfo as $index => $info) {
    		echo "<tr><td>" . ($index+1) . "</td>";
    		foreach ($info as $i => $k) {
        		echo "<td>" . $k . "</td>";
    		}
    		echo "</tr>";
		}

		echo "</table>";

		fclose($fileopen);
	?>
	</body>
</html>