<DOCTYPE!> 
<html>
<head>
<?php include('connect.php'); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body {
font-family: Helvetica;
 font-size:25px; 
 

	}  
.navbar {  
  overflow: hidden;
  background-color:#001a33;
  border-radius: 10px;
  

}

.navbar a {
  float: center;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.gallery{
  float: left;
  overflow: hidden;
  
}

.gallery .dropbtn {  
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: #001a33;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .gallery:hover .dropbtn {
  background-color :white;
  color: #990000;
  font-weight:bold; border-radius: 10px;
}

.gallery-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.gallery-content a {
  float: none;
  
  color:  #990000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;.
  
}


.gallery-content a:hover {
  background-color: #990000;
  color:white;
  font-weight:bold;
}

.gallery:hover .gallery-content {
  display: block;
  background-color:white;
    font-weight:bold; border-radius: 10px;
}

</style>
</head>
<body>
<div style="background:#990000;" class="w3-container w3">
 	
<div class="header">

 <div style="font-weight:bold;font-size:40px;">
          <p>FIND BLOOD </p> 
          <h2>Search Blood Donors</h2>
</div>
</div>
</body>
<body>
<div class="navbar">
   <a href="searchdonors.php">SEARCH DONORS</a>
   <a href="registerasdonor.php">REGISTER AS DONOR</a>
        <div class="gallery">
           <button class="dropbtn">ACTIVITIES
           </button>
             <div class="gallery-content">
                 <a href="bloodbank.php">BLOOD BANK NEAR BY</a>
                 <a href="locationchart.php">MAP ASSISTANCE</a>
                 <a href="bloodgroup.php"> AWARENESS WEEK</a>
				 
	         </div>  
        </div> 
         <a  href="serviceprovide.php">SERVICE PROVIDE</a>
         <a  href="teammanagement.php">TEAM MANAGEMENT	</a>
		 <a  href ="contactus.php">CONTACT US</a>
		 <a  href ="aboutus.php">ABOUT US</a>
		 <a  href ="aboutus.php">FAQ</a>
</div>
       

</div>

</body>
</html>
<div style="padding:174px;margin-top:-175px;height:25px;color:#001a33;font-size:30px;">
  <p>WELCOME TO THE BLOOD BANK</p>
</div>
