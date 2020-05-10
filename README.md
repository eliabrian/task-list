<p align="center"><img src="https://previews.dropbox.com/p/thumb/AAxUl028BilRiZRynXeEYQP6LgpMIsnfHMQLqiIJl8trGZrkrVsGvcjkW4PIuiHPbpSg7PrX2EEUtPxj7RyYCJPbfo8wtkgzdJaBm8TZV7EIV9huhO0CTQRd5ZDhX_TBHuT1N-CX5Lbkc3XoerdciUnPQkYbK5CSJMlBSeGBgwjLnLnq1Fh9KD5m0KUP-CsyS3Xxvelf0CqxEuWRrc2NrlcLXfvxZFZqiEIVBE7kCsEyG3axb7MUMWOVp4Q4b22GliUFpleKC8dZmRypxzxMhfHc_w0yNtIkG9qNmNpsr9fQ45ZCZL-MztesWFlY68kYlsj9V2fx_8z8kJmxCcvPE86Vzekjfn5OJT1d0OJsvjlP9g/p.png?fv_content=true&size_mode=5" width="400">asker</p>

## About Tasker

Tasker is a web application built using Laravel framework to create your task:

## Configuration

Create the 'tasker database,

Change your database configuration on .env:

```env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasker
DB_USERNAME=root
DB_PASSWORD=root
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock #for MAMP users

```

Run migration

```php
php artisan migrate
```
