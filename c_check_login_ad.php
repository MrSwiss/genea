<?php

session_start();

ob_start();
include 'db_con.php';

$_username = $_POST['username1'];
$_password = md5($_POST['password1']);

$sql = "SELECT * FROM ac_user WHERE ac_username='$_username' AND ac_password='$_password' AND admin_type= 1 ";
$result = $conn->query($sql);

$flag = 0;
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $_SESSION["admin"] = $row['user_id'];
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    echo "<script type='text/javascript'>window.location='admin.php';</script>";
    break;
}
if ($flag == 0) {
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    echo "<script type='text/javascript'>alert('username หรือ password ไม่ถูกต้อง');window.location='ad_login.php';</script>";
}
$conn->close();
