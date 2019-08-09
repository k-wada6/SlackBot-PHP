# SlackBot-PHP

## 概要<br>
PHP+ライブラリBotManを使ったSlackBot<br>
※PHP7推奨。PHP5だとエラーになるかと思います。

## Linux-PHP7.3インストール方法<br>
<ol>
<li>EPELインストール</li>
```
　$ sudo yum install epel-release
```
<li>yumを更新</li>　
```
$ sudo yum update
```
<li>Remiインストール</li>　
```$ sudo yum -y install <span>http</span>://rpms.famillecollet.com/enterprise/remi-release-7.rpm
```
<li>yumを更新</li>　
```$ sudo yum update
```
<li>php7.3インストール</li>　
```
$ sudo yum -y install --enablerepo=remi,remi-php73 php php-devel php-mbstring php-pdo php-gd 　php-xml php-mcrypt
```
<li>PHP7.3がインストールされているか確認</li>　
```$ php -v
```
</ol>

## 使用方法<br> 
```
１．　$ git clone <span>https</span>://github.com/k-wada6/SlackBot-PHP<br>
２．　tokenid.phpを作成、SlackBotのAPIを記載。<br>
　　　※my-bot-fileとtokenidのファイルパスは同じにしてください。<br><br>
例：　　<?php<br>
　　　　echo 'xxxx-xxxxxxx-xxxxxxxx-xxxxxxxxxxxxxxxx';<br><br>
３.   my-bot-file.phpの実行<br>
```

## コマンド一覧<br>
     ●　  天気　　：現在の天気の取得。
     ●　  天気詳細：天気の詳細。
     ●　  現在　　：現在の日付時間の取得。
     ●　  コマンド : コマンド一覧の取得。

## ToDo<br>
     ●　
     ●
     ●
    