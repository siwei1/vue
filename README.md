# vue2+laravel 这是一个SPA应用 


composer require pk1997/vue dev-master 引入该包

## 使用操作

1. `config/app.php` 注入服务 加入下面这句话
```php
     Pk\Vue\Providers\VueServiceProvider::class
```

 
2. 生成表
```php
    php artisan migrate --path=vendor/pk1997/vue/database/migrations
```

3. 在`database/seed/DatabaseSeeder.php`修改文件 run方法里 
```php
    $this->call(\Pk\Db\Seeds\ExperienceSeeder::class);
    $this->call(\Pk\Db\Seeds\ResumeSeeder::class);
```
 
4. 填充数据
```php
    php artisan db:seed
```
 
5. 发布公共资源
```php
    php artisan vendor:publish
```

 
6. 安装依赖,打包项目
```npm
     1. cd resources/assets
     2. npm install 
     2. webpack
```
  
7. 输入 本地域名/vue 即可看到效果

