<?php
include "dbcon1.php";
$num = $_GET["num"];  //넘어온 인수(글번호)
$sql = "DELETE FROM board WHERE num=$num";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<script>
		location.replace('first.html');
</script>
