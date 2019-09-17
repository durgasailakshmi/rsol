<html>
<body>
<h4>These are the recycling stores present in your location </h4>
<br>
<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'testdb3';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$sql = "SELECT * FROM recyclinginfo where location='$s';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
			
			
	echo    "RECYCLING STORES NAME : {$row['name']}  ".  
            " CONTACT NUMBER: {$row['contactnumber']} <br> ";  
} 
}else{  
echo "No recycling store in your location";  
}  
mysqli_close($conn);  
?>  
</body>
</html>