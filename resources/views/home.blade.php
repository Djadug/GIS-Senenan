@extends('layouts.app')

@section('content')
	<!-- Hero Slider -->
	<div class="relative h-[600px] w-full overflow-hidden">
		<!-- Overlay Gradient -->
		<div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent z-10"></div>

		<!-- Image -->
		<img src="{{ asset('images/sedekah_bumi_senenan.JPG') }}" alt="Sedekah Bumi Senenan"
			class="absolute inset-0 w-full h-full object-cover">

		<!-- Content -->
		<div class="relative z-20 h-full container mx-auto px-4 flex flex-col justify-center text-white">
			<span
				class="inline-block py-1 px-3 rounded-full bg-amber-500/90 text-xs font-bold tracking-wider mb-4 w-fit shadow-lg">WEBSITE
				DESA SENENAN</span>
			<h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight drop-shadow-lg">Desa Senenan<br><span
					class="text-amber-400">Pusat
					Ukir Dunia</span></h1>
			<p class="text-lg md:text-xl text-slate-100 max-w-2xl mb-8 leading-relaxed drop-shadow-md font-medium">
				Mewujudkan Desa Senenan yang Mandiri, Gotong Royong, dan Berbudaya. Pusat kerajinan relief dan mebel ukir
				khas Jepara.
			</p>
			<div class="flex gap-4">
				<a href="{{ route('profile') }}"
					class="px-8 py-4 bg-amber-600 hover:bg-amber-500 rounded-lg font-bold transition shadow-lg shadow-amber-600/20 text-white">Jelajahi
					Profil</a>
				<a href="#peta-wilayah"
					class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 rounded-lg font-bold transition text-white">Lihat
					Peta Desa</a>
			</div>
		</div>
	</div>

	<!-- Sambutan Kepala Desa -->
	<section class="py-20 bg-white dark:bg-slate-800 transition-colors duration-300">
		<div class="container mx-auto px-4">
			<div class="flex flex-col md:flex-row items-center gap-12">
				<div class="w-full md:w-1/3">
					<div class="relative">
						<div class="absolute inset-0 bg-blue-600 rounded-3xl rotate-6 transform translate-y-4"></div>
						<!-- Placeholder for Kades Photo -->
						<img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png"
							alt="Kepala Desa Senenan"
							class="relative z-10 rounded-3xl shadow-2xl w-full object-cover bg-slate-200 h-[400px]">
					</div>
				</div>
				<div class="w-full md:w-2/3">
					<span class="text-blue-600 dark:text-blue-400 font-bold tracking-wider text-sm">SAMBUTAN PETINGGI</span>
					<h2 class="text-4xl font-bold text-slate-900 dark:text-white mt-2 mb-6">Selamat Datang di Website Resmi
						Desa Senenan
					</h2>
					<div class="space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed text-lg">
						<p>
							Assalamualaikum Warahmatullahi Wabarakatuh,
						</p>
						<p>
							Puji syukur kita panjatkan ke hadirat Allah SWT. Atas berkat dan rahmat-Nya, website resmi Desa
							Senenan ini dapat diluncurkan sebagai media transparansi informasi dan jembatan komunikasi
							antara pemerintah desa dengan masyarakat luas.
						</p>
						<p>
							Melalui media ini, kami berharap dapat memberikan pelayanan yang lebih cepat, transparan, dan
							akuntabel. Desa Senenan yang dikenal dengan sejarah "Gong Senen" dan potensi ukirnya, siap
							melangkah maju menjadi desa digital yang mandiri.
						</p>
						<p class="font-bold text-slate-900 dark:text-white pt-4">
							Mulyono<br>
							<span class="text-sm font-normal text-slate-500 dark:text-slate-400">Petinggi Desa
								Senenan</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Statistik Desa -->
	<section
		class="py-16 bg-slate-50 dark:bg-slate-900 border-y border-slate-200 dark:border-slate-800 transition-colors duration-300">
		<div class="container mx-auto px-4">
			<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
				<div
					class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 text-center transition-colors">
					<div class="text-4xl font-bold text-amber-500 mb-2">8.204</div>
					<div class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-wide">Penduduk
					</div>
				</div>
				<div
					class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 text-center transition-colors">
					<div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">305</div>
					<div class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-wide">Tahun
						Sejarah</div>
				</div>
				<div
					class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 text-center transition-colors">
					<div class="text-4xl font-bold text-green-500 dark:text-green-400 mb-2">24 / 8</div>
					<div class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-wide">RT / RW
					</div>
				</div>
				<div
					class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 text-center transition-colors">
					<div class="text-4xl font-bold text-purple-500 dark:text-purple-400 mb-2">50+</div>
					<div class="text-sm font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-wide">UMKM Ukir
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Berita Terkini -->
	<section id="berita-section" class="py-20 bg-white dark:bg-slate-800 transition-colors duration-300">
		<div class="container mx-auto px-4">
			<div class="text-center max-w-2xl mx-auto mb-16">
				<span class="text-blue-600 dark:text-blue-400 font-bold tracking-wider text-sm">KABAR DESA</span>
				<h2 class="text-3xl font-bold text-slate-900 dark:text-white mt-2">Berita & Kegiatan Terbaru</h2>
				<p class="text-slate-500 dark:text-slate-400 mt-4">Informasi terkini mengenai kegiatan pemerintahan,
					pembangunan, dan sosial
					kemasyarakatan di Desa Senenan.</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<!-- News Item 1 -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/sedekah_bumi.JPG') }}" alt="Sedekah Bumi"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute top-4 left-4 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full">
							BUDAYA</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							20 Mei 2025
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Persiapan
							Sedekah Bumi ke-305 Desa Senenan</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">Masyarakat antusias
							menyambut tradisi tahunan
							sebagai wujud syukur dengan tema 'Desa Mandiri & Berbudaya'.</p>
						<button onclick="openNewsModal('budaya')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">Baca
							Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg></button>
					</div>
				</article>

				<!-- News Item 2 -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/kerja_bakti.jpg') }}" alt="Kerja Bakti"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">
							KEGIATAN</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							12 Desember 2025
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Kerja Bakti
							Bersama Menjelang Natal</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">Warga bersama TNI/Polri
							membersihkan area
							Gereja GITJ Senenan untuk persiapan perayaan Natal.</p>
						<button onclick="openNewsModal('kegiatan')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">Baca
							Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg></button>
					</div>
				</article>

				<!-- News Item 3 -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/balai_desa.JPG') }}" alt="Pelayanan"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute top-4 left-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
							PEMERINTAHAN</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							Oktober 2024
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Transformasi
							Digital Layanan Administrasi</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">Pemdes Senenan mulai
							menerapkan sistem
							pelayanan surat digital untuk memudahkan warga.</p>
						<button onclick="openNewsModal('pemerintahan')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">Baca
							Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg></button>
					</div>
				</article>
			</div>

			<!-- Hidden Additional News (Initially Hidden) -->
			<div id="additional-news" class="hidden grid-cols-1 md:grid-cols-3 gap-8 mt-8">

				<!-- News Item 4: PKK -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/pkk_senenan1.jpg') }}" alt="PKK Prestasi"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div
							class="absolute top-4 left-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">
							PEMBERDAYAAN</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							15 Januari 2025
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Prestasi PKK Desa Senenan Tingkat Kabupaten
						</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
							Tim PKK Desa Senenan meraih penghargaan dalam program pemberdayaan perempuan dan kesejahteraan
							keluarga.
						</p>
						<button onclick="openNewsModal('pkk')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">
							Baca Selengkapnya
							<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg>
						</button>
					</div>
				</article>

				<!-- News Item 5: Sentra Ukir -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/sentra_relief.jpeg') }}" alt="Sentra Ukir"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">
							EKONOMI</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							8 Januari 2025
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Desa Senenan: Jantung Sentra Ukir Nasional
						</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
							Kontribusi Desa Senenan dalam menjaga eksistensi Jepara sebagai pusat ukir kayu terbesar di
							Indonesia.
						</p>
						<button onclick="openNewsModal('sentra_ukir')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">
							Baca Selengkapnya
							<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg>
						</button>
					</div>
				</article>

				<!-- News Item 6: Inovasi UMKM -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/umkm.jpg') }}" alt="UMKM Inovasi"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute top-4 left-4 bg-teal-600 text-white text-xs font-bold px-3 py-1 rounded-full">
							WIRAUSAHA</div>
					</div>
					<div class="p-6">
						<div class="text-xs text-slate-400 dark:text-slate-300 mb-3 flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							3 Januari 2025
						</div>
						<h3
							class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
							Inovasi UMKM Lokal Go Digital
						</h3>
						<p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
							Pelaku UMKM Desa Senenan bertransformasi digital untuk memperluas pasar hingga mancanegara.
						</p>
						<button onclick="openNewsModal('umkm_inovasi')"
							class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold text-sm group-hover:translate-x-1 transition">
							Baca Selengkapnya
							<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 8l4 4m0 0l-4 4m4-4H3" />
							</svg>
						</button>
					</div>
				</article>

			</div>

			<!-- Toggle Button -->
			<div class="text-center mt-12">
				<button id="toggle-news-btn" onclick="toggleNews()"
					class="inline-block px-8 py-3 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 font-bold rounded-full hover:bg-slate-200 dark:hover:bg-slate-600 transition shadow-sm">
					<span id="toggle-text">Lihat Berita Lainnya</span>
					<svg id="toggle-icon-down" class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor"
						viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
					</svg>
					<svg id="toggle-icon-up" class="w-5 h-5 inline-block ml-2 hidden" fill="none" stroke="currentColor"
						viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
					</svg>
				</button>
			</div>
		</div>
	</section>

	<!-- Peta Interaktif -->
	<section id="peta-wilayah" class="py-16 bg-slate-100 dark:bg-slate-900 transition-colors duration-300">
		<div class="w-full md:w-3/4 mx-auto px-4">
			<div
				class="relative w-full h-[500px] rounded-3xl overflow-hidden shadow-2xl border border-white/50 dark:border-slate-700 z-0 transition-colors">
				<div id="home-map" class="w-full h-full z-0"></div>

				<!-- Detail Panel (Floating Left) -->
				<div id="detail-panel"
					class="absolute top-4 left-4 z-[400] w-72 max-w-[calc(100%-2rem)] glass bg-white/95 dark:bg-slate-800/95 backdrop-blur rounded-2xl shadow-xl overflow-hidden hidden transition-all duration-300 border border-slate-200 dark:border-slate-700">
					<div class="relative h-40 bg-slate-200 group cursor-pointer" onclick="openFullModal()">
						<img id="detail-image" src="" alt="Location Image"
							class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
						<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
						<div
							class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/20">
							<span
								class="text-white text-xs font-bold border border-white px-3 py-1 rounded-full backdrop-blur-sm">Lihat
								Detail</span>
						</div>
						<button onclick="event.stopPropagation(); closeDetail()"
							class="absolute top-2 right-2 p-1 bg-black/20 text-white rounded-full hover:bg-black/40 backdrop-blur-sm transition z-10">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd"
									d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
									clip-rule="evenodd" />
							</svg>
						</button>
						<div class="absolute bottom-3 left-4 right-4">
							<span id="detail-category"
								class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-blue-500 text-white mb-1 inline-block">Category</span>
							<h2 id="detail-title" class="text-lg font-bold text-white leading-tight line-clamp-2">Location
								Name</h2>
						</div>
					</div>
					<div class="p-4 max-h-[30vh] overflow-y-auto">
						<p id="detail-description"
							class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3 line-clamp-3">
							Description
							goes
							here...</p>
						<button onclick="openFullModal()"
							class="w-full py-1.5 bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 text-slate-600 dark:text-slate-200 text-[10px] font-bold uppercase tracking-wider rounded-lg transition">
							Selengkapnya
						</button>
					</div>
				</div>

				<!-- Custom Layer Control (Floating Top Right) -->
				<div
					class="absolute top-4 right-4 z-[400] bg-white dark:bg-slate-800 rounded-xl shadow-lg overflow-hidden w-64 max-w-[calc(100%-2rem)] text-slate-800 dark:text-slate-200 border border-slate-200 dark:border-slate-700">
					<div class="bg-gray-50 dark:bg-slate-700 px-3 py-2 border-b border-gray-100 dark:border-slate-600">
						<h3
							class="font-bold text-slate-700 dark:text-slate-200 text-xs uppercase tracking-wider flex items-center gap-2">
							<svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
							</svg>
							Filter & Peta
						</h3>
					</div>
					<div class="p-2 space-y-1 text-xs bg-white dark:bg-slate-800">
						<!-- Dynamic Categories -->
						@foreach($categories as $category)
							<label
								class="flex items-center gap-2 cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-700 p-1.5 rounded transition select-none">
								<input type="checkbox"
									class="form-checkbox w-3 h-3 rounded text-blue-600 focus:ring-blue-500 category-toggle"
									data-category-id="{{ $category->id }}" checked>
								<span
									class="flex items-center justify-center w-4 h-4 rounded shadow-sm border border-black/10 text-white text-[8px]"
									style="background-color: {{ $category->color ?? '#3b82f6' }}">
									@if($category->icon) <i class="{{ $category->icon }}"></i> @endif
								</span>
								<span class="text-slate-600 dark:text-slate-300">{{ $category->name }}</span>
							</label>
						@endforeach

						<hr class="my-2 border-slate-100 dark:border-slate-700">

						<!-- Basemaps -->
						<div class="flex gap-2">
							<label class="flex-1 cursor-pointer">
								<input type="radio" name="basemap" value="streets" checked
									onclick="switchBasemap('streets')" class="peer sr-only">
								<div
									class="text-center py-1.5 border border-slate-200 rounded text-slate-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 peer-checked:border-blue-200 transition text-[10px] font-bold">
									Jalan</div>
							</label>
							<label class="flex-1 cursor-pointer">
								<input type="radio" name="basemap" value="hybrid" onclick="switchBasemap('hybrid')"
									class="peer sr-only">
								<div
									class="text-center py-1.5 border border-slate-200 rounded text-slate-500 peer-checked:bg-blue-50 peer-checked:text-blue-600 peer-checked:border-blue-200 transition text-[10px] font-bold">
									Satelit</div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Full Detail Modal -->
	<div id="full-modal" class="fixed inset-0 z-[9999] hidden" aria-labelledby="modal-title" role="dialog"
		aria-modal="true">
		<!-- Background backdrop -->
		<div class="fixed inset-0 bg-slate-900/75 backdrop-blur-sm transition-opacity" onclick="closeFullModal()"></div>

		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

				<div
					class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">

					<!-- Close Button -->
					<div class="absolute top-0 right-0 pt-4 pr-4 z-10">
						<button type="button"
							class="rounded-full bg-white/20 p-1 text-slate-500 hover:text-slate-800 hover:bg-slate-100 transition"
							onclick="closeFullModal()">
							<span class="sr-only">Close</span>
							<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>

					<!-- Image Header -->
					<div class="relative h-64 sm:h-80 w-full bg-slate-200">
						<img id="modal-image" src="" alt="Detail" class="h-full w-full object-cover">
						<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
						<div class="absolute bottom-0 left-0 p-6 sm:p-8">
							<span id="modal-category"
								class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-600 text-white mb-3">Category</span>
							<h3 id="modal-title" class="text-2xl sm:text-3xl font-bold text-white leading-tight">Title</h3>
						</div>
					</div>

					<!-- Content Body -->
					<div class="px-6 py-6 sm:px-8 sm:py-8 bg-white max-h-[50vh] overflow-y-auto custom-scrollbar">
						<div id="modal-description"
							class="prose prose-slate max-w-none text-slate-600 whitespace-pre-wrap leading-relaxed text-base">
							<!-- Content will be injected here -->
						</div>

						<!-- Metadata -->
						<div
							class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row gap-4 text-sm text-slate-500">
							<div class="flex items-center gap-2">
								<svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
								</svg>
								<span id="modal-coords" class="font-mono">Lat, Lng</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News Detail Modal -->
	<div id="news-modal" class="fixed inset-0 z-[9999] hidden" aria-labelledby="news-modal-title" role="dialog"
		aria-modal="true">
		<!-- Background backdrop -->
		<div class="fixed inset-0 bg-slate-900/75 backdrop-blur-sm transition-opacity" onclick="closeNewsModal()"></div>

		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
				<div
					class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-800 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">

					<!-- Close Button -->
					<div class="absolute top-0 right-0 pt-4 pr-4 z-10">
						<button type="button"
							class="rounded-full bg-white/20 dark:bg-slate-700/50 p-1 text-slate-500 dark:text-slate-300 hover:text-slate-800 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-600 transition"
							onclick="closeNewsModal()">
							<span class="sr-only">Close</span>
							<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>

					<!-- Modal Content -->
					<div id="news-modal-content">
						<!-- Content will be injected by JavaScript -->
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection

