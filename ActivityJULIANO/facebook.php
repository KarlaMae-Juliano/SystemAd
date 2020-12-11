
<html> 
<title>Facebook - Log In or Sign Up </title> 
<link rel="icon" type="logo/png" href="icon.png">
<head> 


</head> 

<link rel="stylesheet" type="text/css" href="style.css">

<body> 

<div class="fb-header-base">
 <div class="fb-header"> </div>



	<form method="POST">
		
		<div id="img1" class="fb-header"><h1>facebook</h1></div> 

			<div id="form1" class="fb-header" >Email or Phone<br> 
				<input  type="text" name="em" /><br> 
			</div> 
					<div id="form2" class="fb-header" >Password<br> 
						<input  type="password" name="pas" /><br> Forgotten your password? </div> 
					</div> 
				
				<input type="submit" class="sub" value="Log In" name="log" /> 
	</div>
						<div > 
							<div id="intro1" class="fb-note"><br><br>Connect with friends and the <br>world around you on Facebook.
							<br><br><img src="see.png" alt="" style=" vertical-align: middle;" width="30px" height="40px"><font size="3"><b style="color: black;">See photos and updates from friends in News Feed.</font><br>
							<br><img src="News.png" alt="" style=" vertical-align: middle;" width="30px" height="40px"><font size="3"><b style="color: black;">Share what's new in your life on your Timeline.</font ><br>
							<br><img src="ser.png" alt="" style=" vertical-align: middle;" width="30px" height="40px"><font size="3"><b style="color: black;">Find more of what you're looking for with Facebook Search.</font><br>
						</div> 

							<br><br><br><br><br>

							<div class="fb-body"> 
							<div id="intro2" class="fb-body">Sign Up</div> 
							<div id="intro3" class="fb-body">It's quick and easy.
						</div> 
							

								<div id="form3" class="fb-body"> 
									<input placeholder="First Name" type="text" id="namebox" name="fname" /> 
									<input placeholder="Last Name" type="text" id="namebox" name="lname" /> <br> 
									<input placeholder="Mobile number or email" type="text" id="mailbox" name="enum" /><br> 
									
									<input placeholder="New password" type="password" id="mailbox" name="password" />
									 
							<br>
									
									<div class="h" >Birthday<br></div>
									<input type="date"  name="birthday" /><br> 


									<div class="h" >Gender<br></div>
									<input type="radio" id="r-b" name="sex" value="female"  /><b style="color: dimgray; font-size: 16px" > Female </b>
									<input type="radio" id="r-b" name="sex" value="male" /><b style="color: dimgray; font-size: 16px" >Male</b>
									<input type="radio" id="r-b" name="sex" value="Custom"/><b style="color: dimgray; font-size: 16px" >Custom</b> <br> 
					
						<p id="intro4">By clicking Sign Up, you agree to our Terms. Data Policy and Cookies Policy. You may receive SMS Notification from us and can opt out any time. </p> 

									<input type="submit" class="button2" value="sign Up"  name="sub" /> <br><hr> 

					</form>	
 

					



<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbfacebook";


	$connect = mysqli_connect($servername,$username,$password,$dbname);

	?>

<?php	

		 if(isset($_POST['sub'])){
			
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['enum'];
			$password = $_POST['password'];
			$birthday = $_POST['birthday'];
			$gender = $_POST['sex'];
		

			$insert = "INSERT INTO tblfacebook (fname, lname, enum, password, birthday,sex) 
			VALUES ('$firstname','$lastname','$email','$password','$birthday','$gender')";
			
			$query = mysqli_query($connect,$insert);
			if ($query==TRUE) {
				echo "<strong>Record Added</strong>";
				

			}else{
				echo "<strong>Record not Added</strong>";
			}
	}

		?>

	


<?php
		//LOG IN
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbfacebook";


	$connect = mysqli_connect($servername,$username,$password,$dbname);



		 if(isset($_POST['log'])){
			
			$em = $_POST['em'];
			$pas = $_POST['pas'];
			

			$query = "SELECT * FROM tblfacebook WHERE enum='$em' AND password='$pas'";
			
			
			$result = mysqli_query($connect,$query);
			$count= mysqli_num_rows($result);

			if ($count>0) {
				
				header("location: login.php");

			}else{
				echo "USERNAME AND PASSWORD IS INCORRECT";
			}
	}

?>




	</div>


</body> 
</html>