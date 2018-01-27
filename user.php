<?php
$active_menu = 1;
require './head_user.php';
require './db_con.php';
$user_id = $_SESSION['user'];
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
<div class="form-horizontal" >
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8">
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label class="control-label col-md-3">username</label>
                    <div class="col-md-6">
                        <input name="ac_username" class="form-control" readonly="" value="<?= $row['ac_username'] ?>">
                    </div>
                    <label class="control-label col-md-3">EA ของฉัน</label>
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
        <?php
        $ftp_server = 'gator4148.hostgator.com';
        $conn_id = ftp_connect($ftp_server);

        $ftp_user_name = 'vertical@doujin69-th.com';
        $ftp_user_pass = 'y4nlfwtkCz#H';
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

        $contents = ftp_nlist($conn_id, ".");
        $ea_name = [];
        foreach ($contents as $row) {
            if (isset($row[10])) {
                if ($_SESSION["user"] == $row[10] . $row[11] . $row[12]) {
//                        echo $row . ' ';
                    $temp = explode('_', $row);
//                        echo $temp[1] . ' ';
                    $date = explode('.', $temp[2]);
//                        echo $date[0] . '<br>';
                    if (!in_array($temp[1], $ea_name)) {
                        $ea_name[] = $temp[1];
                    }
                }
            }
        }
        ?>
        <form action="graph.php" method="post" >
            <div class="col-md-3">
                <select class="form-control" name="ea_select">
                    <?php
                    foreach ($ea_name as $row) {
                        ?>
                        <option value="<?= $row ?>"><?= $row ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary" type="submit">เรียกดู</button>
            </div>
        </form>
    </div>
</div>