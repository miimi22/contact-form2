# お問い合わせフォーム

## 環境構築
Dockerビルド
1. git clone git@github.com:miimi22/contact-form2.git
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術(実行環境)
・PHP 8.0
<br>
・Laravel 10.0
<br>
・MySQL 8.0

## ER図
![contact-er](https://github.com/user-attachments/assets/cd3e2513-c317-4b12-9212-5b6b5566e4d3)

## URL
・開発環境：http://localhost/
<br>
・phpMyAdmin：http://localhost:8080


