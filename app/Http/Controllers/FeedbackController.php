<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        }else if(!DB::table('games')->where('id', $req->game_id)->exists()){
            return response()->json(['message' => 'Game not found in the database.'], 404);
        }else if(DB::table('addresses')->where('address', $req->ip())->exists()){
            return response()->json(['message' => 'You have already submitted your feedback.'], 403);
        }

        $feedback= new Feedback();
        $feedback->game_id=$req->game_id;
        $feedback->platform=$req->platform;
        $feedback->version=$req->version;
        $feedback->category=$req->category;
        $feedback->content=$req->content;
        $feedback->save();
        if($feedback){
            $addresses= new Addresses();
            $addresses->address=$req->ip();
            $addresses->feedback_id=$feedback->id;
            $addresses->save();
            return response()->json(['message' => 'Thank you for your feedback.', 'result' => $feedback], 201);
        }else{
            return response()->json(['message' => 'Error processing request.', 'result' => $feedback], 400);
        }
    }
}
