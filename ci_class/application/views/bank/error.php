<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<script type="text/javascript">
        	function Submit()
        	{  
         		var emailID = document.myForm.email.value;
         		atpos = emailID.indexOf("@");
         		dotpos = emailID.lastIndexOf(".");
         
         		if (atpos < 1 || ( dotpos - atpos < 2 )) 
         		{
            		alert("Please enter correct email ID")
            		document.myForm.email.focus() ;
            		return false;
         		}
	         	if( document.myForm.psw.value == "" )
	         	{
	            	alert( "Please enter your password!" );
		            document.myForm.psw.focus() ;
		            return false;
	         	}
	         	return( true );
        	}
        </script>
	</head>
	<body>
	<script language="JavaScript">
    alert("Incorrect email or password. Please login again!!");
    </script>
		<div class="container">
			<form name="myForm" action="<?php echo base_url()?>Bank/authenticate" method="POST" onsubmit="return(Submit());">
				<label>Email</label>
				<br />
				<input name="email" type="text" placeholder="Your Email" size="" id="" />
				<br />			
				<label>Password</label>
				<br />
				<input name="psw" type="password" placeholder="Your Password" id="" />
				<br /><br />
				<input type="submit" value="Login" id=""/>
			</form>
		</div>
	</body>
</html>