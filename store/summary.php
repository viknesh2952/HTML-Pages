<?php
$host="localhost";
$dbUsername="root";
$dbPassword="samyviknesh1";
$dbname="store";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<centre><h3>Welcome to  Store</h3></centre><br>
<h3>Available Items</h3>
<?php
				$sql = "SELECT * FROM items";
				$result = $conn->query($sql);
                if (!empty($result)) {
                    // output data of each row?>
                    <table style="border:2px solid black;padding:10px;">
    <tr><th>Product Name</th><th>Product_id</th><th>Price</th><th>Quantity</th><th>Date Available</th><tr>
					<?php while($row = $result->fetch_assoc()) {
					
?>
    <tr><td><?php echo $row['name'];?></td><td><?php echo $row['id']; ?></td><td><?php echo $row['price']; ?></td><td><?php echo $row['quantity']; ?></td><td><?php echo $row['date']; ?></td><tr>
            <?php } } 
            $conn->close();
            ?>
</table>