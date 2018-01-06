<?php
$active_menu = 2;
require './head_admin.php';
require './db_con.php';
$user_id = $_SESSION['admin'];
if (isset($_POST['ac_username'])) {
    $fullname = $_POST['fullname'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_status_id = $_POST['user_status_id'];
    $user_modify = date('Y-m-d H:i:s');
    $user_id_update = $_POST['user_id'];

    $sql_insert = "UPDATE ac_user SET fullname = '{$fullname}' ,nickname = '{$nickname}',email = '{$email}',phone = '{$phone}',user_modify = '{$user_modify}' , user_status_id = '{$user_status_id}' " .
            " WHERE ac_user.user_id = '{$user_id_update}';";
    $ret = $conn->query($sql_insert);
}
$sql = "SELECT * FROM ac_user where admin_type=0";
$ret = $conn->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    ?>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
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
                    <label class="control-label col-md-3">สถานะ</label>
                    <div class="col-md-6">
                        <select class="form-control" name="user_status_id">
                            <option value="1" <?= ($row['user_status_id'] == 1 ? 'selected' : '') ?>>ปกติ</option>
                            <option value="2" <?= ($row['user_status_id'] == 2 ? 'selected' : '') ?>>ระงับ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">เบอร์โทร</label>
                    <div class="col-md-4">
                        <input name="phone" class="form-control" value="<?= $row['phone'] ?>">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <hr>
    <?php
}   