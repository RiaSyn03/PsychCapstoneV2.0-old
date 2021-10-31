<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class StudentquestionaireController extends Controller
{
    public function index()
    {
        return view('admin.users.student.questionaire')->with ('questions',Question::all());
    }
}
