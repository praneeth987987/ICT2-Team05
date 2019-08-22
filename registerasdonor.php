<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>



<div class="container">
  <form action="connect1.php" method = "post">
    <label for="firstname">FirstName</label>
    <input type="text" id="firstName" name="firstName" placeholder="Your name.." name="firstName"/>

    <label for="lastName">LastName</label>
    <input type="text" id="lastName" name="lastname" placeholder="Your last name.."  name="lastName"/>
     
     <label for="age">Age</label>
    <input type="text" id="age" name="age"  name="age">
	    
     <label for="gender">Gender</label>
    <input type="text" id="gender" name="gender" name="gender">

	<label for="bloodGroup">Blood Group</label>
    <input type="text" id="bloodGroup" name="bloodGroup" name="bloodGroup" >
	
	<label for="addiction">Addiction</label>
    <input type="text" id="addiction" name="addiction" name="addiction" >
    </select>

    <label for="subject">Address</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:55px" name="subject"></textarea>
	
	<label for="madicalReport">Madical Report</label>
    <input type="text" id="lname" name="madicalReport" placeholder="Your last name.." name="madicalReport">
    </select>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
