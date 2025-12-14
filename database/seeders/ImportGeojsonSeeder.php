<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Support\Facades\File;

class ImportGeojsonSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		// 1. Ensure 'Batas Wilayah' category exists
		$category = Category::firstOrCreate(
			['name' => 'Batas Desaa'], // Typo in original request? I'll use 'Batas Wilayah' which is safer or check if valid.
			// Wait, looking at the user image, it says "Batas_Desa_Kersik". The user said "batas wilayah senenan".
			// I'll name it "Batas Wilayah"
			[
				'name' => 'Batas Wilayah',
				'description' => 'Batas Administrasi Desa Senenan',
				'color' => '#ef4444', // Red
				'icon' => 'fas fa-map',
			]
		);

		// Fix if created with just name
		if ($category->wasRecentlyCreated) {
			$category->update([
				'color' => '#ef4444',
				'icon' => 'fas fa-map'
			]);
		}

		$files = ['senenan1.geojson', 'senenan2.geojson'];

		foreach ($files as $filename) {
			$path = base_path($filename);

			if (!File::exists($path)) {
				$this->command->error("File not found: $path");
				continue;
			}

			$json = File::get($path);
			$data = json_decode($json, true);

			if (!isset($data['features'])) {
				$this->command->error("Invalid GeoJSON in $filename");
				continue;
			}

			foreach ($data['features'] as $index => $feature) {
				// Process Geometry
				$geometry = $feature['geometry'];
				$finalPolygon = [];

				// Extract MultiPolygon
				if ($geometry['type'] === 'MultiPolygon') {
					foreach ($geometry['coordinates'] as $polygon) {
						$processedPolygon = [];
						foreach ($polygon as $ring) {
							$processedRing = [];
							foreach ($ring as $coord) {
								$processedRing[] = [$coord[1], $coord[0]]; // Swap LngLat -> LatLng
							}
							$processedPolygon[] = $processedRing;
						}
						$finalPolygon[] = $processedPolygon;
					}
					// Unwrap if single polygon
					if (count($finalPolygon) == 1) {
						$finalPolygon = $finalPolygon[0];
					}
				} elseif ($geometry['type'] === 'Polygon') {
					foreach ($geometry['coordinates'] as $ring) {
						$processedRing = [];
						foreach ($ring as $coord) {
							$processedRing[] = [$coord[1], $coord[0]];
						}
						$finalPolygon[] = $processedRing;
					}
				} else {
					$this->command->warn("Skipping non-polygon geometry in $filename");
					continue;
				}

				// First Point for Marker Center
				$firstPoint = [-6.61, 110.68];
				if (isset($finalPolygon[0][0][0]) && is_array($finalPolygon[0][0])) {
					$firstPoint = $finalPolygon[0][0];
				} elseif (isset($finalPolygon[0][0]) && is_numeric($finalPolygon[0][0])) {
					$firstPoint = $finalPolygon[0];
				}

				// Check JSON encoding
				$polygonJson = json_encode($finalPolygon);
				if ($polygonJson === false) {
					$this->command->error("JSON Encode failed: " . json_last_error_msg());
					continue;
				}

				// Create Location
				try {
					Location::create([
						'name' => 'Batas Wilayah (' . str_replace('.geojson', '', $filename) . ')',
						'description' => 'Batas wilayah administratif Desa Senenan (Impor dari ' . $filename . ')',
						'latitude' => $firstPoint[0],
						'longitude' => $firstPoint[1],
						'category_id' => $category->id,
						'polygon' => $polygonJson,
						'image' => null,
					]);
					$this->command->info("Imported feature from $filename");
				} catch (\Throwable $e) {
					$this->command->error("Failed to import feature from $filename: " . $e->getMessage());
				}
			}
		}
	}
}
