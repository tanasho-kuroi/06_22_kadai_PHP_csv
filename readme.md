# アニメの名言を追加していくだけの csv

## プロダクトの紹介(サンプルコードまま)

-  csv に form の内容を追加していく
-  ただアニメの名言を追加してく

## 工夫した点，こだわった点

-  名言をそのままハイパーリンクにしたかった。。。
-

## 苦戦した点，共有したいハマりポイントなど

-  名言をそのままハイパーリンクにしたかった。。。が、csv ファイルのセルをハイパーリンクにする方法が見つからなかった。
-

## やり残したこと

-  csv のセルをハイパーリンクにする → ぼつ。そもそも csv から直でリンクにとびたいシチュエーションがないと思い直した。→Web ページの時だけ、リンクになる様にしたい
   → ラインごとに read しているから、ラインごとしか内容を扱えない。read する際に配列として 1 要素ずつ read しなくてはならないが、良くわからず。
-  fgetcsv など、csv 特有のコマンドがうまく使えなかった
-  登録日を任意にして、カレンダー風に名言が届く感じにしたかった。

### 詳細記録(雑多)

●●● 　 ◎：完了、○：おおよそ完了、△：いまいち、×：まだ　 ●●●
●●●●●●●●●●● 記録 ●●●●●●●●●●●●

◎CSV ファイル作成

◎ セルごとに入力(カンマ区切りで出来た)

○google のリンク名に変えたものを csv にアップ

○ 入力された内容について、google 検索 →Web ページ上ではできた。

＊＊csv には入力そのままをアップし、後で or 同時にリンクにする、
＊＊Web 上では、csv の値を引っ張ってきて、それにハイパーリンクのタグを追加して表示する

×csv の任意のセルをハイパーリンクにする

× 日付順に並び替える

× カレンダー表示

× 登録日がそのまま該当のカレンダーの日付に登録される

×
