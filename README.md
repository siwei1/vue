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

