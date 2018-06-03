<?php
    header("Content-Type:text/html; charset=utf-8");
    include("connect.php");
    $kind=$_POST['kind'];
    $sql="SELECT times FROM `click_times` where kind='$kind'";
    $result=mysqli_query($con,$sql);
    $number_of_rows = mysqli_num_rows($result);
  
          $temp_array  = array();
  
          if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                          $temp_array[] = $row;
                          $data =$row;
                  }
              
              $second=$temp_array[0]['times']+1;
              $sql2="UPDATE `click_times` SET `times`='$second' where kind='$kind'";
              //$result2=mysqli_query($con,$sql2);
              //$number_of_rows = mysqli_num_rows($result2);
                if ($con->query($sql2) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $con->error;
                    }
              
         
          }else{
			  echo "Failed";
		  }
    //echo json_encode(array("data"=>$temp_array));
    //echo json_encode($array);
    //echo json_encode($kind);
    mysqli_close($con);

?>
