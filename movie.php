<?php
$Hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "pictures";

$moviename = $_POST['Moviename'];
$review = $_POST['Review'];
$rating = $_POST['Rating'];

$conn = new mysqli($Hostname, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO movies (moviename, review, rating)
VALUES ('$moviename', '$review','$rating')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

print     "<p>movie name</p> <br>"  .$moviename;   
print     "<p>review</p> <br>" .$review;
print   "<p>rating</p>".$rating;

$sql = 'SELECT  * FROM  movies';
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query))
{
    print  "<br>" .$row['moviename']."<br>" .$row['review'];
}



mysqli_close($conn);
?>


