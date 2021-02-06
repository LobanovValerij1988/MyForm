<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Document</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" >
     <link rel="stylesheet" type="text/css" href="css/style1.css"/>
</head>
<body>
   <div class="circle" id="circle1"></div>
   <div class="circle" id="circle2"></div>
   <div class="circle" id="circle3"></div>
   <div class="circle" id="circle4"></div>
   <div class="circle" id="circle5"></div>
   <div class="circle" id="circle6"></div>
   <div class="circle" id="circle7"></div>
   <div class="circle" id="circle8"></div>
   <div class="circle" id="circle9"></div>
   <div class="circle" id="circle10"></div>
   <div class="circle" id="circle11"></div>
   <div class="FontFamily" id="signature"> Login To Your Account / Register New</div>
   <div id="Form">
   <div id="headform">
 		<div class="circle" id="circle12"></div>
 		<div class="FontFamily" id="signature1"> Login To Your Account / Register New</div>
   </div>
   
   <div id="mainform">
   		<div class="container">
   			<div class="row">
			  <div class="col-sm-5 col-md-5 col-lg-5 "  >
			      <div id="block">
			       <hr class="line">
			      <div class="circle" id="circle13"></div>
			      <hr class="line">
				 </div>
		          <form  action="server/UserExists.php" method="POST" class="needs-validation " novalidate>
			         <div class="form-group " >
					<input name="name" type="text" placeholder="User Name" class="form-control form-control-lg" minlength="2" maxlength="25" required>
					 <div class="invalid-feedback">
                     Name can contain more than 2 symball.
                    </div>
					</div>
				    <br/>
		       		 <div class="form-group">
						<input name="code" type="password" placeholder="Password" class="form-control form-control-lg" maxlength="25" minlength="2" required>
						 <div class="invalid-feedback">
						 Enter a valid password.
						</div>  
					</div>
					<div class="form-check" >
					<label class="form-check-label"   data-html="true" data-toggle="tooltip" data-placement="bottom" title="<div class='White'> Yuo no longer need to enter  a password every time use the site data.</div>" >
						<input type="checkbox" class="form-check-input" disabled> 	
						<small class="text-muted SmallFont  FontFamily" >Remember my password </small> 
					</label>
                     
                    <input type="submit" class="btn FontFamily MyBtn" id="btnLog" value=" Login  "> 
				  
				  </div>
				  </form>
				</div>
 		         <div class="col-sm-1 col-md-1 col-lg-1 "  >
				<div class="vl"></div>
 		        </div>
  		        <div class="col-sm-5 col-md-5 col-lg-5" >
				<div id ="block2">
					 <div id ="innerblock">
						Register
					 </div>
 		         </div>	
  		         <form  action="server/ADDnewUser.php" method="POST" class="needs-validation" novalidate>
  		           <div class="form-group " >
					 <label class=" FontLabel FontFamily" for="Email" >Email</label>
					 <input name="Email" type="email" class="form-control " maxlength="25" minlength="5" id="Email" required>
					 <div class="invalid-feedback">
					Email can not be less 5 symballs
						</div>
				 </div>
  		         <div class="form-group " >
					 <label for="Login"   class=" FontLabel FontFamily">User Name</label>
					 <input name="UserName" type="text" class="form-control" maxlength="25" minlength="3" id="Login" required>
					  <div class="invalid-feedback">
						user name can not be less 3 symballs
						</div> 
				 </div>	
 		          <div class="form-group " >
					 <label for="PasswordReg"  class=" FontLabel FontFamily" >Password</label>
					 <input name="Password" type="password" class="form-control" maxlength="25" minlength="5" id="PasswordReg" required>
				       <div class="invalid-feedback">
						Password can not be less 5 symballs
						</div>
		          </div>
 		                    <div class="form-group  " >
					<input type="submit" class="btn FontFamily MyBtn"  id="btnReg" value=" Register "> 
					</div>
				</form>
 		  	    </div>
   		    </div>
   		    	<br>
   		</div>
   </div> 
	</div>
	 <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
 <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/1.js"></script> 
</body>
  </html>