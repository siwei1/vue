<?php
namespace Pk\Db\Seeds;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Pk\Vue\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $experience = [
                [
                    'company'=>'蝶加供应链',
                    'start_time'=>'2016-03-01 00:00:00',
                    'end_time'=>'2016-07-01 00:00:00',
                    'job'=> 'PHP工程师',
                    'job_content'=>'[\"\\u8de8\\u5883\\u7535\\u5546&nbsp&nbsp&nbsp\\u8776\\u52a0\\u4f9b\\u5e94\\u94fe-(\\u4fee\\u8865bug \\u9879\\u76ee\\u9ec4\\u4e86 ecshop)\",\"\\u5916\\u5305\\u9879\\u76ee&nbsp&nbsp&nbsp\\u5236\\u4f5c\\u5728\\u7ebf\\u8bfe\\u7a0b\\u57f9\\u8bad\\u7f51\\u7ad9 ecshop\"]',
                    'resume_id'=>1,
                ],
                [
                    'company'=>'沃慧科技有限公司',
                    'start_time'=>'2016-07-01 00:00:00',
                    'end_time'=>'2017-03-01 00:00:00',
                    'job'=> 'PHP工程师',
                    'job_content'=>'[\"\\u5916\\u5305\\u7535\\u5546\\u9879\\u76ee&nbsp&nbsp&nbsp\\u5ba0\\u7231\\u4e4b\\u540d-(\\u66ff\\u6362\\u6a21\\u677f,\\u589e\\u52a0\\u540e\\u53f0\\u529f\\u80fd ecshop)\",\"\\u516c\\u53f8\\u4ea7\\u54c1&nbsp&nbsp&nbsp\\u6613\\u5206\\u5b9d-(\\u521d\\u671f\\u4e00\\u4eba\\u5b8c\\u6210\\u524d\\u53f0\\u540e\\u53f0 laravel\\u6846\\u67b6)\",\"\\u5916\\u5305M2B2C\\u9879\\u76ee&nbsp&nbsp&nbsp\\u5e18\\u591a\\u591a-(\\u505a\\u540e\\u53f0,\\u5546\\u54c1\\u53d1\\u5e03,\\u6743\\u9650...\\u7f51\\u7ad9\\u8d2d\\u7269\\u6d41\\u7a0b laravel\\u6846\\u67b6)\"]',
                    'resume_id'=>1,
                ]
            ];

            foreach ($experience as $v){
                Experience::insert($v);
            }


    }
}
