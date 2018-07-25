<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use App\User;

class AdminController extends Controller
{
    
public function __construct()
    {
        $this->middleware(['middleware'=> 'auth']);
    }


    public function dashboard(){      
      return "Dashboard";
    }

    public function index(){
      $course =  Course::get();
      $data['student'] =  User::join('role_user', 'role_user.user_id', '=', 'users.id')->where("role_user.role_id" ,'=',2)->count();
      $data['lecturals'] =  User::join('role_user', 'role_user.user_id', '=', 'users.id')->where("role_user.role_id" ,'=', 3)->count();
      $data['new_registrations'] =  User::join('course_enrolls', 'course_enrolls.user_id', '=', 'users.id')->count();
      $data['new_registrations_data'] =  User::select('users.name as username', 'courses.name as coursename')->join('course_enrolls', 'course_enrolls.user_id', '=', 'users.id')->join('courses', 'courses.id', '=', 'course_enrolls.course_id')->get();

      return view('admin.starter', $data);
    }

    public function user(){
      return view('admin.user');
    }

    public function addUser(){
      return view('admin.adduser');
    }

    public function editUser($id,Request $request){
      $data['id'] = $id;
      return view('admin.edituser',$data);
    }

    public function course(){
      return view('admin.course');
    }

    public function addCourse(){
      return view('admin.addcourse');
    }

    public function editCourse($id){
      $data['id'] = $id;
      $data['pagetypesession'] = 1;
      return view('admin.editcourse',$data);
    }

    public function section($id) {
      $data['id'] = $id;
      $data['pagetype'] = 0;
      return view('admin.editcourselist',$data);
    }

    public function courseList($id){
      $data['id'] = $id;
      $data['pagetype'] = 1;
      $data['pagetypesession'] = 0;
      return view('admin.editcourselist',$data);
    }

    public function viewUser($id){
      $data['users'] = Course::findOrFail($id)->users;
      return view('admin.users',$data);
    }
}
