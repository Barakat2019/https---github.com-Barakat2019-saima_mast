<?php 
$user_name = 'barakat';
$user_password = 'Admin123';
$name ='barakat akrashdan';

require 'init.php';
if($con)
{
	$sql = "select * from user_info where user_name='user_name'";
	$result = mysqli_query($con,$sql);
	
	print_r(mysqli_num_rows($result));
	echo "<br>";
	if(mysqli_num_rows($result)>0)
	{
		$status = "ok";
		$result_code =0;
		echo json_encode(array('status'=>$status,'result_code'=>$result_code));

	}
	else
	{
		$sql = "insert into user_info(name,user_name,password) values('$name','$user_name','$user_password')";
		if(mysqli_query($con,$sql))
		{
			$status = "ok";
			$result_code =1;
		    echo json_encode(array('status'=>$status,'result_code'=>$result_code));
		}
		else
		{
			$status = "failed";
		    echo json_encode(array('status'=>$status),JSON_FORCE_OBJECT);
		}

		
	}

}
else
{
	$status = "failed";
			$result_code =1;
		    echo json_encode(array('status'=>$status),JSON_FORCE_OBJECT);
}
mysqli_close($con);
?>
