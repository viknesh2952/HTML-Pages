<?php
$name = $_POST['name'];
$id = $_POST['id'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$date=date('Y-m-d');
$host="localhost";
    $dbUsername="root";
    $dbPassword="samyviknesh1";
    $dbname="store";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into items(name,pr_id,price,quantity,date) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$id,$price,$quantity,$date);
    $stmt->execute();
    ?><script>alert("Product Added");</script><?php
    $stmt->close();
    $conn->close();
}
header( "Location:index.html" );
?>