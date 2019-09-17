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
$name=$_POST["name"];
$contactnumber=$_POST["contactnumber"];  
$location=$_POST["location"];   
$aadharnumber=$_POST["aadharnumber"];   
$username=$_POST["username"];   
$password=$_POST["password"];  
$whichbuyer=$_POST["whichbuyer"];   
echo $name.$contactnumber.$location.$aadharnumber.$username.$password.$whichbuyer;

$sql = "INSERT INTO buyerinfo(name,contactnumber,location,aadharnumber,username,password,whichbuyer) VALUES ('$name', '$contactnumber','$location','$aadharnumber','$username','$password','$whichbuyer')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  

