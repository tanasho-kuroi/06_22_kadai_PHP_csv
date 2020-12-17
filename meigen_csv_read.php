<?php
// csvファイルを開き、中身を１行ずつ読む。その後Webページに一覧画面を表示する。
// var_dump($_POST);
// exit();
$str = ''; //変数準備
$file = fopen('data/meigen.csv', 'r'); //csvファイルを読み込みモードで表示

flock($file, LOCK_EX); //ファイルにアクセスする間はロックする！
if ($file) { //ファイルがあったときに動作する(while文使うので、条件に合わないやつは弾いておかないと危険(終わらなくなる))
  while ($line = fgets($file)) {
    $str .= "<tr><td>($line)</td></tr>";
  }


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
          <th><?= "$str" ?></th>
        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>