<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLearningactivityRequest;
use App\Http\Requests\UpdateLearningactivityRequest;

class LearningactivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('welcome');
    }

}
