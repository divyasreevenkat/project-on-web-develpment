<?php
$Hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "american";

$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];


$conn = new mysqli($Hostname, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO citizens (username, email, password)
VALUES ('$username', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$results = "select * from citizens where email=='$Email' and password=='$Password'";
print $Email;
if  ($conn->query($results)==TRUE) {
 echo "login";
      } else  {
       echo "signup";
      }

 

mysqli_close($conn);
?>