<style>
	/* Hide Google Maps labels/text for cleaner map view */
	.leaflet-tile-pane img {
		filter: grayscale(0%);
	}

	/* Alternative: Use a custom tile layer without labels */
	.leaflet-container {
		font-family: inherit;
	}
</style>

@push('scripts')
	<script>
		// Toggle News Function
		function toggleNews() {
			const additionalNews = document.getElementById('additional-news');
			const toggleText = document.getElementById('toggle-text');
			const iconDown = document.getElementById('toggle-icon-down');
			const iconUp = document.getElementById('toggle-icon-up');

			if (additionalNews.classList.contains('hidden')) {
				// Show additional news
				additionalNews.classList.remove('hidden');
				additionalNews.classList.add('grid');
				toggleText.textContent = 'Lihat Lebih Sedikit';
				iconDown.classList.add('hidden');
				iconUp.classList.remove('hidden');

				// Smooth scroll to additional news
				setTimeout(() => {
					additionalNews.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
				}, 100);
			} else {
				// Hide additional news
				additionalNews.classList.add('hidden');
				additionalNews.classList.remove('grid');
				toggleText.textContent = 'Lihat Berita Lainnya';
				iconDown.classList.remove('hidden');
				iconUp.classList.add('hidden');
			}
		}

		// News Modal Functions
		const newsData = {
			pkk: {
				category: 'PEMBERDAYAAN',
				categoryColor: 'bg-purple-600',
				date: '15 Januari 2025',
				title: 'Prestasi PKK Desa Senenan Tingkat Kabupaten',
				image: '{{ asset("images/pkk_senenan1.jpg") }}',
				content: `
																						<p class="mb-4">Tim Penggerak PKK Desa Senenan menyelenggarakan pelatihan keterampilan membatik bagi ibu-ibu anggota PKK. Kegiatan ini bertujuan untuk meningkatkan kreativitas dan kemandirian ekonomi perempuan di desa.</p>

																						<p class="mb-4">Pelatihan yang berlangsung selama tiga hari ini diikuti oleh 25 peserta. Mereka diajarkan berbagai teknik membatik, mulai dari mencanting, mewarnai, hingga melorot. Instruktur didatangkan langsung dari sentra batik di Jepara.</p>

																						<p class="mb-4">Ketua TP PKK Desa Senenan, Ibu Siti Aminah, menyampaikan bahwa pelatihan ini diharapkan dapat membuka peluang usaha baru bagi ibu-ibu. "Kami ingin ibu-ibu tidak hanya menjadi konsumen, tetapi juga produsen. Batik adalah warisan budaya yang memiliki nilai ekonomi tinggi," ujarnya.</p>

																						<p class="mb-4">Salah satu peserta, Ibu Wati, mengungkapkan antusiasmenya. "Saya sangat senang bisa ikut pelatihan ini. Ternyata membatik itu tidak sesulit yang saya bayangkan. Semoga nanti bisa menghasilkan karya batik sendiri dan dijual," katanya.</p>

																						<p>Setelah pelatihan, PKK Desa Senenan berencana untuk membentuk kelompok usaha bersama (KUBE) batik, sehingga produk-produk batik hasil karya ibu-ibu dapat dipasarkan secara lebih luas.</p>
																					`
			},
			sentra_ukir: {
				category: 'EKONOMI',
				categoryColor: 'bg-red-600',
				date: '8 Januari 2025',
				title: 'Desa Senenan: Jantung Sentra Ukir Nasional',
				image: '{{ asset("images/sentra_relief.jpeg") }}',
				content: `
																						<p class="mb-4">Pemerintah Desa Senenan bersama Dinas Perindustrian dan Perdagangan Kabupaten Jepara meluncurkan program revitalisasi sentra ukir kayu di desa. Program ini bertujuan untuk meningkatkan kualitas produk, kapasitas produksi, dan daya saing perajin ukir lokal.</p>

																						<p class="mb-4">Revitalisasi meliputi penyediaan fasilitas workshop yang lebih modern, pelatihan desain dan pemasaran digital, serta fasilitasi akses permodalan bagi perajin. Desa Senenan dikenal sebagai salah satu sentra ukir kayu terkemuka di Jepara.</p>

																						<p class="mb-4">Kepala Desa Senenan, Bapak Mulyono, menjelaskan bahwa sektor ukir kayu merupakan tulang punggung perekonomian desa. "Kami berkomitmen untuk terus mendukung para perajin. Dengan revitalisasi ini, kami berharap produk ukir Senenan semakin dikenal di pasar nasional maupun internasional," kata Pak Mulyono.</p>

																						<p class="mb-4">Salah satu perajin senior, Bapak Sutrisno, menyambut baik program ini. "Kami sangat terbantu dengan adanya fasilitas baru dan pelatihan. Terutama pelatihan pemasaran online, ini sangat penting agar produk kami bisa menjangkau pembeli lebih luas," ungkapnya.</p>

																						<p>Diharapkan, program revitalisasi ini dapat menarik lebih banyak generasi muda untuk menekuni seni ukir, sehingga warisan budaya dan ekonomi desa tetap lestari dan berkembang.</p>
																					`
			},
			umkm_inovasi: {
				category: 'UMKM',
				categoryColor: 'bg-teal-500',
				date: '08 April 2025',
				title: 'Pameran Produk Inovasi UMKM Desa Senenan',
				image: '{{ asset("images/umkm.jpg") }}',
				content: `
																						<p class="mb-4">Desa Senenan sukses menggelar Pameran Produk Inovasi UMKM yang menampilkan berbagai produk unggulan dari pelaku usaha mikro, kecil, dan menengah di desa. Acara ini bertujuan untuk mempromosikan produk lokal dan mendorong semangat kewirausahaan.</p>

																						<p class="mb-4">Pameran yang berlangsung selama dua hari ini diikuti oleh lebih dari 30 UMKM, dengan produk mulai dari olahan makanan, kerajinan tangan, fashion, hingga produk pertanian organik. Pengunjung dapat melihat langsung proses pembuatan produk dan berinteraksi dengan para pelaku UMKM.</p>

																						<p class="mb-4">Sekretaris Desa Senenan, Ibu Sri Wahyuni, menyatakan kebanggaannya atas kreativitas dan inovasi UMKM desa. "Produk-produk yang ditampilkan sangat beragam dan berkualitas. Ini menunjukkan potensi besar UMKM kita untuk bersaing di pasar yang lebih luas," ujarnya.</p>

																						<p class="mb-4">Selain pameran, acara juga dimeriahkan dengan workshop kewirausahaan, demo masak, dan pertunjukan seni lokal. Beberapa produk bahkan berhasil menarik perhatian pembeli dari luar kota.</p>

																						<p>"Kami berharap pameran ini menjadi agenda rutin untuk terus memotivasi UMKM agar berinovasi dan meningkatkan kualitas produk mereka," tambah Ibu Sri Wahyuni.</p>
																					`
			},
			budaya: {
				category: 'BUDAYA',
				categoryColor: 'bg-amber-500',
				date: '20 Mei 2025',
				title: 'Persiapan Sedekah Bumi ke-305 Desa Senenan',
				image: '{{ asset("images/sedekah_bumi.JPG") }}',
				content: `
																						<p class="mb-4">Masyarakat Desa Senenan tengah mempersiapkan pelaksanaan tradisi Sedekah Bumi yang ke-305 dengan penuh antusiasme. Tradisi tahunan ini merupakan wujud syukur masyarakat atas hasil panen dan berkah yang diterima sepanjang tahun.</p>

																						<p class="mb-4">Tahun ini, Sedekah Bumi mengangkat tema <strong>"Desa Mandiri & Berbudaya"</strong> yang mencerminkan semangat kemandirian dan pelestarian budaya lokal. Berbagai persiapan telah dilakukan oleh panitia dan seluruh warga, mulai dari persiapan sesaji, dekorasi, hingga susunan acara.</p>

																						<p class="mb-4">Kepala Desa Senenan, Bapak Mulyono, menyampaikan bahwa tradisi Sedekah Bumi ini bukan hanya sekadar ritual adat, tetapi juga momen untuk mempererat tali silaturahmi antar warga dan melestarikan nilai-nilai luhur budaya Jawa.</p>

																						<p class="mb-4">"Sedekah Bumi adalah warisan leluhur yang harus kita jaga. Melalui tradisi ini, kita mengajarkan kepada generasi muda tentang pentingnya bersyukur dan menjaga keharmonisan dengan alam," ujar Pak Mulyono.</p>

																						<p>Rangkaian acara Sedekah Bumi akan meliputi kirab budaya, pertunjukan seni tradisional, pasar rakyat, dan doa bersama. Seluruh warga Desa Senenan diharapkan dapat berpartisipasi aktif dalam menyukseskan acara ini.</p>
																					`
			},
			kegiatan: {
				category: 'KEGIATAN',
				categoryColor: 'bg-blue-600',
				date: '12 Desember 2025',
				title: 'Kerja Bakti Bersama Menjelang Natal',
				image: '{{ asset("images/kerja_bakti.jpg") }}',
				content: `
																						<p class="mb-4">Dalam rangka menyambut perayaan Natal, warga Desa Senenan bersama TNI/Polri menggelar kegiatan kerja bakti membersihkan area Gereja GITJ Senenan. Kegiatan ini diikuti oleh puluhan warga dari berbagai RT dan RW.</p>

																						<p class="mb-4">Kerja bakti dimulai pukul 07.00 WIB dengan pembagian tugas kepada seluruh peserta. Ada yang bertugas membersihkan halaman gereja, memotong rumput, membersihkan selokan, hingga mengecat ulang pagar gereja yang sudah mulai kusam.</p>

																						<p class="mb-4">Danramil Tahunan, Kapten Inf. Bambang Suryanto, menyampaikan apresiasi atas antusiasme warga dalam menjaga kebersihan lingkungan. "Ini adalah contoh nyata kerukunan antar umat beragama di Desa Senenan. Kami dari TNI/Polri sangat mendukung kegiatan positif seperti ini," ucapnya.</p>

																						<p class="mb-4">Ketua Panitia Natal Gereja GITJ Senenan, Bapak Yohanes Kristanto, mengucapkan terima kasih kepada seluruh warga yang telah membantu. "Dengan gotong royong seperti ini, kami merasa sangat terbantu. Semoga perayaan Natal tahun ini dapat berjalan dengan khidmat dan meriah," harapnya.</p>

																						<p>Setelah kegiatan kerja bakti selesai, panitia menyediakan makan siang bersama untuk seluruh peserta sebagai bentuk apresiasi atas partisipasi mereka.</p>
																					`
			},
			pemerintahan: {
				category: 'PEMERINTAHAN',
				categoryColor: 'bg-green-500',
				date: 'Oktober 2024',
				title: 'Transformasi Digital Layanan Administrasi',
				image: '{{ asset("images/balai_desa.JPG") }}',
				content: `
																						<p class="mb-4">Pemerintah Desa Senenan resmi meluncurkan sistem pelayanan administrasi berbasis digital untuk memudahkan warga dalam mengurus berbagai keperluan surat-menyurat. Sistem ini merupakan bagian dari program transformasi digital pemerintahan desa.</p>

																						<p class="mb-4">Dengan sistem baru ini, warga dapat mengajukan permohonan surat keterangan seperti KK, KTP, surat keterangan usaha, dan lainnya melalui aplikasi online. Proses yang sebelumnya memakan waktu berhari-hari kini dapat diselesaikan dalam hitungan jam.</p>

																						<p class="mb-4">Kepala Desa Senenan, Bapak Mulyono, menjelaskan bahwa transformasi digital ini bertujuan untuk meningkatkan kualitas pelayanan publik. "Kami ingin memberikan kemudahan kepada warga. Tidak perlu lagi antri panjang di kantor desa, cukup ajukan dari rumah melalui smartphone," jelasnya.</p>

																						<p class="mb-4">Sistem ini juga dilengkapi dengan fitur tracking status permohonan, sehingga warga dapat memantau progress pengajuan mereka secara real-time. Pembayaran retribusi juga dapat dilakukan secara online melalui berbagai metode pembayaran digital.</p>

																						<p class="mb-4">Untuk memastikan semua warga dapat menggunakan sistem ini, pemerintah desa mengadakan sosialisasi dan pelatihan di setiap RT/RW. Bagi warga yang belum familiar dengan teknologi, petugas desa siap membantu di kantor desa.</p>

																						<p>"Respon warga sangat positif. Mereka merasa terbantu dengan adanya sistem ini, terutama bagi yang sibuk bekerja dan tidak sempat datang ke kantor desa," tambah Sekretaris Desa, Ibu Sri Wahyuni.</p>
																					`
			}
		};

		window.openNewsModal = function (newsType) {
			const modal = document.getElementById('news-modal');
			const content = document.getElementById('news-modal-content');
			const news = newsData[newsType];

			if (!news) return;

			content.innerHTML = `
																					<div class="relative h-64 sm:h-80 w-full bg-slate-200">
																						<img src="${news.image}" alt="${news.title}" class="h-full w-full object-cover">
																						<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
																						<div class="absolute bottom-0 left-0 p-6 sm:p-8">
																							<span class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider ${news.categoryColor} text-white mb-3">${news.category}</span>
																							<h3 class="text-2xl sm:text-3xl font-bold text-white leading-tight">${news.title}</h3>
																							<p class="text-slate-300 text-sm mt-2">${news.date}</p>
																						</div>
																					</div>
																					<div class="px-6 py-6 sm:px-8 sm:py-8 bg-white dark:bg-slate-800 max-h-[50vh] overflow-y-auto">
																						<div class="prose prose-slate dark:prose-invert max-w-none text-slate-600 dark:text-slate-300 leading-relaxed text-base">
																							${news.content}
																						</div>
																					</div>
																				`;

			modal.classList.remove('hidden');
			document.body.style.overflow = 'hidden';
		};

		window.closeNewsModal = function () {
			const modal = document.getElementById('news-modal');
			modal.classList.add('hidden');
			document.body.style.overflow = 'auto';
		};
	</script>
