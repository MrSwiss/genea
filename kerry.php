<?php

$track = ['SSUTZ00032458','SSUTZ00032547', 'SSUTZ00032548', 'SSUTZ00032549', 'SSUTZ00032550', 'SSUTZ00032551', 'SSUTZ00032552', 'SSUTZ00032553'
    , 'SSUTZ00032554', 'SSUTZ00032555', 'SSUTZ00032556', 'SSUTZ00032557', 'SSUTZ00032558', 'SSUTZ00032559'
    , 'SSUTZ00032560', 'SSUTZ00032561', 'SSUTZ00032562', 'SSUTZ00032563', 'SSUTZ00032564'];
foreach ($track as $tt) {
    $url = "https://th.kerryexpress.com/th/track/?track=" . $tt;
    $main_page = file_get_contents($url);
    // info
    $result = SearchString($main_page, '<div class="info">');
    $count = 0;
    $for_out = '';
    echo $url . '<br>';
    while (True) {
        $for_out .= $main_page[$result[0] + $count];
        $count ++;
        if (count(SearchString($for_out, '<div')) == count(SearchString($for_out, '</div')) and $count > 100) {
            break;
        } // good
//        else {
//            echo count(SearchString($for_out, '<div')) . ' == ' . count(SearchString($for_out, '</div')) . ' count : ' . $count . '<br>';
//        }
    }
    $for_out = str_replace('<div class="info">', '', $for_out);
    $for_out = str_replace('</div>', '', $for_out);
    echo $for_out . '<br>';
    // end info
    // status
    $result = SearchString($main_page, '<div class="col colStatus">');
    $count = 0;
    $for_out = '';
    while (True) {
        $for_out .= $main_page[$result[0] + $count];
        $count ++;
        if (count(SearchString($for_out, '<div')) == count(SearchString($for_out, '</div')) and $count > 100) {
            break;
        } // good
//        else {
//            echo count(SearchString($for_out, '<div')) . ' == ' . count(SearchString($for_out, '</div')) . ' count : ' . $count . '<br>';
//        }
    }
    $for_out = str_replace('<div class="col colStatus">', '', $for_out);
    $for_out = str_replace('</div>', '', $for_out);
    echo $for_out . '<br>';
    echo "<hr>";
}

function SearchString($str, $pat) {
    $retVal = array();
    $M = strlen($pat);
    $N = strlen($str);
    $i = 0;
    $j = 0;
    $lps = array();

    ComputeLPSArray($pat, $M, $lps);

    while ($i < $N) {
        if ($pat[$j] == $str[$i]) {
            $j++;
            $i++;
        }

        if ($j == $M) {
            array_push($retVal, $i - $j);
            $j = $lps[$j - 1];
        } else if ($i < $N && $pat[$j] != $str[$i]) {
            if ($j != 0)
                $j = $lps[$j - 1];
            else
                $i = $i + 1;
        }
    }

    return $retVal;
}

function ComputeLPSArray($pat, $m, &$lps) {
    $len = 0;
    $i = 1;

    $lps[0] = 0;

    while ($i < $m) {
        if ($pat[$i] == $pat[$len]) {
            $len++;
            $lps[$i] = $len;
            $i++;
        } else {
            if ($len != 0) {
                $len = $lps[$len - 1];
            } else {
                $lps[$i] = 0;
                $i++;
            }
        }
    }
}
