<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function ManageQuestion()
    {
        return view('admin.manage-question');
    }

    public function CreateQuestion($qus_type)
    {
        if ($qus_type == 1)
        {
            return view('admin.tutors.question-box.true-false');
        }
        if ($qus_type == 2)
        {
            return view('admin.tutors.question-box.multiple-choice');
        }
        if ($qus_type == 3)
        {
            return view('admin.tutors.question-box.multiple-response');
        }
        if ($qus_type == 4)
        {
            return view('admin.tutors.question-box.matching');
        }
        if ($qus_type == 5)
        {
            return view('admin.tutors.question-box.fill-in-the-blanks');
        }
        if ($qus_type == 6)
        {
            return view('admin.tutors.question-box.tutorial');
        }
        //return view('admin.manage-question',$data);
    }
}
