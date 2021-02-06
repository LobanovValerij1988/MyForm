<?php
include_once('Models/UserModel.php');
		if(User::findUser($_POST['name'],$_POST['code']))
			{
			echo'<div class="text-success">User was found </div>';  
			
		   }
	else
{
	echo "<h3/><span style='color:red;'>incorect login or password</span><h3/>"; 

}

?> 
