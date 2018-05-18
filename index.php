<?php
   $host="120.108.111.85"; //你資料庫的位置
   $username="databasefinal"; //帳號
   $password="data";//密碼
   $db="104021042"; //資料庫名稱
   $con=mysqli_connect($host, $username, $password, $db);
    $sql="SELECT name FROM `database_product`";
    $result=mysqli_query($con,$sql);
    $number_of_rows = mysqli_num_rows($result);
  
          $temp_array  = array();
  
          if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                          $temp_array[] = $row;
                  }
         }else{
			  echo "Failed";
		  }
    //echo json_encode(array("data"=>$temp_array));
	$data = json_encode($temp_array);
	echo json_encode($data);
    mysqli_close($con);

?>

<html>
	<head>
		<title>Shopping Mall</title>
	</head>
	<body>
		<div>
			<ul>
				
			</ul>
	</body>
	<script>
		var data = <?php echo json_encode($json_data) ?>
	</script>
</html>