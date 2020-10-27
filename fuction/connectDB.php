 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_e_learning";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?> 