
<?php
$sEmail = $_done['sEmail'];
$spassword = $_done['spassword'];
$rusername = $_done['rusername'];
$rEmail = $_done['rEmail'];
$rpassword = $_done['rpassword'];
//Database connection
$conn = new mysqli('localhost', 'root','','user_db');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(sEmail,spassword,rusername,rEmail,rpassword) 
    values(?, ?, ?, ?, ?)");}{
    $stmt->bind_param("sssss",$sEmail, $spassword, $rusername, $rEmail, $rpassword);
    $stmt->execute();
    echo "Registation successfull...";
    $stmt->close();
    $conn->close();
    }
?>