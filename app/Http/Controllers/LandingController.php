<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LandingController extends Controller
{
	public function index()
	{
		// Fetch 3 recent news (mockup/dummy for now or from DB if we had news table)
		// For now, we'll hardcode the news in the view or pass array
		$recent_locations = Location::latest()->take(3)->get(); // Show some recent POIs
		$categories = \App\Models\Category::all(); // Fetch categories for map filter
		return view('home', compact('recent_locations', 'categories'));
	}

	public function profile()
	{
		return view('profile');
	}
}
