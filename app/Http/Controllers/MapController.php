<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class MapController extends Controller
{
	public function index()
	{
		$categories = Category::all();
		return view('map', compact('categories'));
	}

	public function apiLocations()
	{
		$locations = Location::with('category')->get();

		$features = $locations->map(function ($location) {
			return [
				'type' => 'Feature',
				'geometry' => [
					'type' => 'Point',
					'coordinates' => [(float) $location->longitude, (float) $location->latitude],
				],
				'properties' => [
					'id' => $location->id,
					'name' => $location->name,
					'description' => $location->description,
					'image' => $location->image,
					'polygon' => $location->polygon, // Add this
					'category_id' => $location->category_id,
					'category' => $location->category->name ?? 'Uncategorized',
					'icon' => $location->category->icon ?? 'marker',
					'color' => $location->category->color ?? '#3b82f6',
				],
			];
		});

		return response()->json([
			'type' => 'FeatureCollection',
			'features' => $features,
		]);
	}
}
