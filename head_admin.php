
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amin Ea Generator</title>
    <link href="assets/img/logo.png" rel="shortcut icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- Icon Fonts -->
    <link href='assets/font/ionicons-master/css/ionicons.min.css' rel='stylesheet' type='text/css'>
    <link href="assets/font/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="assets/css/style.css" rel="stylesheet" title="main-css"> -->
    <link href="assets/lightbox2-master/dist/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/font/et-line-icons/style.css" rel="stylesheet">

    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="assets/vegas/dist/vegas.min.css" rel="stylesheet">
    <script src="assets/js/jquery.1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . 'index.php');
    }
    ?>
    <div class="row">
        <div class="btn-group btn-group-justified" >
            <a href="admin.php" class="btn btn-warning" <?php echo ($active_menu == 1 ? 'style="background: #3c3c3c;"' : ''); ?>><i class="fa fa-user" aria-hidden="true"></i> ข้อมูลส่วนตัว</a>
            <a href="manage_user.php" class="btn btn-warning" <?php echo ($active_menu == 2 ? 'style="background: #3c3c3c;"' : ''); ?>><i class="fa fa-users" aria-hidden="true"></i> จัดการข้อมูลผู้ใช้</a>
            <a href="ad_logout.php" class="btn btn-warning" <?php echo ($active_menu == 3 ? 'style="background: #3c3c3c;"' : ''); ?>><i class="fa fa-home" aria-hidden="true"></i> ออกจากระบบ</a>
        </div>
    </div>

