<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;

class SubjectController extends Controller
{
    public function index()
    {
        $asignaturas=Subject::where('ingenieria',auth()->user()->ingenieria)->get();

        //dd($asignaturas);

        return view('asignaturas', compact('asignaturas'));
    }

}
