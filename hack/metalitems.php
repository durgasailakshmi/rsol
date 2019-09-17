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
$sql = "SELECT * FROM buyerinfo where location='$y'and whichbuyer='MetalBuyer';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
			
			$z={$row['name']};
	echo    "BUYER NAME : {$row['name']}  ".  
            "CONTACT NUMBER: {$row['contactnumber']} <br> ";  
} 
}else{  
echo "No buyer in your location";  
}  
mysqli_close($conn);  
?>  
<h4>select any one of the buyer whom do you want to sell the metal items</h4>
<form action="userinfosend.php" method="POST">
<br>
<pre>
		Name:<input type="text" name="name2"/>
        <br>
        Contactnumber:<input type="text" name="contactnumber2"/>
        <br>
		<input type="submit" value="save"/>
</pre>
</form>
</body>
</html>

