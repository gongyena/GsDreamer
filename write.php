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
	<!--return false;는 form하는 이벤트를 취소(?)함-->
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
	<!--보낼 내용은 form안에 있는 것만 전송됨
	method="post"는 전송 방법임. get은 보내는 값을 다 보이게 post는 숨겨서 보냄!
	action="write_proc.php"은 어디다 보내는 가를 지정한거임 :> 
	onsubmit="return chk_form(this)" 에서 on은 이벤트(동작의 모든것) submit은 form안에 있는 값을
	보내는 이벤트임, ondrag는 드래그 했을 때! form안에 있는 값을 보내는 이벤트를 행했을 때 ""안의 함수를 실행하는 거임!
	chk_form는 그냥 함수 이름임.
	Y-m-d에서 y, m, d는 소문자, 대문자인가 에 따라 값이 달라지만 Y: 2018, y-18
	echo는 C언어로 치면 pritnf랑 비슷한 거임
	-->
	 <form method="post" action="write_proc.php" onsubmit="return chk_form(this)">
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
