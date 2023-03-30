<?php

$uname = $_POST['uname'];
$psw = $_POST['psw'];

$conn = new mysqli('localhost','id20529064_admin','5{3K(Z[>I[3{B%e4','id20529064_teachforindia');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from admin where uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows> 0){
        $data = $stmt_result->fetch_assoc();
        if($data['psw'] === $psw){
            session_start();
            $_SESSION['uname']=$uname;
            header('Location: admin.php');
        }else{
            header('Location: error.html');
        }
    }
    else{
        header('Location: error.html');
    }
}

?>