# practice_laravel

開発環境
- WSL2 
- PHPStorm
- MySQL8.0
- Laravel 5.8

```
$ php -v
PHP 7.4.3 (cli) (built: Jul  5 2021 15:13:35) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies
    
$ composer --version
Composer version 2.1.3 2021-06-09 16:31:20
```


### それっぽい流れ

- migration file の作成
- テーブルの定義 
- migration の実行
- テーブル定義よりモデルの作成


```shell
$ php artisan make:migration create_books_table --create=books
$ php artisan migrate
$ php artisan make:model Book
```


### 良さそうなサイト
- https://readouble.com/laravel/5.8/ja/releases.html
