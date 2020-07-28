<?php
$name = $_POST['name'];
$id = $_POST['id'];
$source = $_POST['source'];
$status = $_POST['status'];
$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="student";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into register(name,st_id,source,status) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$id,$source,$status);
    $stmt->execute();
    ?><script>alert("Registration successful!!!");</script><?php
    $stmt->close();
    $conn->close();
}
                echo"<table>
                <tr><td>Student name</td><td>$name</td><tr>
                <tr><td>Student ID</td><td>$id</td><tr>
                <tr><td>Field</td><td>$source</td><tr>
                <tr><td>value</td><td>$status</td><tr>
                </table>";
?>