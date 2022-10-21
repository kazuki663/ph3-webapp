<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyTime;
use App\StudyLanguage;
use App\StudyContent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class WebappController extends Controller
{
    public function index(Request $request)
    {
        //学習時間算出
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $this_month = \Carbon\Carbon::now()->format('Y-m');
        $time = StudyTime::where('user_id', 1)->where('day', $today)->sum('time');
        $month = StudyTime::where('user_id', 1)->where('day', 'LIKE', $this_month.'%')->sum('time');
        $total = StudyTime::where('user_id', 1)->sum('time');

        //グラフ用
            $study_times = DB::table('study_time')->select('day')->selectRaw('SUM(time) as day_time')->where('user_id', 1)->where('day', 'LIKE', $this_month.'%')->groupBy('day')->orderBy('day', 'asc')->get();
        //月の日数取得
            $monthDay = intval(date('t', strtotime("$today")));
            //学習した日付の配列取得
            $study_day = array();
            //学習した日と時間の配列
            $study_data = array();
            foreach($study_times as $study_time){
            $need_day = intval(date('j', strtotime($study_time->day)));
            array_push($study_day, $need_day);
            $day_array = array(intval(date('j', strtotime($study_time->day))), intval($study_time->day_time));
            $study_data = array_merge($study_data, array($day_array));
            }
            //棒グラフ用配列の作成
            for($i=1; $i<=$monthDay; $i++){
            $key = in_array($i, $study_day);
            if($key){
            }else{
                array_splice( $study_data, $i-1, 0, [[$i, 0]]);
            }
            }
            $da = array();
            foreach($study_data as $data){
                $dat = implode(',', $data);
                $dat1 = '[' . $dat . ']';
                array_push($da, $dat1);
            }
            $d = implode(',', $da);

        //円グラフ（色）
        $languages_color = array();
        $languages = DB::table('languages')->select('color')->get();
            foreach($languages as $language){
                $language_colors = strval($language->color);
                array_push($languages_color, $language_colors);
            }
        $language = implode('","', $languages_color);
        $language_color = '["' . $language . '"]';

        $contents_color = array();
        $contents = DB::table('contents')->select('color')->get();
            foreach($contents as $content){
                $content_colors = strval($content->color);
                array_push($contents_color, $content_colors);
            }
        $content = implode('","', $contents_color);
        $content_color = '["' . $content . '"]';

        //円グラフ（時間）
        $languages_data = DB::table('study_languages')->join('languages', 'study_languages.language_id', '=', 'languages.id')->select('language')->selectRaw('SUM(time) as day_time')->where('user_id', 1)->where('day', 'LIKE', $this_month.'%')->groupBy('language_id')->orderBy('language_id', 'asc')->get();
        $language_data = array();
        foreach($languages_data as $data){
        $lang = $data->language;
        $language_array = array("$lang", $data->day_time);
        array_push($language_data, $language_array);
        }
        $lang_data = array();
        foreach($language_data as $data){
            $language = '[' . "'$data[0]'" . ',' . $data[1] . ']';
            array_push($lang_data, $language);
        }
        $lang_datas = implode(',', $lang_data);

        $contents_data = DB::table('study_contents')->join('contents', 'study_contents.content_id', '=', 'contents.id')->select('content')->selectRaw('SUM(time) as day_time')->where('user_id', 1)->where('day', 'LIKE', $this_month.'%')->groupBy('content_id')->orderBy('content_id', 'asc')->get();
        $content_data = array();
        foreach($contents_data as $data){
        $content = $data->content;
        $content_array = array("$content", $data->day_time);
        array_push($content_data, $content_array);
        }
        $cont_data = array();
        foreach($content_data as $data){
            $content = '[' . "'$data[0]'" . ',' . $data[1] . ']';
            array_push($cont_data, $content);
        }
        $cont_datas = implode(',', $cont_data);

        return view('webapp.index', ['time' => $time, 'month' => $month, 'total' => $total, 'study_time' => $d, 'language_color' => $language_color, 'content_color' => $content_color, 'language_data' => $lang_datas, 'content_data' => $cont_datas]);

    }
}
