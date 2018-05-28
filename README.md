# 参考URL

## エルビス演算子でスマートに変数を初期化（Qiita @do7be）
https://qiita.com/do7be/items/7a2605f027ef7b42858e

## 文字列を暗号化する（忘れっぽいエンジニアのphpリファレンス）
http://www.php-ref.com/bapi/02_crypt.html

## msys や GitBash で cd コマンドに Windows のファイルパスを渡すには（CORREDOR ウェブ、プログラミングの勉強メモ。）
http://neos21.hatenablog.com/entry/2016/10/04/223045

## 正規表現サンプル集
http://www.megasoft.co.jp/mifes/seiki/index_s3.html

# Dockerについて

docker-compose.yml、Dockerfileをコピーすれば他の環境でも使えます。

## databaseの設定

コピーしてきた場合はdatabase.phpに以下を上書きしてください。

```
$dsn = 'mysql:dbname=php;host=mysql;charset=utf8';
$user = 'root';
$password = 'pass';
```

initdb.dディレクトリ作成後、create.sqlをコピーして下さい。

## コマンド

立上げ `docker-compose up -d`

アクセス http://localhost:8080/

終了 `docker-compose stop`

初期ユーザでID 1、ユーザ名 admin、パスワード passを登録しています。
