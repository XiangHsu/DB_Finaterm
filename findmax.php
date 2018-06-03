<?php
    header("Content-Type:text/html; charset=utf-8");
    include("connect.php");
    $sql="SELECT kind FROM `click_times` ORDER BY times DESC LIMIT 1";
    $result=mysqli_query($con,$sql);
    $number_of_rows = mysqli_num_rows($result);
  
          $temp_array  = array();
  
          if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                          $temp_array[] = $row;
                          $data =$row;
                  }
              
              $first=$temp_array[0]['kind'];
              $sql2="Select * from food where kind='$first'";
              $result2=mysqli_query($con,$sql2);
                $number_of_rows = mysqli_num_rows($result2);
                
                $array  = array();
  
                if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result2)) {
                          $array[] = $row;
                          $data =$row;
                  }
              
         }
          }else{
			  echo "Failed";
		  }

    echo json_encode($array);
    mysqli_close($con);

?>
