<?php
   $host="120.108.111.85"; //你資料庫的位置
   $username="databasefinal"; //帳號
   $password="data";//密碼
   $db="104021042"; //資料庫名稱
   $con=mysqli_connect($host, $username, $password, $db);
   
?>

<html>
	<head>
		<title>Shopping Mall</title>
	</head>
	<body>
		<p>Suggestions: <span id="txtHint"></span></p>
	</body>
	<script>
		var data = <?php echo json_encode($json_data) ?>
	</script>
</html>