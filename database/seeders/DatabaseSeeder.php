<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Location::truncate();
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $gov = Category::create(['name' => 'Pemerintahan', 'icon' => 'building-library', 'color' => '#ef4444']);
        $edu = Category::create(['name' => 'Pendidikan', 'icon' => 'academic-cap', 'color' => '#f59e0b']);
        $rel = Category::create(['name' => 'Tempat Ibadah', 'icon' => 'moon', 'color' => '#10b981']);
        $com = Category::create(['name' => 'Niaga/Bisnis', 'icon' => 'shopping-bag', 'color' => '#3b82f6']);
        $bound = Category::create(['name' => 'Batas Wilayah', 'icon' => 'map', 'color' => '#f43f5e']); // Pinkish red

        // Ultra High Fidelity Polygon Tracing (Visual Analysis of Image)
        $senenanPolygon = json_encode([
            // Start from Top Left (North West), going Clockwise
            [-6.6062, 110.6815], // NW River bend start
            [-6.6055, 110.6830], // River curve 1
            [-6.6048, 110.6845], // River curve 2
            [-6.6042, 110.6865], // Northernmost point (near river)
            [-6.6045, 110.6885], // Dipping down
            [-6.6040, 110.6905], // North East upward slope
            [-6.6035, 110.6925], // NE bump
            [-6.6045, 110.6940], // NE Dip
            [-6.6038, 110.6955], // NE Top corner (Near Dreas Foto)
            [-6.6055, 110.6970], // East side indent
            [-6.6065, 110.6985], // East outward point
            [-6.6085, 110.6990], // Easternmost point
            [-6.6110, 110.6985], // SE Main slope start
            [-6.6135, 110.6970], // SE Slope continuing
            [-6.6155, 110.6955], // SE Corner (Unnigestore)
            [-6.6175, 110.6925], // South border moving west
            [-6.6185, 110.6900], // South straight section
            [-6.6195, 110.6870], // SW main corner
            [-6.6180, 110.6850], // SW Westward straight
            [-6.6165, 110.6835], // West border moving up
            [-6.6145, 110.6820], // West straight
            [-6.6125, 110.6815], // West indent
            [-6.6105, 110.6810], // West straight up
            [-6.6085, 110.6805], // West slight bump
            [-6.6062, 110.6815]  // Closing the loop to NW
        ]);

        Location::create([
            'name' => 'Wilayah Desa Senenan',
            'description' => 'Batas administratif Desa Senenan.',
            'latitude' => -6.61028,
            'longitude' => 110.68917,
            'category_id' => $bound->id,
            'polygon' => $senenanPolygon,
            'image' => null,
        ]);

        // POIs
        Location::create(['name' => 'Balai Desa Senenan', 'description' => 'Jl. Senenan Utama No. 1.', 'latitude' => -6.61028, 'longitude' => 110.68917, 'category_id' => $gov->id]);
        Location::create(['name' => 'SD Negeri 1 Senenan', 'description' => 'Jl. Citrosomo, RT. 13 RW. 05.', 'latitude' => -6.60910, 'longitude' => 110.69150, 'category_id' => $edu->id]);
        Location::create(['name' => 'SD Negeri 2 Senenan', 'description' => 'Jl. Soekarno Hatta Km. 3.', 'latitude' => -6.61520, 'longitude' => 110.68580, 'category_id' => $edu->id]);
        Location::create(['name' => 'SLB Negeri Jepara', 'description' => 'Jl. Citrosomo No. 25.', 'latitude' => -6.60850, 'longitude' => 110.69250, 'category_id' => $edu->id]);
        Location::create(['name' => 'Masjid Jami Senenan', 'description' => 'Jl. Raya Senenan.', 'latitude' => -6.61050, 'longitude' => 110.68880, 'category_id' => $rel->id]);
        Location::create(['name' => 'Nahdlatul Ulama Islamic University (Unisnu)', 'description' => 'Kampus dekat perbatasan selatan.', 'latitude' => -6.61650, 'longitude' => 110.68950, 'category_id' => $edu->id]);
        // Create Admin User
        \App\Models\User::create([
            'name' => 'Admin Senenan',
            'email' => 'admin@senenan.desa.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}
