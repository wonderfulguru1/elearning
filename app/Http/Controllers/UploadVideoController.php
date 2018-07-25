<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class UploadVideoController extends Controller
{
    public function create(Request $request)
    {

      $fileName = "";
      if ($request->hasFile('file')) {
          if ($request->File('file')->isValid()) {

              $file = $request->File('file');

              $fileName = base64_encode($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
              $destinationPath = 'image';

              $file->move($destinationPath, $fileName);  

              $id = $request->input('course_id');
              $course = Course::findOrFail($id);
              $course->src = $fileName;
              $course->save();

          } else {
              return 'Error';
          }
      } else {
          return 'Error';
      }

      return Response()->json(array('success' => true));

    }
}
