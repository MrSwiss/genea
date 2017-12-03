<!DOCTYPE html>
<html lang="en">
    <?php
    $active_menu = 2;
    require './head_user.php';
    ?>

    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_1" aria-controls="post" role="tab" data-toggle="tab">OPEN BUY</a></li>
            <li role="presentation" class=""><a href="#tab_2" aria-controls="activity" role="tab" data-toggle="tab">OPEN SELL</a></li>
            <li role="presentation" class=""><a href="#tab_3" aria-controls="post" role="tab" data-toggle="tab">CLOSE BUY</a></li>
            <li role="presentation" class=""><a href="#tab_4" aria-controls="activity" role="tab" data-toggle="tab">CLOSE SELL</a></li>
            <li role="presentation" class=""><a href="#tab_5" aria-controls="activity" role="tab" data-toggle="tab">OPTION</a></li>
            <li role="presentation" class=""><a href="#tab_6" aria-controls="activity" role="tab" data-toggle="tab">submit</a></li>
        </ul>
        <!-- Tab panes -->
        <form class="tab-content form-horizontal col-md-12" method="post" action="form_submit.php" target="blank_">

            <?php
            $hidden = 1;
            ?>

            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane active form-horizontal" id="tab_1">
                <!--<p>Hi Open Buy</p>-->
                <div class="form-group">
                    <button class="btn btn-success" type="button" onclick="add('tab_1');">add</button>
                </div>
                <input id="tab_1_idc_n" name="tab_1_idc_n" type="<?= ($hidden == 1 ? 'hidden' : 'text') ?>" value="0">
            </div>
            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane form-horizontal " id="tab_2">
                <!--<p>hi open sell</p>-->
                <div class="form-group">
                    <button class="btn btn-success" type="button" onclick="add('tab_2');">add</button>
                </div>
                <input id="tab_2_idc_n" name="tab_2_idc_n" type="<?= ($hidden == 1 ? 'hidden' : 'text') ?>" value="0">
            </div>
            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane form-horizontal" id="tab_3">
                <!--<p>hi close buy</p>-->
                <div class="form-group">
                    <button class="btn btn-success" type="button" onclick="add('tab_3');">add</button>
                </div>
                <input id="tab_3_idc_n" name="tab_3_idc_n" type="<?= ($hidden == 1 ? 'hidden' : 'text') ?>" value="0">
            </div>
            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane form-horizontal " id="tab_4">
                <!--<p>hi close sell</p>-->
                <div class="form-group">
                    <button class="btn btn-success" type="button" onclick="add('tab_4');">add</button>
                </div>
                <input id="tab_4_idc_n" name="tab_4_idc_n" type="<?= ($hidden == 1 ? 'hidden' : 'text') ?>" value="0">
            </div>
            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane form-horizontal " id="tab_5">
                OPTION
            </div>
            <div role="tabpanel" style="padding-top: 10px;" class="tab-pane form-horizontal " id="tab_6">
                <button class="btn btn-success">ตกลง</button>
            </div>
        </form>
    </div>



    <script>
        $(function () {
            $.ajaxSetup({async: false});
        });
        var num_tab = 4;
        var flag = [0, 0, 0, 0];
        var idc_name_array = ['none.php', 'ADX_1.php', 'ATR.php', 'BB.php', 'CCI.php', 'Envelopes.php', 'Ichimoku.php', 'MA.php', 'MACD.php'
                    , 'Momentum.php', 'OsMA.php', 'RSI.php', 'SAR.php', 'StdDev.php', 'STO.php', 'Close.php', 'Open.php', 'High.php', 'Low.php', 'Value.php'];
        function add(tab_i) {
            var t_idx = tab_i.split('_');
            t_idx = t_idx[1];
            $.post('./indicator/A_option.php', {param1: 0}, function (result) {
                $('#' + tab_i).append(result);
                // logic 

                $('#logic__').attr('name', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_logic';
                });
                $('#logic__').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_logic';
                });
                // ตัว remove
                $('#tab_i_idc_j').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                // ฝั่งซ้าย
                $('#first').attr('name', function () {
                    return tab_i + '_idc_left_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                $('#first').attr('id', function () {
                    return tab_i + '_idc_left_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                // ตรงกลาง
                $('#operator').attr('name', function () {
                    return tab_i + '_idc_middle_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                $('#operator').attr('id', function () {
                    return tab_i + '_idc_middle_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                // ฝั่งขวา
                $('#last').attr('name', function () {
                    return tab_i + '_idc_right_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });
                $('#last').attr('id', function () {
                    return tab_i + '_idc_right_' + parseInt($('#tab_' + t_idx + '_idc_n').val());
                });

                // body
                $('#body_first').attr('name', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_body_first';
                });
                $('#body_first').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_body_first';
                });
                $('#body_last').attr('name', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_body_last';
                });
                $('#body_last').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_body_last';
                });
                // num_element
                $('#num_ele_first').attr('name', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_num_ele_first';
                });
                $('#num_ele_first').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_num_ele_first';
                });
                $('#num_ele_last').attr('name', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_num_ele_last';
                });
                $('#num_ele_last').attr('id', function () {
                    return tab_i + '_idc_' + parseInt($('#tab_' + t_idx + '_idc_n').val()) + '_num_ele_last';
                });
                $('#tab_' + t_idx + '_idc_n').val(parseInt($('#tab_' + t_idx + '_idc_n').val()) + parseInt(1));

                // delete
                $('#tab_' + t_idx + ' > div').each(function (index) {
//                        console.log(index);
                    if (index === 1) {
                        var tempper = $(this).attr('id').split('_');
                        $('#tab_' + tempper[1] + '_idc_' + tempper[3] + '_logic').remove();
                    }
                });
            });
        }
        function getChild(id, sign) {
            // tab_1_idc_0_body_first
            var id_ = id.split('_');
            console.log(id_);
            if ($('#' + id).val() > 0) {
                $.post('./indicator/' + idc_name_array[$('#' + id).val()], {param1: 0}, function (result) {
                    var counter = 0;
                    $('#tab_' + id_[1] + '_idc_' + id_[4] + '_body_' + sign).html(result);
                    $('#tab_' + id_[1] + '_idc_' + id_[4] + '_body_' + sign + ' select').each(function (index) {
                        //                            console.log('select -> ' + index + ": " + $(this).attr('name'));
                        //                            console.log($("select[name='" + $(this).attr('name') + "']").val());

                        $("select[name='" + $(this).attr('name') + "']").attr('name', function () {
                            counter += 1;
                            return 'tab_' + id_[1] + '_idc_' + id_[4] + '_sign_' + sign + '_element_' + counter;
                        });
                    });
                    $('#tab_' + id_[1] + '_idc_' + id_[4] + '_body_' + sign + ' input').each(function (index) {
                        //                            console.log('input -> ' + index + ": " + $(this).attr('name'));
                        $("input[name='" + $(this).attr('name') + "']").attr('name', function () {
                            counter += 1;
                            return 'tab_' + id_[1] + '_idc_' + id_[4] + '_sign_' + sign + '_element_' + counter;
                        });
                    });
                    $('#tab_' + id_[1] + '_idc_' + id_[4] + '_num_ele_' + sign).val(counter);
                });
            }

        }
        function removeIdc(id) {
            var temp = id.split('_');

            $('#' + id).remove();
            $('#tab_' + temp[1] + ' > div').each(function (index) {
                console.log(index);
                if (index === 1) {
                    var tempper = $(this).attr('id').split('_');
                    $('#tab_' + tempper[1] + '_idc_' + tempper[3] + '_logic').remove();
                }
            });
        }
    </script>

