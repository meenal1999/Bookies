<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$servername = "localhost";
$username = "username";

// Create connection
$conn = new mysqli("localhost","root","","book_webpage");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo " <br>";

$sql = "SELECT * FROM bookdescription";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Book_Id"]." ". $row["Name"]. " " . $row["Author"]. $row["Price"]." ". $row["Genre"]." ". $row["Description"]." ". $row["Seller_Id"]." ". $row["Buyer_Id"]."<br>";
    }
}
echo "<br>";    // output data of each row
    


?>

</body>
</html>