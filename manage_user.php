<?php
$active_menu = 2;
require './head_admin.php';
require './db_con.php';
$user_id = $_SESSION['admin'];
$sql = "SELECT * FROM ac_user where admin_type=0";
$ret = $conn->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}