# SlackBot-PHP

## 概要<br>
PHP+ライブラリBotManを使ったSlackBot<br>
※PHP7推奨。PHP5だとエラーになるかと思います。

## Linux-PHP7.3インストール方法<br>

EPELインストール
```
$ sudo yum install epel-release
```
yumを更新　
```
$ sudo yum update
```
Remiインストール
```
$ sudo yum -y install <span>http</span>://rpms.famillecollet.com/enterprise/remi-release-7.rpm
```
yumを更新
```
$ sudo yum update
```
php7.3インストール
```
$ sudo yum -y install --enablerepo=remi,remi-php73 php php-devel php-mbstring php-pdo php-gd 　php-xml php-mcrypt
```
PHP7.3がインストールされているか確認
```
$ php -v
```

## 使用方法<br> 

```
$ git clone https://github.com/k-wada6/SlackBot-PHP
```
```
tokenid.phpを作成、SlackBotのAPIを記載。
```
※my-bot-fileとtokenidのファイルパスは同じにしてください。<br><br>
例：　　<?php<br>
　　　　echo 'xxxx-xxxxxxx-xxxxxxxx-xxxxxxxxxxxxxxxx';<br><br>
```
my-bot-file.phpの実行
```

## コマンド一覧<br>
     ●　  天気　　：現在の天気の取得。
     ●　  天気詳細：天気の詳細。
     ●　  現在　　：現在の日付時間の取得。
     ●　  コマンド : コマンド一覧の取得。
     ●    メモ帳　：投稿した内容をDBに保存
     ●　   メモ内容: テキストファイルに保存された内容を取得(今後DBに切り替える) 

## ToDo<br>
     ●　メモ機能　DBからメモの内容を取得(テキストファイルからの取得は完了している為、取得先をDBに切り替える)
     ●　地震速報
     ●
    
