<?php

$keyword = ["อ่านโดจินแปลไทย", "การตูนโป๊ออนไลน์", "doujin 18+", "อ่านตูนโป้", "อ่านโดจินฟรี", "โดจินแปล", "h doujin", "doujin xxx", "doujinshi online"
    , "โดจินมาใหม่", "โดจินเรื่องใหม่", "เว็บโดจิน", "อ่านการตูนโป็"];
$slug = "โดจินแปลไทย ที่จัดมาให้ชมในหลายๆแนว โดจินครอบครัว อ่านโดจินเรื่องใหม่ทุกวันแบบแปลไทย อ่านโดจินฟรีอีกด้วย การตูนโป๊ออนไลน์";
$tag_array = ["Doujin(โดจินแปลไทย)",
    "วีดีโอ Hentai",
    "hentai",
    "hentai sex",
    "นักศึกษา",
    "เรื่องเด่น",
    "โดจิน",
    "อ่านโดจินแปลไทย",
    "เรื่องเด่ว",
    "ผัวไม่อยู่",
    "ภาพขาวดำ",
    "อุราระกะสตอรี่ Uraraka Ura Fuzoku tag: my hero academia",
    "โดจินมาใหม่-เล่นกับชู้ที่ทำงาน",
    "อ่านการตูนโป็ doujin xxx",
    "โดจินแปลไทย",
    "อ่านการตูนโป็",
    "อ่านโดจินฟรี",
    "โดจินมาใหม่ แม่ยายที่รัก [Kazuhiro] Musume ni wa Ienai Himitsu no Chitai",
    "ตกปลาด้วยรูป",
    "ดูอนิเมะออนไลน์",
    "บาปร้ายซ่อนราคะ",
    "doujinshi",
    "doujin xxx",
    "doujinshi online",
    "เสียตัวแต่ไม่เสียซิง",
    "โดจินแปล",
    "โดจินแปล สะกดจิตน้องสาวจิ๊กกี๋ด้วยนิ้วเดียว",
    "โดจินแปล เพื่อนไม่เก่า",
    "เว็บโดจิน จำใจผิด เพราะติดใจ",
    "อ่านการตูนโป็-น้ำตาลแดง",
    "สาวร่าน ล่าเก็บแต้ม",
    "โดนหลอกมารุม",
    "การ์ตูนไทย18+",
    "doujin thai",
    "โดจินมาใหม่ ฝึกหนักในห้องวิทย์",
    "ข่มขืนสามสาว",
    "โดจินเรื่องใหม่",
    "h doujin",
    "หาเหยื่อสาวๆ",
    "อ่านตูนโป้",
    "เว็บโดจินค่ำคืนดอกไม้ไม้ไฟ",
    "เว็บโดจิน ปิดตาแลกคู่",
    "เยดเมด",
    "โดจินมาใหม่",
    "เว็บโดจิน",
    "ยัยปิศาจตัวน้อย",
    "ความลับของหญิงสาว",
    "doujin",
    "อ่านโดจินฟรี แบล็คเมล์แม่เพื่อน [Takatsu] Mittsu Me wa Betsu no Kao",
    "doujin 18",
    "อ่านโดจินแปลไทย ด้านมืดของเมอคิวรี 2",
    "โดจินแปล ตกปลาด้วยรูป",
    "ลงแขก",
    "doujin xxx อัดกระแทก ห้องลองเสื้อ",
    "อ่านการตูนโป็ เธอเลือกเอง",
    "การเงินมีปัญหา",
    "ใส่ชุดนักศึกษามาหาครู",
    "พี่สาว",
    "ครอบครัว",
    "เฒ่าหัวงู",
    "นักศึกษา",
    "สาวใช้",
    "รุนแรง",
    "เว็บโดจิน ทำได้ดีกว่าการเรียน",
    "อ่านการตูนโป็-มีแฟนแล้ว",
    "เว็บโดจิน อยากได้เสียเกินจะทน",
    "สาวใหญ่ถวิลรัก",
    "doujinxxx",
    "อ่านโดจินฟรี ฉลองวันเกิดมาดามเชอร์รี่ Birthday"];
$bank_banner = [
    0 => '<iframe src="//ads.exosrv.com/iframe.php?idzone=2879870&size=300x250" width="300" height="250" scrolling="no"  frameborder="0"></iframe>',
    1 => '<iframe src="//ads.exosrv.com/iframe.php?idzone=2879874&size=300x250" width="300" height="250" scrolling="no"  frameborder="0"></iframe>',
    2 => '<iframe src="//ads.exosrv.com/iframe.php?idzone=2879876&size=300x250" width="300" height="250" scrolling="no"  frameborder="0"></iframe>',
    3 => '<iframe src="//ads.exosrv.com/iframe.php?idzone=2879880&size=300x250" width="300" height="250" scrolling="no"  frameborder="0"></iframe>',
];

