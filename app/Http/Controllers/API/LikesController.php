<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Likes;
use Illuminate\Http\Request;
use Flash;
use Response;

class LikesController extends Controller {

    public $successStatus = 200;

    public function likesQuery() {
        $likes = Likes::all();

        if (count($likes) > 0) {
            return response()->json($likes, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}
