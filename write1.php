<html lang="ko">
	<head>
		<meta charset="utf-8">
		<style type="text/css"> 
			table{
				border-collapse:collapse;
			}
			td{
				border:1px solid #123456;
			}
			#content{
				height:400px;
				vertical-aling:top;
			}
		</style>
	<script>
		function chk_form(obj){
			if(obj.subject.value==""){
				alert("제목을 입력하세요");
				return false;
			}
			if(obj.id.value==""){
				alert("작성자를 입력하세요");
				return false;
			}
			if(obj.pwd.value==""){
				alert("비밀번호를 입력하세요");
				return false;
			}
			if(obj.content.value==""){
				alert("내용을 입력하세요");
				return false;
			}
			return true;
		}
	</script>		
	</head>
	<body>
	 <form method="post" action="write_proc1.php" onsubmit="return chk_form(this)">
		<table border="1">
			<tr>
				<td>제목</td>
				<td colspan="3">
					<input type="text" name="subject">
				</td>
			</tr>
			<tr>
				<td>작성자</td>
				<td><input type="text" name="id"></td>
				<td>날짜</td>
				<td>
					<input type="text" name="date" value="<?echo date("Y-m-d");?>" readonly>
					</td>
			</tr>
			<tr>
				<td>비밀번호</td>
				<td><input type="password" name="pwd"></td>
				<td>ip주소</td>
				<td><input type="text" value="<?echo $_SERVER{'REMOTE_ADDR'};?>" readonly></td>
			</tr>
			<tr>
				<td>내용</td>
				<td colspan="3">
				 <textarea rows="20" cols="100" name="content"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<input type="submit" value="작성">
					<input type="reset" value="취소">
				</td>
			</tr>
		</table>
	 </form>
	</body>
</html>
