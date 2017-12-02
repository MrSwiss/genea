<?php
$selected = '';

function get_options($selected) {
    $countries = array(
        '--Select--' => 0,
        'ADX : Average Directional Movement Index' => 1,
        'ATR : Average True Range' => 2,
        'BB : Bollinger Band' => 3,
        'CCI : Commodity Channel Index' => 4,
        'Envelopes' => 5,
        'Ichimoku' => 6,
        'MA : Moving Average' => 7,
        'MACD : Moving Averages Convergence/Divergence' => 8,
        'Momentum' => 9,
        'OsMA : Moving Average of Oscillator' => 10,
        'RSI : Relative Strength Index' => 11,
        'SAR : Parabolic Stop and Reverse' => 12,
        'StdDev : Standard Deviation' => 13,
        'STO : Stochastic oscillator' => 14
    );
    $options = '';
    while (list($k, $v) = each($countries)) {
        if ($selected == $v) {
            $options.='<option value="' . $v . '" selected>' . $k . '</option>';
        } else {
            $options.='<option value="' . $v . '">' . $k . '</option>';
        }
    }
    return $options;
}

if (isset($_POST['countries'])) {
    $selected = $_POST['countries'];
    // echo $selected;
}

$selected2 = '';

function get_options2($selected2) {
    $countries2 = array(
        '--Select--' => 0,
        'ADX : Average Directional Movement Index' => 1,
        'ATR : Average True Range' => 2,
        'BB : Bollinger Band' => 3,
        'CCI : Commodity Channel Index' => 4,
        'Envelopes' => 5,
        'Ichimoku' => 6,
        'MA : Moving Average' => 7,
        'MACD : Moving Averages Convergence/Divergence' => 8,
        'Momentum' => 9,
        'OsMA : Moving Average of Oscillator' => 10,
        'RSI : Relative Strength Index' => 11,
        'SAR : Parabolic Stop and Reverse' => 12,
        'StdDev : Standard Deviation' => 13,
        'STO : Stochastic oscillator' => 14
    );
    $options2 = '';
    while (list($k2, $v2) = each($countries2)) {
        if ($selected2 == $v2) {
            $options2.='<option value="' . $v2 . '" selected>' . $k2 . '</option>';
        } else {
            $options2.='<option value="' . $v2 . '">' . $k2 . '</option>';
        }
    }
    return $options2;
}

