<?php 
require_once '../salima/Database/init.php';
$user_name = $_POST["user_name"];
$user_password = $_POST["password"];
session_start();
$_SESSION['username']=$user_name;
$_SESSION['password']=$password;

if($con)
{
    $sql = "select name from user_info where user_name='$user_name' and password ='$user_password'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0)
    {
         $row = mysqli_fetch_assoc($result);
         $status = "ok";
         $result_code = 1;
         $name = $row['name'];
        // $_SESSION['name']=$name;
         header('location:http://localhost/salima/add_car.php');
         //echo json_encode(array('status'=>$status,'result_code'=>$result_code,'name'=>$name));

    }
    else
    {
         $status = "ok";
         $result_code = 0;
         
         echo json_encode(array('status'=>$status,'result_code'=>$result_code));

    }
}

else
{
    $status = "failed";
    echo json_encode(array('status'=>$status),JSON_FORCE_OBJECT);
}
mysqli_close($con);
    
?>
