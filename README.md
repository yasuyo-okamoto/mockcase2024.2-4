# Atte(アット）　　
勤怠管理システム　　　
![stamp](https://github.com/yasuyo-okamoto/mockcase2024.2-4/assets/147665983/4e21226c-9a7b-41ab-9ab0-87ce4e9f5375)　　

## 作成した目的　　
人事評価のための勤怠管理アプリ　　　
＊　個人別に勤務時間管理　　
　　
## 環境構築　　
  
dockerビルド　 
  
1. https://github.com/yasuyo-okamoto/okamotoyasuyo_test.git  
2. docker-compose pu -d --build  
*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください  

Laravel環境構築  

1. docker-compose exec php bash  
2. composer install  
3. .env.exampleファイルから.envを作成し、環境変数を変更  
4. php artisan key:generate  
5. php artisan migrate  
6. php artisan db:seed  

## 使用技術  

* PHP 8.0  
* Laravel 10.0  
* MySQL 8.0

## ER図  

<img width="500" alt="スクリーンショット 2024-02-15 0 05 26" src="https://github.com/yasuyo-okamoto/okamotoyasuyo_test/assets/147665983/c332e0d6-0231-4e0d-b1fe-88e79bb7c1eb">


## URL  

* 開発環境:http://localhost/  
* phpMyAdmin:http://localhost:8080/  
