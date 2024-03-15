<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //首頁渲染資料庫資料
    public function index(){
        //整批拿出來
        $courses = Course::get();
        return Inertia::render('Courses/Course',[
            'coursesData' => $courses,
        ]);
    }
    //進入新增頁面
    public function addPage(){
        return Inertia::render('Courses/CourseAdd');
    }
    //進行新增動作
    public function add(Request $request)
    {
        $message = '';
        try{
            Course::create([
                'course_name' =>$request['course'],
                'course_introduction' =>$request['introduction'],
                'pic' =>'none',
                'course_id' =>1,
                'teacher_id' =>1,
            ]);
            $message = '成功';
        }catch(\Throwable $th){
            $message = '失敗';
        }
        return redirect('/add-course')->with(['message' => $message]);
    }
    //進行修改動作
    public function edit()
    {
        return Inertia::render('Courses/CourseEdit');
    }
}
