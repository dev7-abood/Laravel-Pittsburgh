<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Trailer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class TopicController extends Controller
{
    public function index($slug)
    {

        $trailer = Trailer::where('slug' , '=' , $slug)->first();

        $topic   = $trailer->topic;
        $imgs   = $trailer->images;
        $iframes = $trailer->iframes;
        $gestesManin  = $trailer->gestes()->where('main' , '=' , 1)->get();
        $gestesUnMane  = $trailer->gestes()->where('main' , '=' , 0)->get();
        $links = $trailer->links;

        if ($topic == null)
        {
            Alert::warning('نعتذر منك لا يوجد موضوع مرفق!');
            return redirect()->back();
        }
        return view('web.topics.index'
        , ['topic' => $topic , 'iframes' => $iframes , 'gestesManin' => $gestesManin , 'gestesUnMane' =>  $gestesUnMane,  'links' => $links , 'trailer' => $trailer
          , 'imgs' => $imgs
            ]
        );
    }





}
