<html>
<body>
<form action="page3.php" method="post">
<h1>Enter Your Username and Password</h1>
<pre>
username:<input type="text" name="username"/>
password:<input type="password" name="password"/>
     <input type="submit" name="Getchecked"/>
</pre>
</form>

<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'testdb2';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$username1=$_POST["username"];
$password1=$_POST["password"]; 
$sql1 = "SELECT * FROM buyerinfo where username='$username1' and password='$password1'";  
$retval1=mysqli_query($conn, $sql1);  
  if(mysqli_num_rows($retval1) > 0){  
 while($row = mysqli_fetch_assoc($retval1)){ 
	$sql =  "SELECT name,contactnumber FROM recyclinginfo1 where location IN(SELECT location FROM buyerinfo where username='$username1' and password='$password1') ";
$retval=mysqli_query($conn, $sql);  
 if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
			
			
	echo    "RECYCLING STORES NAME : {$row['name']}  ".  
            " CONTACT NUMBER: {$row['contactnumber']} <br> ";  
} 
}else{  
echo "No recycling store in your location";  
}  

 }
}else{  
echo "Invalid Details";  
}  
mysqli_close($conn);  
?>  
</body>
</html>