<?php
    header("Content-Type:text/html; charset=utf-8");
   $host="120.108.111.85"; //你資料庫的位置
   $username="databasefinal"; //帳號
   $password="data";//密碼
   $db="104021042"; //資料庫名稱
   $con=mysqli_connect($host, $username, $password, $db);
    $sql="SELECT * FROM `food` INNER JOIN click_times on food.kind=click_times.kind ORDER BY click_times.times DESC";
    $result=mysqli_query($con,$sql);
    $number_of_rows = mysqli_num_rows($result);
  
          $temp_array  = array();
  
          if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                          $temp_array[] = $row;
                          $data =$row;
                      //echo $row["total"];
                  }
         }else{
			  echo "Failed";
		  }
    //echo json_encode(array("data"=>$temp_array));
    echo json_encode($temp_array);
    mysqli_close($con);

?>
