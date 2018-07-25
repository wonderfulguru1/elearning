<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        return Response()->json(Video::get());
    }

    public function store(Request $request)
    {
      
        $path = "video/";
        $fileName = base64_encode($_FILES['file']['name']).'.'."3gp";
        $path = $path .  $fileName;
        if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
           Video::create(array(
              'path' => $fileName,
              'section_id' => $request->input('section_id'),
              'length' => 1
            ));

            return Response()->json(array('success' => Video::orderby('updated_at', 'desc')->first()));
         
        } else{
           return 'Error';
        }
      
    }

    public function update(Request $request, $id)
    {
        
        $path = "video/";
        $fileName = base64_encode($_FILES['file']['name']).'.'."3gp";
        $path = $path .  $fileName;
        if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            $video = Video::findOrFail($id);
            $video->path = $fileName;
            $video->section_id = $request->input('section_id');
            $video->length = 1;
            $video->save();
            return Response()->json(array('success' => Video::orderby('updated_at', 'desc')->first()));
        } else{
           return 'Error';
        }
    }

    public function destroy($id)
    {
        $video = Video::destroy($id);

        return Response()->json(array('success' => (bool) $video));
    }

    public function show($id)
    {
        return Response()->json(Video::findOrFail($id));
    }

    
    public function youtubeUpload(Request $request)
  {
      exit;
      echo $request->input('path');
      exit;
 /* Video::create(array(
            'path' => $request->input('path'),
            'section_id' => $request->input('section_id'),
             'length' => 1
    ));
    
    return Response()->json(array('success' => Content::orderby('updated_at', 'desc')->first()));*/
  }

}
