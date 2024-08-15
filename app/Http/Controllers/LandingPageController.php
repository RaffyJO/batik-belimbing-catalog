<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Award;
use App\Models\Product;
use App\Models\Testimony;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {    
        $awards = Award::latest()->take(6)->get();
    
        $activities = Activity::latest()->take(8)->get();
        $activities->each(function ($activity) {
            $activity->tanggal = Carbon::parse($activity->tanggal)->format('d F Y');
        });

        $testimonies = Testimony::latest()->take(8)->get();
     
        $products = Product::latest()->take(8)->get();

        return view('welcome', compact('awards', 'activities', 'testimonies', 'products'));
    }

    public function products()
    {
        $products = Product::all();

        return view('layout.products', compact('products'));
    }
}
