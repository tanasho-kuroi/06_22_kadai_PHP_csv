<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvファイル書き込み型アニメ名言リスト（入力画面）</title>
</head>

<!-- csvファイル作成・追加書き込み -->

<body>
  <!-- csvファイル作成PHP呼び出し　formでsubmitした内容はこのPHPに飛ぶ -->
  <form action="meigen_csv_create.php" method="POST">
    <fieldset>
      <legend>csvファイル書き込み型アニメ名言リスト（入力画面）</legend>
      <!--  csvファイルを開き、中身を１行ずつ読む。その後Webページに一覧画面を表示するPHP呼び出し -->
      <a href="meigen_csv_read.php">一覧画面</a>
      <div>
        <!-- date項目入力欄 (変数名間違わないように！) -->
        登録日: <input type="date" name="date">
      </div>
      <div>
        <!-- meigen項目入力欄 (name間違わないように！)-->
        名言: <input type="text" name="meigen">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>