<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Line Graph</title>
        <link href="assets/img/logo.png" rel="shortcut icon" type="image/x-icon" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <style type="text/css">
            #container {
                min-width: 310px;
                max-width: 800px;
                height: 400px;
                margin: 0 auto
            }
        </style>
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
        $chose_ea = $_POST['ea_select'];
        $ftp_server = 'gator4148.hostgator.com';
        $conn_id = ftp_connect($ftp_server);
        $ftp_user_name = 'vertical@doujin69-th.com';
        $ftp_user_pass = 'y4nlfwtkCz#H';
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

        $contents = ftp_nlist($conn_id, ".");
        $layer1 = [];
        $layer2 = [];
        $layer3 = [];
        $layer4 = [];
        $balance = [];
        date_default_timezone_set('UTC');
        $ea_name = [];
        foreach ($contents as $row) {
            if (isset($row[10])) {
                if ($_SESSION["user"] == $row[10] . $row[11] . $row[12]) {
//                    echo $row . '<br>';
                    $temp = explode('_', $row);
                    if (!in_array($temp[1], $ea_name)) {
                        $ea_name[] = $temp[1];
                    }
                    $date = explode('.', $temp[2]);
                    if ($chose_ea == $temp[1]) {
                        $line = 1;
                        $text_content = file_get_contents("ftp://$ftp_user_name:$ftp_user_pass@$ftp_server/$row");
                        foreach (explode(PHP_EOL, $text_content) as $key => $text) {
                            if ($key > 0) {
                                $temp = explode(',', $text);
                                if (isset($temp[8])) {
                                    $date_pick = date('Y-m-d', strtotime($date[0])) . ' ' . $temp[0];
                                    $date_conv = (strtotime($date_pick) * 1000);
                                    $layer1[] = [$date_conv, floatval($temp[8])];
                                    $layer2[] = [$date_conv, floatval($temp[9])];
                                    $layer3[] = [$date_conv, floatval($temp[10])];
                                    $layer4[] = [$date_conv, floatval($temp[11])];
                                    $balance[] = [$date_conv, floatval($temp[2])];
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>
        <div class="container">
            <div class="col-md-12">
                <div class="form-horizontal">
                    <div class="form-group text-center">
                        <h1 style="color: whitesmoke">แสดงข้อมูลกราฟ</h1>
                    </div>
                    <div class="form-group">
                        <div id="balance" class="col-md-6" style="height: 400px;" ></div>
                        <div class="col-md-6">
                            <form action="graph.php" method="post">
                                <select class="form-control" name="ea_select">
                                    <?php
                                    foreach ($ea_name as $row) {
                                        ?>
                                        <option value="<?= $row ?>" <?= ($row == $_POST['ea_select'] ? 'selected' : '') ?>><?= $row ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-primary" type="submit">เรียกดู</button>
                                <a href="user.php" class="btn btn-default">กลับ</a>
                            </form>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="layer1" class="col-md-6" style="height: 400px;"></div>
                        <div id="layer2" class="col-md-6" style="height: 400px;"></div>

                    </div>
                    <div  class="form-group">
                        <div id="layer3" class="col-md-6" style="height: 400px;"></div>
                        <div id="layer4" class="col-md-6" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // Create the chart
            Highcharts.stockChart('balance', {
                rangeSelector: {
                    selected: 1
                },
                title: {
                    text: 'balance'
                },
                series: [{
                        name: 'balance',
                        data: <?= json_encode($balance) ?>,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
            });
        </script>

        <script type="text/javascript">
            // Create the chart
            Highcharts.stockChart('layer1', {
                rangeSelector: {
                    selected: 1
                },
                title: {
                    text: 'Layer1'
                },
                series: [{
                        name: 'Layer1',
                        data: <?= json_encode($layer1) ?>,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
            });
        </script>

        <script type="text/javascript">
            // Create the chart
            Highcharts.stockChart('layer2', {
                rangeSelector: {
                    selected: 1
                },
                title: {
                    text: 'Layer2'
                },
                series: [{
                        name: 'Layer2',
                        data: <?= json_encode($layer2) ?>,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
            });
        </script>

        <script type="text/javascript">
            // Create the chart
            Highcharts.stockChart('layer3', {
                rangeSelector: {
                    selected: 1
                },
                title: {
                    text: 'Layer3'
                },
                series: [{
                        name: 'Layer3',
                        data: <?= json_encode($layer3) ?>,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
            });
        </script>

        <script type="text/javascript">
            // Create the chart
            Highcharts.stockChart('layer4', {
                rangeSelector: {
                    selected: 1
                },
                title: {
                    text: 'Layer4'
                },
                series: [{
                        name: 'Layer4',
                        data: <?= json_encode($layer4) ?>,
                        tooltip: {
                            valueDecimals: 2
                        }
                    }]
            });
        </script>
    </body>
</html>
