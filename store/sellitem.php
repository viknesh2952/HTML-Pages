<?php 
$fitem = $_POST['sellitem'];
$fquantity = $_POST['sellquantity'];

$host="localhost";
$dbUsername="root";
$dbPassword="samyviknesh1";
$dbname="store";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE items SET quantity=quantity-('$fquantity'/2) WHERE id='$fitem'";
$result=mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>