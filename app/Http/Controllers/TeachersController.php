<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function manage_teachers()
    {
        return view('admin.tutors.manage-teachers');
    }
}
