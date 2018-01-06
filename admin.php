<?php
$active_menu = 1;
require './head_admin.php';
require './db_con.php';
$user_id = $_SESSION['admin'];
if (isset($_POST['ac_username'])) {
    $fullname = $_POST['fullname'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_modify = date('Y-m-d H:i:s');


    $sql_insert = "UPDATE ac_user SET fullname = '{$fullname}' ,nickname = '{$nickname}',email = '{$email}',phone = '{$phone}',user_modify = '{$user_modify}' " .
            " WHERE ac_user.user_id = '{$user_id}';";
    $ret = $conn->query($sql_insert);
}
$sql = "SELECT * FROM ac_user where user_id = {$user_id}";
$ret = $conn->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
//while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
//}
?>
<div class="row" style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label class="control-label col-md-3">username</label>
                <div class="col-md-6">
                    <input name="ac_username" class="form-control" readonly="" value="<?= $row['ac_username'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">ชื่อ นามสกุล</label>
                <div class="col-md-6">
                    <input name="fullname" class="form-control" value="<?= $row['fullname'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">ชื่อเล่น</label>
                <div class="col-md-6">
                    <input name="nickname" class="form-control" value="<?= $row['nickname'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">อีเมล</label>
                <div class="col-md-6">
                    <input name="email" class="form-control" value="<?= $row['email'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">เบอร์โทร</label>
                <div class="col-md-6">
                    <input name="phone" class="form-control" value="<?= $row['phone'] ?>">
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary btn-sm" type="submit">บันทึก</button>
            </div>
        </form>
    </div>

</div>