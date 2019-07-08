
<?php 
// 1. database credentials

if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

$host = "localhost";
$db_name = "contact_form";
$username = "root";
$password = "";
 
// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
 
// 3. prepare select query
$query = "INSERT INTO feedback (name, email, message) VALUES ('" . $name. "', '" . $email. "','" . $message. "')";
$stmt = $con->prepare( $query );
 
// 4. sample product ID
$product_id=1;
 
// 5. this is the first question mark in the query
$stmt->bindParam(1, $product_id);
 
// 6. execute our query
$stmt->execute();
 
// 7. store retrieved row to the 'row' variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
// 8. show data to user
echo "<div>Name: " . $row['name'] . "</div>";
echo "<div>Description: " . $row['description'] . "</div>";
echo "<div>Price: $" . $row['price'] . "</div>";
}
?>