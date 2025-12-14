@extends('layouts.app')

@section('content')
	<div class="bg-slate-50 dark:bg-slate-900 min-h-screen pb-20 transition-colors duration-300">
		<!-- Header -->
		<div class="bg-slate-900 dark:bg-black text-white py-20 transition-colors duration-300">
			<div class="container mx-auto px-4 text-center">
				<h1 class="text-4xl font-bold mb-4">Profil Desa Senenan</h1>
				<p class="text-slate-400">Sejarah, Visi Misi, dan Potensi Wilayah</p>
			</div>
		</div>

		<!-- Content -->
		<div class="container mx-auto px-4 -mt-10">
			<div
				class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 p-8 md:p-12 max-w-4xl mx-auto space-y-12 transition-colors duration-300">

				<!-- Sejarah -->
				<section>
					<div class="flex items-center gap-4 mb-6">
						<div
							class="w-12 h-12 bg-amber-100 dark:bg-amber-900/50 text-amber-600 dark:text-amber-500 rounded-xl flex items-center justify-center">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
						</div>
						<h2 class="text-2xl font-bold text-slate-800 dark:text-white">Sejarah & Legenda "Gong Senen"</h2>
					</div>
					<div
						class="prose prose-slate dark:prose-invert max-w-none text-slate-600 dark:text-slate-300 leading-relaxed">
						<p>
							Desa Senenan memiliki sejarah yang erat kaitannya dengan legenda <strong>"Gong Senen"</strong>.
							Konon, Adipati Citro Kusumo menemukan sebuah gong di pendopo Kabupaten Jepara yang anehnya tidak
							dapat berbunyi ketika ditabuh oleh sembarang orang.
						</p>
						<p>
							Saat pertemuan rutin para lurah dan tokoh masyarakat, hanya <strong>Lurah Senenan</strong> yang
							berhasil membunyikan gong tersebut. Gema suaranya mengglegar dan penuh wibawa. Karena peristiwa
							tersebut, Adipati memerintahkan agar gong tersebut dibunyikan setiap hari Senin sebagai tanda
							waktu kerja, dan gong itu pun dikenal sebagai "Gong Senen", yang juga menjadi asal-usul nama
							Desa Senenan.
						</p>
					</div>
				</section>

				<hr class="border-slate-100 dark:border-slate-700">

				<!-- Visi Misi -->
				<section>
					<div class="flex items-center gap-4 mb-6">
						<div
							class="w-12 h-12 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-500 rounded-xl flex items-center justify-center">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M13 10V3L4 14h7v7l9-11h-7z" />
							</svg>
						</div>
						<h2 class="text-2xl font-bold text-slate-800 dark:text-white">Visi & Misi</h2>
					</div>
					<div
						class="bg-slate-50 dark:bg-slate-700/50 p-6 rounded-xl border border-slate-100 dark:border-slate-600 transition-colors">
						<h3 class="font-bold text-slate-900 dark:text-white mb-2">Visi</h3>
						<p class="text-slate-600 dark:text-slate-300 italic mb-6">"Desa Senenan yang Mandiri, Gotong Royong,
							dan Berbudaya"</p>

						<h3 class="font-bold text-slate-900 dark:text-white mb-2">Misi</h3>
						<ul class="list-disc list-inside text-slate-600 dark:text-slate-300 space-y-2">
							<li>Mewujudkan tata kelola pemerintahan desa yang transparan dan akuntabel.</li>
							<li>Mengembangkan potensi seni ukir dan relief sebagai ikon ekonomi desa.</li>
							<li>Meningkatkan kualitas pelayanan publik melalui digitalisasi.</li>
							<li>Melestarikan tradisi budaya lokal seperti Sedekah Bumi dan Gong Senen.</li>
						</ul>
					</div>
				</section>

				<hr class="border-slate-100 dark:border-slate-700">

				<!-- Potensi -->
				<section>
					<div class="flex items-center gap-4 mb-6">
						<div
							class="w-12 h-12 bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-500 rounded-xl flex items-center justify-center">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
							</svg>
						</div>
						<h2 class="text-2xl font-bold text-slate-800 dark:text-white">Potensi Wilayah</h2>
					</div>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<div class="rounded-xl overflow-hidden h-64">
							<img src="{{ asset('images/Ukiran-Jepara.jpeg') }}" alt="Ukir Jepara"
								class="w-full h-full object-cover hover:scale-110 transition duration-500">
						</div>
						<div>
							<h4 class="font-bold text-lg mb-2 text-slate-900 dark:text-white">Sentra Seni Relief</h4>
							<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
								Desa Senenan dijuluki sebagai "Etalase Mebel" Jepara. Keunikan utama desa ini adalah
								keahlian warganya dalam seni ukir relief (tiga dimensi) yang rumit dan bernilai seni tinggi,
								yang berbeda dengan ukiran datar biasa.
							</p>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
@endsection