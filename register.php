<?php

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['emails'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$language = implode(',', $_POST['language']);
$day = $_POST['days'];

$conn = new mysqli('localhost','id20529064_admin','5{3K(Z[>I[3{B%e4','id20529064_teachforindia');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, phone, address, language, day)values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss",$firstName, $lastName, $email, $phone, $address, $language, $day);
    $stmt->execute();
    header('Location: thankyou.html');
    $stmt->close();
    $conn->close();
}

?>