@endpush

@push('scripts')
	<style>
		/* Leaflet Override for cleaner look */
		.leaflet-control-zoom {
			border: none !important;
			box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
		}

		.leaflet-control-zoom-in,
		.leaflet-control-zoom-out {
			border: none !important;
			width: 32px !important;
			height: 32px !important;
			line-height: 32px !important;
			color: #475569 !important;
		}

		.leaflet-control-zoom-in:hover,
		.leaflet-control-zoom-out:hover {
			background-color: #f8fafc !important;
			color: #2563eb !important;
		}

		.leaflet-control-zoom-in {
			border-top-left-radius: 0.5rem !important;
			border-top-right-radius: 0.5rem !important;
		}

		.leaflet-control-zoom-out {
			border-bottom-left-radius: 0.5rem !important;
			border-bottom-right-radius: 0.5rem !important;
		}
	</style>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Initialize Map
			const map = L.map('home-map', {
				zoomControl: false,
				attributionControl: false
			}).setView([-6.61028, 110.68917], 15);

			// Zoom Control (Bottom Left for better layout with panel)
			L.control.zoom({ position: 'bottomleft' }).addTo(map);

			// Basemaps (terrain/physical map with minimal labels)
			const basemaps = {
				streets: L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
					maxZoom: 20,
					subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
				}),
				hybrid: L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
					maxZoom: 20,
					subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
				})
			};

			// Default Basemap
			basemaps.streets.addTo(map);

			window.switchBasemap = function (type) {
				map.eachLayer((layer) => {
					if (layer instanceof L.TileLayer) map.removeLayer(layer);
				});
				basemaps[type].addTo(map);
			};

			// Data Layers
			let geojsonLayers = [];
			let allFeatures = [];

			// Fetch Data
			fetch('{{ route('api.locations') }}')
				.then(resp => resp.json())
				.then(data => {
					allFeatures = data.features;
					renderFeatures();
				})
				.catch(err => console.error('Gagal memuat peta:', err));

			function renderFeatures() {
				// Clear existing
				geojsonLayers.forEach(l => map.removeLayer(l));
				geojsonLayers = [];

				// Get active categories
				const activeCats = Array.from(document.querySelectorAll('.category-toggle:checked'))
					.map(cb => cb.dataset.categoryId);

				// Sort features: Polygons/Boundaries first, then Points
				// We want Points rendered LAST (on top) or handled by Leaflet panes.
				// If we render sequentially: 
				// Render Boundary -> Render Point. Point covers Boundary.
				const sortedFeatures = [...allFeatures].sort((a, b) => {
					const isPolyA = a.properties.polygon ? 1 : 0;
					const isPolyB = b.properties.polygon ? 1 : 0;
					return isPolyB - isPolyA;
					// if A is Poly (1) and B is Point (0): 0 - 1 = -1. A comes first. 
					// So Polygons are rendered first (at bottom), Points last (on top).
				});

				sortedFeatures.forEach(feature => {
					const props = feature.properties;

					// Filter check
					// Strict Filter: Only show "Batas Wilayah" (polygons) and Points.
					// We assume "Batas Wilayah" category exists or check geometry type.
					// For now, let's just show ALL points, but for Polygons, ONLY show "Batas Wilayah".

					// Logic: If it is a Polygon AND Category != 'Batas Wilayah', skip it.
					// Note: Adjust 'Batas Wilayah' string to match your actual Category Name in DB exactly, 
					// or use ID if known. Case insensitive check is safer.

					const catName = props.category ? props.category.toLowerCase() : '';
					const isBoundary = props.polygon && (catName.includes('batas') || catName.includes('wilayah'));

					if (!activeCats.includes(String(props.category_id))) return;

					// Create Layer
					let layer;
					if (isBoundary) {
						try {
							const latlngs = JSON.parse(props.polygon);
							layer = L.polygon(latlngs, {
								color: props.color || '#3b82f6',
								fillColor: props.color || '#3b82f6',
								fillOpacity: 0.1,
								weight: 2
							});

							layer.on('add', function () {
								layer.bringToBack(); // Boundaries at bottom
							});
							layer.setStyle({ fillOpacity: 0.05, weight: 1.5, color: '#ef4444' }); // Red for boundary

							// Allow boundary click to show detail if needed, or ignore
							// layer.on('click', () => showDetail(props, latlngs[0][0], latlngs[0][1]));

						} catch (e) { }
					} else {
						// Render as Point
						const coords = feature.geometry.coordinates;
						const lat = coords[1];
						const lng = coords[0];
						layer = L.circleMarker([lat, lng], {
							radius: 6,
							fillColor: props.color || '#3b82f6',
							color: '#fff',
							weight: 2,
							opacity: 1,
							fillOpacity: 1
						});

						// Points are strictly on top
						layer.on('add', function () {
							layer.bringToFront();
						});

						// On Click -> Show Detail Panel
						layer.on('click', () => showDetail(props, lat, lng));
					}

					if (layer) {
						layer.addTo(map);
						geojsonLayers.push(layer);
					}
				});
			}

			window.showDetail = function (props, lat, lng) {
				currentProps = { ...props, lat, lng }; // Store for full modal
				const panel = document.getElementById('detail-panel');
				panel.classList.remove('hidden');

				document.getElementById('detail-title').innerText = props.name;
				// Truncate description for preview
				document.getElementById('detail-description').innerText = props.description || 'Tidak ada deskripsi.';
				document.getElementById('detail-category').innerText = props.category;
				document.getElementById('detail-category').style.backgroundColor = props.color;
				document.getElementById('detail-lat').innerText = lat.toFixed(6);
				document.getElementById('detail-lng').innerText = lng.toFixed(6);

				const img = document.getElementById('detail-image');
				if (props.image && props.image !== 'null') {
					img.src = props.image.startsWith('http') ? props.image : '/storage/' + props.image;
				} else {
					img.src = '{{ asset("images/umkm.jpg") }}';
				}

				map.flyTo([lat, lng], 17, {
					animate: true,
					duration: 1.2
				});
			};

			window.closeDetail = function () {
				document.getElementById('detail-panel').classList.add('hidden');
			};

			window.openFullModal = function () {
				if (!currentProps) return;

				const modal = document.getElementById('full-modal');
				const title = document.getElementById('modal-title');
				const desc = document.getElementById('modal-description');
				const cat = document.getElementById('modal-category');
				const img = document.getElementById('modal-image');
				const coords = document.getElementById('modal-coords');

				title.innerText = currentProps.name;
				desc.innerText = currentProps.description || 'Tidak ada deskripsi detail untuk lokasi ini.';
				cat.innerText = currentProps.category;
				cat.style.backgroundColor = currentProps.color;
				coords.innerText = `${currentProps.lat.toFixed(6)}, ${currentProps.lng.toFixed(6)}`;

				if (currentProps.image && currentProps.image !== 'null') {
					img.src = currentProps.image.startsWith('http') ? currentProps.image : '/storage/' + currentProps.image;
				} else {
					img.src = 'https://via.placeholder.com/800x400?text=No+Image';
				}

				modal.classList.remove('hidden');
				document.body.style.overflow = 'hidden'; // Disable scroll
			};

			window.closeFullModal = function () {
				document.getElementById('full-modal').classList.add('hidden');
				document.body.style.overflow = 'auto'; // Enable scroll
			};

			// Listen for checkbox changes
			document.querySelectorAll('.category-toggle').forEach(cb => {
				cb.addEventListener('change', renderFeatures);
			});
		});
	</script>
@endpush