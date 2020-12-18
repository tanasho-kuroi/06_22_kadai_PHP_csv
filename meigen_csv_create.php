<?php
// csvファイル作成
// var_dump($_GET);
// exit();


$meigen = $_POST['meigen']; //POSTのmeigenを受け取り
$date = $_POST['date']; //POSTのdatalineを受け取り

// １行目に項目名を書きたい
$file_name ='data/meigen.csv';
if (!(file_exists($file_name))) { //ファイルがあったときに動作する(while文使うので、条件に合わないやつは弾いておかないと危険(終わらなくなる))
    $file = fopen('data/meigen.csv', 'a'); //meigen.csvを開く。引数はa(追加書き込みのみ)
    $write_data = "date,meigen\n"; //書き込むデータの準備
    flock($file, LOCK_EX); //ファイルをロック(編集中は他から編集されない様に！)
    fwrite($file, $write_data); //$write_dataを書き込み
    // fputcsv($file, $write_data); //$write_dataを配列にしないといけないらしい
    flock($file, LOCK_UN); //終わるのでロック解除
    fclose($file); //ファイル閉じる
}




// *********  データのうち一つをリンクにしてcsvに書き込み→csvにタグもそのまま書き込まれてしまう)  *********
$data_link="<a href=\"https://www.google.com/search?q={$meigen}\">検索：{$meigen}</a>";
$write_data = "{$date},{$meigen},{$data_link}\n"; //書き込むデータの準備
// $write_data = "{$date},{$meigen},https://www.google.com/search?q={$meigen}\n"; //書き込むデータの準備
// $write_data = "{$date},{$meigen},<a href='https://www.google.com/search?q={$meigen}'></a>\n"; //書き込むデータの準備
$file = fopen('data/meigen.csv', 'a'); //meigen.csvを開く。引数はa(追加書き込みのみ)
// var_dump($_GET);
// exit();

flock($file, LOCK_EX); //ファイルをロック(編集中は他から編集されない様に！)
// fwrite($file, $write_data2); //$write_dataを書き込み
fwrite($file, $write_data); //$write_dataを書き込み
flock($file, LOCK_UN); //終わるのでロック解除
fclose($file); //ファイル閉じる

header('Location:meigen_csv_input.php');//入力画面に移動(つまりinputに呼び出されて上記処理したあと、戻るということか)
