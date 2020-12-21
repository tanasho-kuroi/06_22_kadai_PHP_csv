<?php
// csvファイルを開き、中身を１行ずつ読む。その後Webページに一覧画面を表示する。
// var_dump($_POST);
// exit();
$str = ''; //変数準備
$file = fopen('data/meigen.csv', 'r'); //csvファイルを読み込みモードで表示
$newAry = array();//配列の準備
$row = 0;//配列の行数

flock($file, LOCK_EX); //ファイルにアクセスする間はロックする！
if ($file) { //ファイルがあったときに動作する(while文使うので、条件に合わないやつは弾いておかないと危険(終わらなくなる))
  while ($line = fgets($file)) {
  //   $str .= "<tr><td>($line)</td></tr>";// .= : ドットイコールは上書きではなく追加結合していく
    $newAry[]=$line;// 配列にする意味：１行ごとではなく、一つ一つを取り出したいから。。。のはずが、結局ラインごとになっている
    echo "$row\n";
    echo "${newAry[$row]}\n";
    //ラインごとで入れているから、ラインごとしか取り出せない！
    // echo "${newAry[$row][0]}\n";
    // echo "https://www.google.com/search?q={$newAry[$row][1]}'<br>'";
    $row++;
    "";
  }
// var_dump($newAry);
// exit();


  // とりあえずfgetcsvを試してみた
  // echoだと、HTMLの書式設定より更に前で出力してしまう。
  // 今の状態は、結局行ごとになっている。
  // while ($line = fgetcsv($file)){
  //   echo "$row\n";
  //   $row++;
  //   foreach($line as $value){
  //     echo "${value}\n";
  //   }
  //   echo "'<br>'";
  // }

// *********  csvのファイルを読み、一つ一つ取り出す(うち一つをリンクにする！)  *********
        // foreach ($file as $lineNum => $line) {
        //       if($lineNum == 0) {
        //       continue;
        //       }
        //       print "         <tr id=\"tr" . $lineNum . "\">";

        //       $tokens = str_getcsv($line);
        //       print "<td>" . trim($tokens[0])  "</td>";           
        //       print "<td>" . trim($tokens[1]) . "</td>";  
        //       print "</script>\n";
        //   }

}

flock($file, LOCK_UN); //ファイルにアクセスし終わったのでロック解除する
fclose($file); //ファイルを閉じる
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 一覧画面を表示(input画面とは別) -->
  <title>csvファイル書き込み型アニメ名言リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>csvファイル書き込み型アニメ名言リスト（一覧画面）</legend>
    <!-- input画面に戻るためのリンク -->
    <a href="meigen_csv_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>登録日</th>
          <th>名言</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- １行ずつ読んだ変数(PHP)を呼び出し -->
<!-- 配列じゃない時：$str -->
          <th><?= "$newAry()" ?></th>

<?php //HTMLのbody内に書き込んでもおkー！！
// csvファイルを開き、中身を１行ずつ読む。その後Webページに一覧画面を表示する。
// var_dump($_POST);
// exit();
$str = ''; //変数準備
$file = fopen('data/meigen.csv', 'r'); //csvファイルを読み込みモードで表示
$newAry = array();//配列の準備
$row = 0;//配列の行数

flock($file, LOCK_EX); //ファイルにアクセスする間はロックする！
if ($file) { //ファイルがあったときに動作する(while文使うので、条件に合わないやつは弾いておかないと危険(終わらなくなる))
  while ($line = fgets($file)) {
  //   $str .= "<tr><td>($line)</td></tr>";// .= : ドットイコールは上書きではなく追加結合していく
    $newAry[]=$line;// 配列にする意味：１行ごとではなく、一つ一つを取り出したいから。。。のはずが、結局ラインごとになっている
    echo "$row\n";
    echo "${newAry[$row]}\n";
    $row++;
    echo "'<br>'";
  }
}
flock($file, LOCK_UN); //ファイルにアクセスし終わったのでロック解除する
fclose($file); //ファイルを閉じる
?>


        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>