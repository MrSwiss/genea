<?php

session_start();

ob_start();
include 'db_con.php';

$_username = $_POST['username1'];
$_password = $_POST['password1'];

$sql = "SELECT * FROM ac_user WHERE ac_username='$_username' AND ac_password='$_password' AND admin_type = 0 ";
$result = $conn->query($sql);

$flag = 0;
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $_SESSION["user"] = $row['user_id'];
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    echo "<script type='text/javascript'>window.location='suggestion.php';</script>";
    break;
}
if ($flag == 0) {
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    echo "<script type='text/javascript'>alert('username หรือ password ไม่ถูกต้อง');window.location='index.php';</script>";
}
$conn->close();
