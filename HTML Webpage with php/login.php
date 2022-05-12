<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['pass'])) {

    
    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}
$uname = validate($_POST['uname']);
$pass = validate($_POST['pass']);

if(empty($uname)){
    header ("Location: login.phtml?error=User Name is required");
    exit();
}
else if(empty($pass)) {
    header ("Location: login.phtml?error=Password is required");
    exit();
}

$sql = "SELECT * FROM login_info WHERE username='$uname' AND password='$pass' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqi_fetch_assoc($result);
    if($row['username'] === $uname && $row['password'] === $pass) {
        echo "Logged In!";
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: Anmol.php");
        exit();
    }
    else{
        header("Location: login.phtml?error=Incorrect User Name or Password");
        exit();
    }
}
else{
    header("Location: login.phtml");
    exit();
}
?>



