# vue
vue+laravel

1.app.php 注入服务
 Pk\Vue\Providers\VueServiceProvider::class
 
2.php artisan migrate --path=vendor/pk1997/vue/database/migrations

3.在database/seed/DatabaseSeeder.php 
修改文件 run方法里
添加以下代码
$this->call(\Pk\Db\Seeds\ExperienceSeeder::class);
 $this->call(\Pk\Db\Seeds\ResumeSeeder::class);
 
 php artisan db:seed
 
 4.php artisan vendor:publish
 
 5.cd resources/assets
 npm install 安装依赖
 webpack打包
 
 6.输入 本地域名/vue 即可看到效果

