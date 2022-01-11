

<!DOCTYPE html>
<html>
<head>
    <title>Registration page</title>
	<style type="text/css">
    
	body{
  background-image:url("");
  
  }
  
  .mainbox{
  background:yellow;
  height: 1500px;
  width:100%;
  
  }
  
  .mainbox>.headerp{
  background: rgba(0,0,0,0.5);
  width:100%;
  height:250px;
  }
  .mainbox>.headerp>img
  {
  width:250px;
  height:300px;
  position:absolute;
  top:-30px;
  left:70px;
  
  }
  
  .mainbox>.headerp>p
  {
  font-size:50px;
  text-align:right;
  position:absolute;
  left:450px;
  top:70px;
  }
  
  /* navigation button part */
  
  .mainbox>.menu{
  background: green;
  height:80px;
  
  }
  .mainbox>.menu>a>button
  {
  cursor:pointer;
  color:white;
  border-radius:20px;
  width:200px;
  border:5px;
  height:50px;
  font-size:18px;
  background:#00004d;
  margin:15px
  }
  
  .mainbox>.menu>a>button:hover{
  background:#f2ccff;
  color:#00004d;
  }

/*For registration */

.h{
	color:black;
	background:linear-gradient(534deg,#24F9F9,#124143,#A1A7C8);
	font-size:22px;
	font-weight:bold;	
	padding:50px;
	width:750px;
	border-radius:40px;
	position:relative;
	left:25%;
	margin-top: 20px;
	
	}
	
	.innerdiv
	{
	background:linear-gradient(234deg,#C0F7B7,#A1A7C8,#5AC994);
	margin:20px;
	padding:10px;
	border-radius:15px;
	}
	
	.radiodiv
	{
	width:1000px;
	height:50px;
	position:relative;
	left:250px;
	}
	
	.radiodiv>input
	{
	width:20px;
	height:30px;
	}
	
	.radiodiv>label
	{
	position:relative;
	bottom:6px;
	}
	
	
	label
	{
	width:200px;
	display:inline-block;
	padding:5px;
	}
	
	input,select
	{
	width:450px;
	height:35px;
	margin:5px;
	border-radius:20px;
	outline:none;
	border:none;
	font-size:20px;
	padding:5px;
	text-align:left;
	}
	
	button
	{
	border-radius:20px;
	outline:none;	
	border:none;
	border:5px solid #124143;
	padding:10px;
	margin:40px;
	width:177px;
	position:relative;
	left:95px;
	}
	
	textarea
	{
	border-radius:20px;
	outline:none;
	border:none;
	font-size:20px;
	padding:10px;
	width:450px;
	height:100px;
	margin:4px;
	position:relative;
	left:210px;
	text-align:left-side;
	}
	
</style>
</head>
<body>
	
<div class="mainbox">

	<div class="headerp">
		<img src="">
		<p>REAL ESTATE PROPERTY MANAGEMENT</p>
	</div>


	<div class="menu">
		<a href="homef.php" ><button><b>HOME</b></button></a>
		<a href="Login.php"><button><b>LOGIN</b></button></a>
		<a href="Registration.php"><button><b>REGISTRATION</b></button></a>
		<a href="#buy"><button><b>BUY / RENT</b></button></a>
		<a href="about.php"><button><b>ABOUT US</b></button></a>
	</div>



    <div class="h"><center><h1>REGISTRATION</h1></center>
	
		<div class="innerdiv">

				<label>Full Name: </label>
				<input type="text" placeholder="Enter your full name" name="fullname" required><br>

				<label>Mobile Number: </label>
				<input type="tel" placeholder="1234567890" name="mobileno" minlength="10" pattern="[1-9]{1}[0-9]{9}" required><br>

				<label>Email: </label>
				<input type="email" placeholder="example@gmail.com" name="email" required><br>

				<label>Date Of Birth: </label>
				<input type="date" name="dob" id="dob" max="2003-12-31" required><br>

				<label for="gender">Gender:</label>
				<div class="radiodiv">
					<input type="radio" name="gender" id="male" value="Male">
					<label for="male" class="light">Male</label>
					<input type="radio" name="gender" id="female" value="Female">
					<label for="female" class="light">Female</label><br>
				</div>

				<label>Address: </label>
				<textarea type="textbox" placeholder="Enter your address...." name="address" required></textarea><br>


				<label>Area: </label>
				<select name="city" required>
					<option value="">None</option>
					<option value="Ramol">Ramol</option>
					<option value="Vastral">Vastral</option>
					<option value="C.T.M">C.T.M</option>
					<option value="Vatva">Vatva</option>
					<option value="Mahadev Nagar">Mahadev Nagar</option>
				</select>
					<br>
				<label>Password: </label>
				<input type="password" placeholder="Password" name="password" minlength="8"  required><br>

				<label>Confirm Password: </label>
				<input type="password" placeholder="Confirm Password" name="confirm password" minlength="8"  required><br>

				<footer> 
					<button><b>Submit</b></button>
					<button><b>Reset</b></button>
				</footer>
		</div>
	</div>
</div>

</body>
</html>
	
<?php

/*include "connection.inc";

$id = $POST['id'];
$fullname = $_POST['fullname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$area = $_POST['area'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

echo $id."<br>";
echo $fullname."<br>";
echo $mobileno."<br>";
echo $email."<br>";
echo $dob."<br>";
echo $gender."<br>";
echo $address."<br>";
echo $area."<br>";
echo $password."<br>";
echo $confirmpassword."<br>";

 $query= "SELECT max(id) from registration";
 $result = $conn->query(query);
 if($result->num_rows==1){
	 $row=$result->fetch_assoc();
	 $id=$row['max(id)'];
	 $id=$id+1;
 }
 else
	 $id=1;
 
$query = "insert into registration values($id,'$fullname',$mobileno,'$email',$dob,'$gender','$address','$area','$password','$confirmpassword')";
	
	$result=$conn->query($query);
	
	if($result < 0){
		echo("Registration is not successfull");
	}
	else{
		echo("<script language='Javascript'>
			window.alert('Registration successfull');
			window.open(\"success.html\".\"_top\");
		</script>");
	}*/
?>
