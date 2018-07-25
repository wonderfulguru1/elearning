<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class YoutubeVideoController extends Controller
{

    
    public function youtubeUpload(Request $request)
  {

    Video::create(array(
            'path' => $request->input('path'),
            'section_id' => $request->input('section_id'),
            'length' => 1,
            'type' => 2
    ));
    
    return Response()->json(array('success' => Video::orderby('updated_at', 'desc')->first()));
  }

}
