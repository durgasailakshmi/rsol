<html>
<body>
<form action="paperbuyer.php" method="POST">
<h1>Enter Your Username and Password</h1>
<pre>
username:<input type="text" name="username"/>
password:<input type="password" name="password"/>
     <input type="submit" name="Getchecked"/>
</pre>
</form>
<h4>These are the buyer's present in your location </h4>
<br>
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
$sql1 = "SELECT * FROM userinfo1 where username='$username1' and password='$password1'";  
$retval1=mysqli_query($conn, $sql1);  
  
if(mysqli_num_rows($retval1) > 0){  
 while($row = mysqli_fetch_assoc($retval1))
 { 
   
$sql = "SELECT name,contactnumber FROM buyerinfo where location IN(select location from   userinfo1 where username='$username1' and password='$password1') and whichbuyer='MetalBuyer'"; 
        $retval=mysqli_query($conn, $sql);  

      if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
			
			
	echo    "BUYER NAME : {$row['name']}  ".  
            " CONTACT NUMBER: {$row['contactnumber']} <br> ";  
} 
}else{  
echo "No buyer in your location";  
}  

 }
}else{  
echo "Invalid Details";  
}  

mysqli_close($conn);  
?>  

</body>
</html>

