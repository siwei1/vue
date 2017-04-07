<?php
namespace Pk\Vue\Controllers;
use App\Http\Controllers\Controller;
use Pk\Vue\Models\Experience;
use Pk\Vue\Models\Resume;

class VueController extends Controller
{
    const RESUME_ID = 1;

    public function index()
    {
        return view('vue::index');
    }

    public function getUserInfo()
    {

        $experience = Experience::where('resume_id',self::RESUME_ID)->get()->toArray();

        foreach ($experience as &$v){
            $v['start_time'] = date('Y/m/d',strtotime($v['start_time']));
            $v['end_time'] = date('Y/m/d',strtotime($v['end_time']));
            $v['job_content'] = json_decode($v['job_content']);
        }

        $resume = Resume::find(self::RESUME_ID);

        $resume->experience = $experience;
        $resume->skill = json_decode($resume->skill);


        return  $resume;
    }

}
