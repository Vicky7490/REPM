<!DOCTYPE html>
<html>
<head>
<title>property management</title>

  <style type="text/css">
  
  body{
  background-image:url("");
  }
  
  .mainbox{
  background:yellow;
  height:1000px;
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
  
  /* Search part */
  
  
  .mainbox>.search
  {
  /*background: rgba(0,0,0,0.5);*/
  background-color:#f1daf1;
  /*color:white;*/
  height:250px;
  width:860px;
  margin:20px;
  padding:20px;
  border-radius:20px;
  position:relative;
  
  
  }
  
  .search>label
  {
  font-weight:bold;
  font-size:22px;
  width:160px;
  display:inline-block;
  padding:1px;
  margin:2px;
  
  
  }
  
  select,button
  {
  font-size:22px;
  border-radius:10px;
  outline:none;
  width:240px;
  height:35px;
  
  
  }
  
  /* image part */
  
  .mainbox>.image{
  height:280px;
  width:540px;
  background-color:skyblue;
  position:absolute;
  left:940px;
  bottom:120px;
  
  }
  
  .image>img{
  height:290px;
  width:550px;
  border-radius:20px;
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
<a href="D:\home page with photo\buyp.html"><button><b>BUY / RENT</b></button></a>
<a href="about.php" ><button><b>ABOUT US</b></button></a>
</div>

<div class="search">
<label>SEARCH :</label><br><br>
<label>Property type : </label>
<select name="propertytype">
<option value="">None</option>
<option value="appartment">Appartment</option>
<option value="flat">Flat</option>
</select>
<label>Area : </label>
<select name="area" >
<option value="">None</option>
<option value="Ramol">Ramol</option>
<option value="Vastral">Vastral</option>
<option value="C.T.M">C.T.M</option>
<option value="Vatva">Vatva</option>
<option value="Mahadev Nagar">Mahadev Nagar</option>
</select><br><br>

<label>Price Min : </label>
<select name="minprice" >
<option value="">None</option>
<option value="10,000,00">10,000,00</option>
<option value="15,000,00">15,000,00</option>
<option value="20,000,00">20,000,00</option>
<option value="25,000,00">25,000,00</option>
<option value="30,000,00">30,000,00</option>
</select>
<label>Price Max : </label>
<select name="maxprice" >
<option value="">None</option>
<option value="15,000,00">15,000,00</option>
<option value="20,000,00">20,000,00</option>
<option value="25,000,00">25,000,00</option>
<option value="30,000,00">30,000,00</option>
<option value="35,000,00">35,000,00</option>
</select><br><br>

<button><b>Submit</b></button>
</div>

<div class="image">
<image src="">
</div>

<div class="hh">


</div>




</div>

</body>
</html>
