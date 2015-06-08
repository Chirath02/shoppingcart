<?php
echo "<!DOCTYPE html>
                <html>
                        <head>
                                <title>Products</title>
                        </head>
                        <body>
                                <h1>Welcome</h1>"
?>
<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "shoppingcart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["discription"]." ".$row["price"]."</td></tr>";
        echo "<img src='images/" . $row["image"] . "'>";
        
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>



