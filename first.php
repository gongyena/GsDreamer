<html>
<head>
<meta charset="utf-8">
<title>진학정보</title>
</head>

<body bgcolor="#000000">
<font size="10" color="#EAEAEA" face="궁서"><center><u>진학정보</u></center></font><br><br><br>
<body>
  <center>
    <table border="1">
	    
			<tr><font size="2" color="#FFFFFF" face="HY나무">
				<th>번호</th>
				<th>제목</th>
				<th>작성자</th>
				<th>날짜</th>
				<th>조회수</th>
			</font></tr>
<?php
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
?>
			<tr><font size="2" color="#FFFFFF" face="HY나무">
				<td><?php echo $row["num"];?></td>
				<td><a href="view1.php?num=<?php echo $row["num"];?>">
					<?php echo $row["subject"];?></a>
				</td>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["w_date"];?></td>
				<td><?php echo $row["view"];?></td>
			</font>></tr>
<?php
		}
} else {
	echo "<tr><td colspan='5'>0 results</td></tr>";
}
?>
			<tr><font size="2" color="#FFFFFF" face="HY나무">
				<td colspan="5">
						[1][2][3][4][5][6][7][8][9][10]
				</td>
			</font></tr>
			<tr><font size="2" color="#FFFFFF" face="HY나무">
				<td colspan="5"><a href="write1.php">글쓰기</a> </td>
			</font></tr>
		    
		</table></center>

</body>
</html>
