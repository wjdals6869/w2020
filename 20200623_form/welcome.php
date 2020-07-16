<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
</head>
<body>
	<?  ?> <!-- php 프로그램의 시작과 끝 -->
	<? echo "안녕하세요" ?><!--  문자/변수 화면출력 -->
	<? $name ="박정민" ?> <!-- 변수지정 -->
	<? echo $name; ?><!--  name변수의 데이터를 화면에 출력 -->

	<?
	$na = $_GET["name"];
	$mail = $_GET["mail"];
	?>

	<p>
	   이름 : <? echo $na;?>
	   이메일 : <? echo $mail;?>
	</p>
</body>
</html>