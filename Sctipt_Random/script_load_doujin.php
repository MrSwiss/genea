<?php

$keyword = ["อ่านโดจินแปลไทย", "การตูนโป๊ออนไลน์", "doujin 18+", "อ่านตูนโป้", "อ่านโดจินฟรี", "โดจินแปล", "h doujin", "doujin xxx", "doujinshi online"
    , "โดจินมาใหม่", "โดจินเรื่องใหม่", "เว็บโดจิน", "อ่านการตูนโป็"];

$per_page = 24;
$max_page = 10;
for ($page = 1; $page <= $max_page; $page ++) {
    $page_steal = $per_page * $page;

    $url = "http://doujin-th.com/forum/index.php/board,1.{$page_steal}/tag,8.html";
//    $url = "http://doujin-th.com/forum/index.php?action=tags&tagid=3&start={$page_steal}";
    $main_page = file_get_contents($url);
    $result = SearchString($main_page, '//doujin-th.com/forum/index.php?topic=');
    $result_name = SearchString($main_page, '<div class="well well-sm">');
    foreach ($result as $key => $row) {
        $url = 'http:';
        $count = 0;
        while (count(SearchString($url, '.0')) <= 0) {
            $url.= $main_page[$row + $count];
            $count ++;
        }
        $folder_story = substr($url, 43, -2);

        echo 'name :' . $folder_story . '===>' . $url . '<br>____<br>';
        $path_name = 'download/' . $folder_story;
        createfolder($path_name);
        $child_page = file_get_contents($url);
        $result_child = SearchString($child_page, "<br /><img src=");

        $story_idx = SearchString($child_page, '<h1 class="panel-title">');
        $name_thai = '';
        $count = 0;
        while (count(SearchString($name_thai, '</h1>')) <= 0) {
            $name_thai.= $child_page[$story_idx[0] + $count];
            $count ++;
        }
        $name_thai = substr($name_thai, 24, -5);
        $name_thai = str_replace('</h1>', '', $name_thai);

        $story_idx = SearchString($child_page, '<h2 class="panel-title">');
        $story_name = '';
        if (count($story_idx) > 0) {
            $name = '';
            $count = 0;
            while (count(SearchString($name, '</h2>')) <= 0) {
                $name.= $child_page[$story_idx[0] + $count];
                $count ++;
            }
            $story_name = substr($name, 24, -5);
            $story_name = str_replace('</h2>', '', $story_name);
        }
        echo $story_name . '<br>';

        $tag_name = SearchString($child_page, 'target="blank">');
        $tag = 'tag: ';
        foreach ($tag_name as $tags) {
            $loop_tag = '';
            $count = 0;
            while (count(SearchString($loop_tag, '</a>')) <= 0) {
                $loop_tag.= $child_page[$tags + $count];
                $count ++;
            }
            $loop_tag = str_replace('target="blank">', '', $loop_tag);
            $tag.=$loop_tag . ' , ';
        }
        $tag = substr($tag, 0, -2);
        $tag = str_replace('</a>', '', $tag);
        echo $tag . '<br>';
        echo $path_name . '<br>';
        // text file
        $file = fopen($path_name . "/detail.txt", "w");
        $idx = rand(0, 12);
        echo fwrite($file, $keyword[$idx] . ' ' . $name_thai . "\n");
        echo fwrite($file, $story_name . "\n");
        echo fwrite($file, $tag . "\n");

        echo fwrite($file, '<center><p style="text-align: center;">' . "\n");
        // download img
        $i = 1;
        $text_stop = "";
        $count_text_1 = 0;
        $shift = 16;
//        echo "<pre>";
//        print_r($result_child);
//        echo "</pre>";
        foreach ($result_child as $row2) {
            $count = 0;
            $text = "";

            while (count(SearchString($text, '.jpg')) <= 0) {
                $text.= $child_page[$row2 + $count + $shift];
                if ($i == 2) {
                    $text_stop .= $child_page[$row2 + $count + $shift];
                } else if ($i == 1) {
                    $count_text_1 ++;
                }
                $count ++;
            }
//            if ($i > 5) {
//                if (count(SearchString($text, $text_stop)) == 0)
//                    break;
//            }

            if ($i == 1) {
                file_put_contents($path_name . '/title.jpg', fopen($text, 'r'));
            }
            echo $text . "<br>";
            if ($i % 4 == 0) {
                if (rand(1, 10) > 5) {
                    echo fwrite($file, '
<p style="text-align: center;"><script type="text/javascript">
var ad_idzone = "2844216",
	 ad_width = "728",
	 ad_height = "90";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2844216" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2844216&output=img&type=728x90" width="728" height="90"></a></noscript></p>
	' . "\n");
                } else {
                    echo fwrite($file, '<script type="text/javascript">
var ad_idzone = "2844234",
	 ad_width = "300",
	 ad_height = "250";
</script>
<script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
<noscript><a href="https://main.exosrv.com/img-click.php?idzone=2844234" target="_blank"><img src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=2844234&output=img&type=300x250" width="300" height="250"></a></noscript>' . "\n");
                }
            }
            echo fwrite($file, '<img class="aligncenter size-full"  src="' . $text . '" alt="" width="795" height="1107" /> ' . "\n");
            $i++;
        }
        echo fwrite($file, '</p></center>');
        fclose($file);
        echo "<br>";
        //break;
    }
}

function createfolder($path = "") {
    $str = "";
    $str = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);
    $str = str_replace("index.html", "", $str);
    $str = str_replace("script_load_doujin.php", "", $str);
    $rootPath = $str;
//    echo $rootPath;
//    echo 'create folder-->';
    $folderPath = '';
    if (!empty($path)) {
        $tmp = explode("/", $path);
        foreach ($tmp as $val) {
//            echo '--'.$val.' --';
            if (!empty($val)) {
//                echo $val . '/';
                $folderPath.=$val . "/";
                if (!is_dir($rootPath . $folderPath)) {
                    mkdir($rootPath . $folderPath, 0777);
                }
            }
        }
    }
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
?>

