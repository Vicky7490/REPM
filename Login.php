<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
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

  /*for login form*/
  
	.h{
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
	}
	
	.labels{
	color:#fff;
	background-color: #9225DA;
	border:4px;
	border-radius:15px;
	padding:10px;
	margin:20px;
	}
	
	
	
	
	button{
	color:#fff;
	font-size:20px;
	background-color: #9225DA;
	border:4px;
	border-radius:15px;
	height:50px;
	width:250px;
	position:relative;
	top:5px;
	left:5px;
	cursor:pointer;	
	}
	
	
	input{
	border:4px;
	font-size:20px;
	border-radius:15px;
	padding:10px;
	text-align:left;
	margin:20px;
	width:350px;
	outline:none;
	}
	
	input:focus{
	background:lightblue;
	}
	
    </style>    
</head>

<body>

    <div class="mainbox">
        
        <div class="headerp">  
            <p>REAL ESTATE PROPERTY MANAGEMENT</p>
        </div>
        
        <div class="menu">
            <a href="homef.php" ><button><b>HOME</b></button></a>
            <a href="Login.php"><button><b>LOGIN</b></button></a>
            <a href="Registration.php"><button><b>REGISTRATION</b></button></a>
            <a href="#buy"><button><b>BUY / RENT</b></button></a>
            <a href="about.php"><button><b>ABOUT US</b></button></a>
        </div>

    
            <center>
            <div class="h">
                
                <h1>Login</h1>

                <div class="labels"><label><b>Username </b></label>
                    <input type="email" placeholder="example@gmail.com" name="email" required>
                </div>

                <div class="labels"><label><b>Password </b></label>
                    <input type="password" placeholder="Password" name="password" minlength="8"  required>
                </div>

                
                <footer> 
                    <a href=""><button><b>Log in</b></button></a>
                </footer>
            </div>
            </center>
    </div>

</body>
</html>