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
$username=$_POST["username"];   
$password=$_POST["password"];   
echo $name.$contactnumber.$location.$username.$password;

$sql = "INSERT INTO userinfo1(name,contactnumber,location,username,password) VALUES ('$name', '$contactnumber','$location','$username','$password')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  

