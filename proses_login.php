<?php
session_start();
include '../koneksisiswa.php';
$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
$proses = mysqli_query($conn,$sql);

$result = mysqli_num_rows($proses);

if ($result === 1) {
    $_SESSION['username'] = $username;
    header('Location:index.php');
}
?>