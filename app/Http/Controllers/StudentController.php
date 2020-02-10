<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function manage_student()
    {
        return view('admin.students.manage-student');
    }
}
