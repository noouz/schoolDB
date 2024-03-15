<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index(){

        return Inertia::render('Schedules/Schedule');
    }

    public function add()
    {
        return Inertia::render('Schedules/ScheduleAdd');
    }
    public function edit()
    {
        return Inertia::render('Schedules/ScheduleEdit');
    }
}
