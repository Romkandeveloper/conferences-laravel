<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('index', ['title' => 'Conferences', 'conferences' => $conferences]);
    }
}
