<!DOCTYPE html>
<html>
<head>
<title>about</title>

  <style type="text/css">
  
  body{
  background-image:url("");
  
  }
  
  .mainbox{
  background-color: yellow;
  height:1200px;
  width:100%;
  
  }
  
  .mainbox>.headerp{
    background: rgba(0.7,0.1,0.2,0.5); 
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
  
  
  .mainbox>.abot{

  color:white;
	font-size:28px;
	text-align:center;	
	border:5px;
	width:50%;
	margin:50px;
	background-color:lightgrey;
	padding:50px;
	align-items:center;
	border-radius:20px;
	<!--box-shadow:10px 10px 10px 10px #9225DA;-->
	<!--#173459;-->
	z-index:-2;
	filter:blur(px);
	background:linear-gradient(235deg,#89ff00,#060c21,#00bcd4);
  height:700px;
  position:absolute;
  left: 300px;
  
  
  }
  .mainbox>.abot>p{
  color:white;
  font-size:50px;
  text-align:center;
  
  }
  .mainbox>.abot>article
  {
  text-align:justify;
  color:white;
  font-size:25px;
  margin:35px;
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

  

    <div class="abot">
    <p>About<p>
    <article>

     Welcome to Real Estate Property Management .  <br/><br>
     Real Estate Property Management<br><br>
     This site is one of the property selling/renting related site .<br><br>
     It is newly designed website related to property .<br><br>
     Our goal of this website is to provide property related information to the user .<br><br>
     This is a website where buyers/renters can easily buy/rent their properties like flats and apartment .<br><br>
     This website help buyers to find all facility related to property at our website .<br><br>
     Get in touch with us to let us know how else we can help !<br>

    </article>
    </div>
  
</div>

</body>
</html>
