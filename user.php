<?php

$active_menu = 1;
require './head_user.php';
require './db_con.php';
$user_id = $_SESSION['user'];
$sql = "SELECT * FROM ac_user where user_id = {$user_id}";
$ret = $conn->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}