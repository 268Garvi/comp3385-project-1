<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Controller;



class DashboardController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $properties = Property::all(); // Fetch all properties
        return view('/dashboard', ['properties' => $properties]);


    }
}
