<?php
if (isset($_POST['ac_username'])) {
    echo "hi method post";
    $username = $_POST['ac_username'];
    $pass = $_POST['ac_password'];
    $fullname = $_POST['fullname'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_modify = date('Y-m-d H:i:s');
    $admin_type = 0;
    require './db_con.php';
    $sql_insert = "";
    // query update
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
    echo "<script type='text/javascript'>window.location='index.php';</script>";
}
$active_menu = 2;
require './head.php';
?>


<div class="row" style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label class="control-label col-md-3">username</label>
                <div class="col-md-6">
                    <input name="ac_username" class="form-control" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">password</label>
                <div class="col-md-6">
                    <input name="ac_password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">ชื่อ นามสกุล</label>
                <div class="col-md-6">
                    <input name="fullname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">ชื่อเล่น</label>
                <div class="col-md-6">
                    <input name="nickname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">อีเมล</label>
                <div class="col-md-6">
                    <input name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">เบอร์โทร</label>
                <div class="col-md-6">
                    <input name="phone" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">username</label>
                <div class="col-md-6">
                    <input name="ac_username" class="form-control">
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-sm" type="submit">บันทึก</button>
                <a class="btn btn-primary btn-sm" href="index.php">กลับ</a>
            </div>
        </form>
    </div>

</div>
</div>

<div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
            <!-- Begin # DIV Form -->
            <div id="div-forms">
                <!-- Begin # Login Form -->
                <form id="login-form" action="c_check_login.php" method="post">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-login-msg">Type your username and password.</span>
                        </div>
                        <input id="login_username" name="username1" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required="">
                        <input id="login_password" name="password1" class="form-control" type="password" placeholder="Password" required="">
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->
            </div>
            <!-- End # DIV Form -->
        </div>
    </div>
</div>
</body>
