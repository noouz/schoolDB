<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){

        return Inertia::render('Teachers/Teacher');
    }

    public function add()
    {
        return Inertia::render('Teachers/TeacherAdd');
    }
    public function edit()
    {
        return Inertia::render('Teachers/TeacherEdit');
    }
}
