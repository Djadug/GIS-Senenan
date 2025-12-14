<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('icon')->nullable(); // e.g., 'home', 'school'
			$table->string('color')->default('#3b82f6'); // Tailwind blue-500
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('categories');
	}
};