if (isset($_POST['countries2'])) {
    $selected2 = $_POST['countries2'];
    // echo $selected;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Open Buy</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <table border="1" align="center" cellpadding="3">
                    <tr>
                        <td width="512px" align="center">
                            <!-- ===================================== Logi 1 ======================================== -->		
                            <select name="countries" onchange="this.form.submit();">
<?php echo get_options($selected); ?>
                            </select>
                            <br>
                            <!-- <?php
                            echo $selected;
                            echo "<br>";
                            ?> -->

                            <?php
//============================================================================ 		
                            if ($selected == 0) {
                                echo " ";
                            }
//============================================================================ ADX			
                            elseif ($selected == 1) {
                                ADX();
                            }
//============================================================================ ATR			
                            elseif ($selected == 2) {
                                ATR();
                            }
//============================================================================ BB			
                            elseif ($selected == 3) {
                                BB();
                            }
//============================================================================ CCI			
                            elseif ($selected == 4) {
                                CCI();
                            }
//============================================================================ Envelopes			
                            elseif ($selected == 5) {
                                Envelopes();
                            }
//============================================================================ Ichimoku			
                            elseif ($selected == 6) {
                                Ichimoku();
                            }
//============================================================================ MA			
                            elseif ($selected == 7) {
                                MA();
                            }
//============================================================================ MACD			
                            elseif ($selected == 8) {
                                MACD();
                            }
//============================================================================ Momentum			
                            elseif ($selected == 9) {
                                Momentum();
                            }
//============================================================================ OsMA			
                            elseif ($selected == 10) {
                                OsMA();
                            }
//============================================================================ RSI			
                            elseif ($selected == 11) {
                                RSI();
                            }
//============================================================================ SAR			
                            elseif ($selected == 12) {
                                SAR();
                            }
//============================================================================ StdDev			
                            elseif ($selected == 13) {
                                mStdDeva();
                            }
//============================================================================ STO			
                            elseif ($selected == 14) {
                                STO();
                            }
//============================================================================ 				
                            else {
                                echo "WTF.";
                            }
//============================================================================					
                            ?>

                        </td>
                        <!-- ===================================== Operation 2 ======================================== -->
                        <td width="128px" align="center">
                            <select NAME="Operation">
                                <option value="more">></option>
                                <option value="less"><</option>
                                <option value="equal">=</option>
                            </select>
                        </td>
                        <!-- ===================================== Logi 2 ======================================== -->
                        <td width="512px" align="center">
                            <select name="countries2" onchange="this.form.submit();">
<?php echo get_options2($selected2); ?>
                            </select>
                            <br>
                            <!-- <?php
                            echo $selected;
                            echo "<br>";
                            ?> -->

                            <?php
//============================================================================ 		
                            if ($selected2 == 0) {
                                echo " ";
                            }
//============================================================================ ADX			
                            elseif ($selected2 == 1) {
                                ADX();
                            }
//============================================================================ ATR			
                            elseif ($selected2 == 2) {
                                ATR();
                            }
//============================================================================ BB			
                            elseif ($selected2 == 3) {
                                BB();
                            }
//============================================================================ CCI			
                            elseif ($selected2 == 4) {
                                CCI();
                            }
//============================================================================ Envelopes			
                            elseif ($selected2 == 5) {
                                Envelopes();
                            }
//============================================================================ Ichimoku			
                            elseif ($selected2 == 6) {
                                Ichimoku();
                            }
//============================================================================ MA			
                            elseif ($selected2 == 7) {
                                MA();
                            }
//============================================================================ MACD			
                            elseif ($selected2 == 8) {
                                MACD();
                            }
//============================================================================ Momentum			
                            elseif ($selected2 == 9) {
                                Momentum();
                            }
//============================================================================ OsMA			
                            elseif ($selected2 == 10) {
                                OsMA();
                            }
//============================================================================ RSI			
                            elseif ($selected2 == 11) {
                                RSI();
                            }
//============================================================================ SAR			
                            elseif ($selected2 == 12) {
                                SAR();
                            }
//============================================================================ StdDev			
                            elseif ($selected2 == 13) {
                                mStdDeva();
                            }
//============================================================================ STO			
                            elseif ($selected2 == 14) {
                                STO();
                            }
//============================================================================ 				
                            else {
                                echo "WTF.";
                            }
//============================================================================					
                            ?>
                        </td>
                    </tr>
                </table>
                <!-- ================================= summit =========================================== -->
            </div>
        </form>
        <!-- ==================================================================================== -->	
    </body>
</html>

<?php

function ADX() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_MAIN'>MODE_MAIN</option>";
    echo "<option value='MODE_SIGNAL'>MODE_SIGNAL</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function ATR() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function BB() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Deviation</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Deviation' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Bands Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='BandsShift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_UPPER'>MODE_UPPER</option>";
    echo "<option value='MODE_LOWER'>MODE_LOWER</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function CCI() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function Envelopes() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='MaPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Method</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='MaMethod'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_SMA'>MODE_SMA</option>";
    echo "<option value='MODE_EMA'>MODE_EMA</option>";
    echo "<option value='MODE_SMMA'>MODE_SMMA</option>";
    echo "<option value='MODE_LWMA'>MODE_LWMA</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='MaShift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Deviation</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Deviation' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_UPPER'>MODE_UPPER</option>";
    echo "<option value='MODE_LOWER'>MODE_LOWER</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function Ichimoku() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Tenkan Sen</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='TenkanSen' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Kijun Sen</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='KijunSen' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Senkou Span B</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='SenkouSpanB' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>    ";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_TENKANSEN'>MODE_TENKANSEN</option>";
    echo "<option value='MODE_KIJUNSEN'>MODE_KIJUNSEN</option>";
    echo "<option value='MODE_SENKOUSPANA'>MODE_SENKOUSPANA</option>";
    echo "<option value='MODE_SENKOUSPANB'>MODE_SENKOUSPANB</option>";
    echo "<option value='MODE_CHIKOUSPAN'>MODE_CHIKOUSPAN</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function MA() {
    echo "<table>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='MaShift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Type</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='MaType'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_SMA'>MODE_SMA</option>";
    echo "<option value='MODE_EMA'>MODE_EMA</option>";
    echo "<option value='MODE_SMMA'>MODE_SMMA</option>";
    echo "<option value='MODE_LWMA'>MODE_LWMA</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>MA Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='MaPrice'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function MACD() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr> ";
    echo "<tr>";
    echo "<td>";
    echo "<span>Fast Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='FastPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Slow Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='SlowPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Signal Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='SignalPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_MAIN'>MODE_MAIN</option>";
    echo "<option value='MODE_SIGNAL'>MODE_SIGNAL</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function Momentum() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function OsMA() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Fast EMA Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='FastEMAPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Slow EMA Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='SlowEMAPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Signal Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='SignalPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>    ";
    echo "<tr>";
    echo "<td>";
    echo "<span>Applied Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='AppliedPrice'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function RSI() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Period' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Price</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Price'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='PRICE_CLOSE'>PRICE_CLOSE</option>";
    echo "<option value='PRICE_OPEN'>PRICE_OPEN</option>";
    echo "<option value='PRICE_HIGH'>PRICE_HIGH</option>";
    echo "<option value='PRICE_LOW'>PRICE_LOW</option>";
    echo "<option value='PRICE_MEDIAN'>PRICE_MEDIAN</option>";
    echo "<option value='PRICE_TYPICAL'>PRICE_TYPICAL</option>";
    echo "<option value='PRICE_WEIGHTED'>PRICE_WEIGHTED</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function SAR() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Step</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Step' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>  ";
    echo "<tr>";
    echo "<td>";
    echo "<span>Maximum</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Maximum' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function mStdDeva() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Step</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Step' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Maximum</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Maximum' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function STO() {
    echo "<table>";
    echo "<tbody><tr>";
    echo "<td>";
    echo "<span>TimeFrame</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='TimeFrame'=>";
    echo "<option selected='selected' value='0'>Current</option>";
    echo "<option value='PERIOD_M1'>PERIOD_M1</option>";
    echo "<option value='PERIOD_M5'>PERIOD_M5</option>";
    echo "<option value='PERIOD_M15'>PERIOD_M15</option>";
    echo "<option value='PERIOD_M30'>PERIOD_M30</option>";
    echo "<option value='PERIOD_H1'>PERIOD_H1</option>";
    echo "<option value='PERIOD_H4'>PERIOD_H4</option>";
    echo "<option value='PERIOD_D1'>PERIOD_D1</option>";
    echo "<option value='PERIOD_W1'>PERIOD_W1</option>";
    echo "<option value='PERIOD_MN1'>PERIOD_MN1</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>K Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='KPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>D Period</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='DPeriod' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Slowing</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Slowing' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Method</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Method'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_SMA'>MODE_SMA</option>";
    echo "<option value='MODE_EMA'>MODE_EMA</option>";
    echo "<option value='MODE_SMMA'>MODE_SMMA</option>";
    echo "<option value='MODE_LWMA'>MODE_LWMA</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Mode</span>";
    echo "</td>";
    echo "<td>";
    echo "<select name='Mode'>";
    echo "<option selected='selected' value='--Select--'>--Select--</option>";
    echo "<option value='MODE_MAIN'>MODE_MAIN</option>";
    echo "<option value='MODE_SIGNAL'>MODE_SIGNAL</option>";
    echo "</select>";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<span>Shift</span>";
    echo "</td>";
    echo "<td>";
    echo "<input name='Shift' type='text'>";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}
?>