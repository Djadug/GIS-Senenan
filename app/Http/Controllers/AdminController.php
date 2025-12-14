<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function dashboard()
	{
		$locations = Location::with('category')->latest()->get();
		$categories = Category::all();
		return view('admin.dashboard', compact('locations', 'categories'));
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'name' => 'required|string|max:255',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric',
			'category_id' => 'required|exists:categories,id',
			'description' => 'nullable|string',
			'image' => 'nullable|image|max:2048', // 2MB Max
			'polygon' => 'nullable|string',
		]);

		if ($request->hasFile('image')) {
			$path = $request->file('image')->store('locations', 'public');
			$validated['image'] = $path;
		}

		Location::create($validated);

		return redirect()->back()->with('success', 'Location added successfully.');
	}

	public function update(Request $request, Location $location)
	{
		$validated = $request->validate([
			'name' => 'required|string|max:255',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric',
			'category_id' => 'required|exists:categories,id',
			'description' => 'nullable|string',
			'image' => 'nullable|image|max:2048',
			'polygon' => 'nullable|string',
		]);

		if ($request->hasFile('image')) {
			$path = $request->file('image')->store('locations', 'public');
			$validated['image'] = $path;
		}

		$location->update($validated);

		return redirect()->back()->with('success', 'Location updated successfully.');
	}

	public function destroy(Location $location)
	{
		$location->delete();
		return redirect()->back()->with('success', 'Location deleted successfully.');
	}
}
