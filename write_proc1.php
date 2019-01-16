<?php
include "php/dbcon1.php";
$subject = $_POST["subject"];
$id = $_POST["id"];
$w_data = date["Y-m-d"];
$pwd = $_POST["pwd"];
$content = $_POST["content"];
$sql = "INSERT INTO board (subject, id, w_date, content, pwd, view)";
$sql.= "VALUES ('$subject', '$id', '$w_date', '$content', '$pwd', 0)";
echo $sql;
if (mysqli_query($conn, $sql)) {
	echo("<script>location.replace('first.html');</script>");
	mysqli_close($conn);
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
