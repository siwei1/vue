<?php
namespace Pk\Db\Seeds;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Pk\Vue\Models\Resume;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



            $resume = [
                [
                    'name'=>'陈志强',
                    'birth'=>'1997-07-08 00:00:00',
                    'avatar'=>'/static/img/avatar.jpg',
                    'mobile'=> '18516791191',
                    'education'=>'中专',
                    'skill'=>'["\u719f\u6089PHP\uff0c\u80fd\u72ec\u7acb\u5b8c\u6210\u529f\u80fd\u6a21\u5757\u5f00\u53d1\uff1b\u719f\u6089\u5e38\u7528\u8bbe\u8ba1\u6a21\u5f0f\uff1b","\u719f\u6089laravel\u6846\u67b6,\u4f1aecshop\u4e8c\u6b21\u5f00\u53d1\uff1b","\u5177\u5907\u4e00\u5b9a\u7684OOP\u9762\u5411\u5bf9\u8c61\u7f16\u7a0b\u601d\u60f3\uff1b","\u719f\u7ec3\u638c\u63e1Mysql\u6570\u636e\u5e93\u64cd\u4f5c\uff1b","\u719f\u6089linux\u73af\u5883,\u638c\u63e1git\u4f7f\u7528\uff1b","\u719f\u6089\u64cd\u4f5cHTML+CSS\u7f51\u9875\u6280\u672f\uff0c\u4ee5\u53caJavascript\u3001Jquery\u3001Ajax\u6280\u672f\uff1b"]',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                ]
            ];


                Resume::insert($resume);



    }
}
