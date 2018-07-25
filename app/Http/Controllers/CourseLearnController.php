<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Video;
use App\Section;
use App\Content;
use App\Course;
use \PDF;


class CourseLearnController extends Controller
{
    public function learn($id)
    {
        $data['courseId'] = $id;
        $data['course'] = Course::findOrFail($id);
        $data['sections'] = Section::with('section')->orderby('order')->get()->where('status', 1)->where('section_id', null)->where('course_id', (int) $id);
        $data['sections']->load('quiz', 'content', 'video', 'section');

        return view('courseDashboard', $data);
    }

    public function sectionMain($id)
    {
        $data['courseId'] = $id;
        $data['course'] = Course::findOrFail($id);
        $data['sections'] = Section::with('section')->orderby('order')->get()->where('status', 1)->where('section_id', null)->where('course_id', (int) $id);
        $data['sections']->load('quiz', 'content', 'video', 'section');

        return view('course.sectioncourse', $data);
    }

    public function index(Request $request, $id)
    {
        $data['course'] = Course::findOrFail($id);
        if (Auth::user()) {
            $data['user'] = Auth::user();
            if ($data['user']->courses()->where('courses.id', $id)->count() > 0) {
                return Redirect::to('course/learn/'.$id);
            }
        }
        return view('course', $data);
    }
    public function article($id, $contentId)
    {
        $data['course'] = Course::findOrFail($id);
        $data['content'] = Content::findOrFail($contentId);
        $data['section'] = $data['content']->section;
        $path = '';
        self::checkParent($data['section'], $path);
        $data['path'] = $path;

        return view('course.article', $data);
    }

    public function checkParent($section, &$path)
    {
        $sec = $section->sectionParent;
        if ($sec != null) {
            $path = '<li><a href="/course/learn/section/'.$sec->id.'">'.$sec->title.'</a></li>'.$path;
            self::checkParent($sec, $path);
        }
    }

    public function video($id, $contentId)
    {
        $data['course'] = Course::findOrFail($id);
        $data['video'] = Video::findOrFail($contentId);
        $data['section'] = $data['video']->section;
        $path = '';
        self::checkParent($data['section'], $path);
        $data['path'] = $path;

        return view('course.video', $data);
    }

    public function section($id)
    {
        $data['section'] = Section::findOrFail($id);
        $data['sections'] = $data['section']->section;
        $data['courseId'] = $data['section']->course_id;
        $data['course'] = Course::findOrFail($data['courseId']);
        $path = '';
        self::checkParent($data['section'], $path);
        $data['path'] = $path;
        return view('course.section', $data);
    }

    public function takeCourse(Request $request, $id)
    {
        if ($request->user()) {
            $user = $request->user();
            $course = Course::findOrFail($id);
            if ($course->users->where('id', $user->id)->count() <= 0) {
                $course->users()->attach($user->id);
            }

            return Redirect::to('course/'.$id)->with('take', '1');
        }

        return Redirect::to('home');
    }


     public function certificate(Request $request, $id)
    {
      // if($request->has('download')){
            //php artisan cache:clear
            // php artisan config:cache
            // Set extra option
            //https://github.com/elibyy/Zip
        //PDF::loadHTML($html)->setPaper('a4', 'landscape')', 'landscape')->setWarnings(false)->save('myfile.pdf')
        //return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
           // \PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
           // \PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
            $data['name'] =  Auth::user()->name;
            $data['course'] = Course::findOrFail($id)->name;
            $pdf = \PDF::loadView('course.certificate', $data)->setPaper('a4', 'landscape')->setWarnings(false)->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // download pdf
            return $pdf->download('course.certificate.pdf');
        //}
       // return view('course.certificate');
    }
}
