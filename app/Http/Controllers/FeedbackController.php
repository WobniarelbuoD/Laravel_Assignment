<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    function addFeedback(){
        $feedback= new Feedback();
        $feedback->game_id=Request('game_id');
        $feedback->platform=Request('platform');
        $feedback->version=Request('version');
        $feedback->category=Request('category');
        $feedback->content=Request('content');
        dd($feedback->save());
        if($feedback){
            return ["result"=>$feedback];
        }else{
            return ["result"=>"Failure!"];
        }
    }
}