$endder = 12718;
$counter___ = 1;
while ($counter___ <= 100) {
    $counter___ ++;
    $url = "http://doujin-gth.com/forum/index.php?topic={$endder}.msg12726;topicseen#msg12721";
    $endder --;
    echo substr($url, 45, 5) . '<br>';
    $folder_story = substr($url, 45, 5);

    echo 'name :' . $folder_story . '===>' . $url . '<br>____<br>';
    $path_name = 'download/' . $folder_story;
    createfolder($path_name);
    $child_page = file_get_contents($url);


    $result_child = SearchString($child_page, 'http://doujin-gth.com/forum/auto-system/');
//
    $story_idx = SearchString($child_page, '<h1>');
    $name_thai = '';
    $count = 0;

    while (@count(SearchString($name_thai, '</h1>')) <= 0 and $count <= 200) {
        $name_thai.= @$child_page[$story_idx[0] + $count];
        $count ++;
    }
    $name_thai = substr($name_thai, 11, -11);
    $name_thai = str_replace(' ', '', $name_thai);

    echo $name_thai . '<br>';
//
//    $story_idx = SearchString($child_page, '<h2 class="panel-title">');
//    $name = '';
//    $count = 0;
//    while (@count(SearchString($name, '</h2>')) <= 0 and $count <= 200) {
//        $name.= @$child_page[$story_idx[0] + $count];
//        $count ++;
//    }
//    $story_name = substr($name, 24, -5);
//    $story_name = str_replace('</h2>', '', $story_name);
////
//    echo $story_name . '<br>';
////
//    $tag_name = SearchString($child_page, 'target="blank">');
//    $tag = 'tag: ';
//    foreach ($tag_name as $tags) {
//        $loop_tag = '';
//        $count = 0;
//        while (count(SearchString($loop_tag, '</a>')) <= 0) {
//            $loop_tag.= $child_page[$tags + $count];
//            $count ++;
//        }
//        $loop_tag = str_replace('target="blank">', '', $loop_tag);
//        $tag.=$loop_tag . ' , ';
//    }
//    $tag = substr($tag, 0, -2);
//    $tag = str_replace('</a>', '', $tag);
//    echo $tag . '<br>';
//    echo $path_name . '<br>';
    $story_name = $name_thai;
    $tags = '';
    shuffle($tag_array);
    $break_tag = rand(0, 8);
    for ($i = 0; $i <= $break_tag; $i++) {
        $tags.= $tag_array[$i];
        if ($i < $break_tag) {
            $tags.=',';
        }
    }

// text file
    $file = fopen($path_name . "/detail.txt", "w");
    $idx = rand(0, 12);
    echo fwrite($file, $keyword[$idx] . ' ' . $story_name . "\n");
//    echo fwrite($file, $story_name . "\n");
    echo fwrite($file, 'tags : '. $tags . "\n");

    echo fwrite($file, '<center><p style="text-align: center;">' . "\n");
// download img
    $i = 1;
    $text_stop = "";
    $count_text_1 = 0;
    foreach ($result_child as $row2) {
        $count = 0;
        $text = "";
        $url_break = 0;
        while (count(SearchString($text, '.jpg')) <= 0 and count(SearchString($text, '.png')) <= 0 and $url_break < 100) {
            $url_break ++;
            $text.= $child_page[$row2 + $count];
            if ($i == 2 && $count < intval($count_text_1 * 0.7)) {
                $text_stop .= $child_page[$row2 + $count];
            } else if ($i == 1) {
                $count_text_1 ++;
            }
            $count ++;
        }
        if ($i > 5) {
            if (count(SearchString($text, $text_stop)) == 0)
                break;
        }
//$name_file = explode('/', $text);
        if ($i == 1) {
            file_put_contents($path_name . '/title.jpg', fopen($text, 'r'));
        }
        echo $text . "<br>";
        if ($i % 2 == 0) {
            if (rand(1, 10) >= 7) {
                echo fwrite($file, '<iframe src="//ads.exosrv.com/iframe.php?idzone=2844216&size=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>' . "\n");
            } else {
                echo fwrite($file, $bank_banner[rand(0, count($bank_banner) - 1)] . "\n");
            }
        }
        $idx_key = rand(0, 12);
        echo fwrite($file, '<img class="aligncenter size-full"  src="' . $text . '" alt="' . $story_name . '|' . $tags . '| ' . $keyword[$idx_key] . ' | ' . $slug . '" width="795" height="1107" /> ' . "\n");
        $i++;
    }
    echo fwrite($file, '</p></center>');
    fclose($file);
    echo "<br>";
}

function createfolder($path = "") {
    $str = "";
    $str = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);
    $str = str_replace("index.html", "", $str);
    $str = str_replace("script_load_doujin_bk.php", "", $str);
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

