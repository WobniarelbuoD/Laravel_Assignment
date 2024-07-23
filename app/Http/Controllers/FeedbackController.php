<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    function addFeedback(Request $req){
        $rules=array(
            "game_id"=>"required|max:11|",
            "platform"=>"required|max:45|",
            "version"=>"required|max:45|",
            "category"=>"required|max:45|",
            "content"=>"required|min:2|max:255|",
        );
        $validator= Validator::make($req->all(), $rules);
        if($validator->fails()){
            return $validator->errors();
        }else if(DB::table('games')->where('id', $req->game_id)->exists()){
            $feedback= new Feedback();
            $feedback->game_id=$req->game_id;
            $feedback->platform=$req->platform;
            $feedback->version=$req->version;
            $feedback->category=$req->category;
            $feedback->content=$req->content;
            $feedback->save();
            if($feedback){
                return ["result"=>$feedback];
            }else{
                return ["result"=>"Failure!"];
            }
        }else{
            return ["result"=>"Game not found in the database."];
        }
        
    }
}
