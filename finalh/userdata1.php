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
$sql = "SELECT * FROM userinfo1 where username='$username1' and password='$password1'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { 
    header('Location: page1.html');
 }
}else{  
echo "Invalid Details";  
}  
mysqli_close($conn);  
?>  

 