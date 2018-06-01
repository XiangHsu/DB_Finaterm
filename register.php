<?php
    header("Content-Type:text/html; charset=utf-8");
   $host="120.108.111.85"; //你資料庫的位置
   $username="databasefinal"; //帳號
   $password="data";//密碼
   $db="104021042"; //資料庫名稱
   $con=mysqli_connect($host, $username, $password, $db);
if(isset($_POST['txtemail']) && isset($_POST['txtusername']) && isset($_POST['txtpassword']) && isset($_POST['txtaddress'])){
    $id=$_POST['txtemail'];
    $name=$_POST['txtusername'];
    $pwd=$_POST['txtpassword'];
    $address=$_POST['txtaddress'];
    $sql = "INSERT INTO database_user VALUES ('$id','$name','$pwd', '$address')";
if ($con->query($sql) === TRUE) { 
    //echo "success";
    $url = "login.html";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>"; 
  } else { 
    echo "ErrorInsert"; 
    echo "Error: " . $query . "<br>" . $con->error;
    $url = "register.html";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>"; 
  }
}else{
   echo "Failed";
}
?>
