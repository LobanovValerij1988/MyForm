
 <?php 

class User
{
static function connectToDb(
	$dbHost="localhost",
	$dbUser="root",
	$dbPass="root",
	$dbName="usersdb",
	$dbTable="users")
	{
		$cs='mysql:host='.$dBHost.';dbname='.$dbName.';charset=utf8;';
		$options=array(
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,  PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'  );  
		try {
			$pdo=new PDO($cs,$dbUser,$dbPass,$options); 
			return $pdo;  
		   } 
		catch(PDOException $e)
		{  
		 echo $e->getMessage();
		 return false;  
		}
	}
	
protected $email;
protected $password;
protected $userName;
protected $id;
protected $error;

	function __construct($userName ,$password, $email,$id=0 ) 
{      $this->id=$id;
	   $this->error="";
     
      $this->SetUserName($userName);
	   $this->SetPassword($password);
	   $this->SetEmail($email);   	   
}

	public function SetUserName($userName)
{
	    if(strlen($userName)<3||strlen($firstName)>25)
		{
			$this->error.="UserName cannot be more than 25 and less than 1 <br>";
		}
      	$this->userName=$userName;
}
	public function SetPassword($password)
{
	    if(strlen($password)<5||strlen($password)>25)
		{
			$this->error.="Password cannot be more than 25 and less than 5 <br>";
		}
     
		$this->password=$password;
}

	public function SetEmail($email)
{
	   $this->email=$email;
	   if (!preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $email)) 
		{
			$this->error.="incorrect email<br>";
		    return;
 
	    } 
}
public function GetEmail()
{
	 return  $this->email;	 
}	
public function GetUserName()
{
 return   	$this->userName; 
}	
public function GetPassword()
{
 return 	$this->password;
}	
public function GetId()
{
 return 	$this->id;
}
    function IntoDb() 
	{
		if(strlen($this->error)>0)
		{
			return $this->error;
		}
		try{ 
			
			if(!$pdo=User::connectToDb())
			   {
				   return "error connection";
			   }
			echo "Pass=".$this->password;
			$hash = password_hash($this->password, PASSWORD_BCRYPT);
			$ps=$pdo->prepare("INSERT INTO     Users(UserName ,Email,Password)
			VALUES (:UserName,:Email,:Password)");			
			$ps->execute(array(UserName=>$this->userName,Email=>$this->email, Password=>$hash));			              
		}
		catch(PDOException $e)
		{					
			return $e->getMessage();  
		}
	}
	static function findUser($UserName,$password)
	{
		try
		{
			$pdo=User::connectToDb();
			$list=$pdo->query('select Password From Users where UserName="'.$UserName.'"');
				if($row=$list->fetch()) 
			 {
				if(password_verify($password,  substr( $row['Password'], 0, 60 ))) {
						return true; 
					}

			 }
			return false;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();  
			return false;
		}
	
    }
	
}
?>