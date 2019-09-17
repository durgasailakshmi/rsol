<html>
<body>

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
$y=$_POST["location"];  
$sql = "SELECT * FROM buyerinfo where location='$y' and whichbuyer='MetalBuyer'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
			
			
	echo    "BUYER NAME : {$row['name']}  ".  
            "CONTACT NUMBER: {$row['contactnumber']} <br> ";  
} 
}else{  
echo "No buyer in your location";  
}  0
mysqli_close($conn);  
?>  
</body>
</html>

