<?php
include_once('Models/UserModel.php');
$User=new User($_POST['UserName'],$_POST['Password'],$_POST['Email']);
$err=$User->intoDb();
			if($err)
			{
			  echo "<h3/><span style='color:red;'> Error code:".$err."!</span><h3/>"; 
		   }
	else
{
	echo'<div class="text-success">User was added Successfull </div>';

}

?> 
