<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; 

class HomepageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('homepage', ['movies' => $movies]); 
    }
}
