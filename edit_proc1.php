<?PHP
include "dbcon1.php";
$subject = $_POST["subject"];
$pwd = $_POST["pwd"];
$content = $_POST["content"];
$num = $_POST["num"];
$sql = "UPDATE board SET subject = '$subject', pwd='$pwd', content='$content' WHERE num = '$num'";
if (mysqli_query($conn, $sql)) {
	echo("<script>location.replace('first.php');</script>");
		mysqli_close($conn);
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		mysqli_close($conn);
}
mysqli_close($conn);
?>
