@extends('layouts.app')

@section('content')
	<div class="bg-slate-50 dark:bg-slate-900 min-h-screen pb-20 transition-colors duration-300">
		<!-- Header -->
		<div class="bg-slate-900 dark:bg-black text-white py-20 transition-colors duration-300">
			<div class="container mx-auto px-4 text-center">
				<h1 class="text-4xl font-bold mb-4">Berita & Kegiatan</h1>
				<p class="text-slate-400">Informasi terkini dari Desa Senenan</p>
			</div>
		</div>

		<!-- Content -->
		<div class="container mx-auto px-4 -mt-10">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

				<!-- News Item 1: PKK -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/pkk_prestasi.jpg') }}" alt="PKK Prestasi"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
							onerror="this.src='https://via.placeholder.com/400x300/f59e0b/ffffff?text=PKK+Desa+Senenan'">
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

				<!-- News Item 2: Sentra Ukir -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="{{ asset('images/Ukiran-Jepara.jpeg') }}" alt="Sentra Ukir"
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

				<!-- News Item 3: Inovasi UMKM -->
				<article
					class="group bg-white dark:bg-slate-700 rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-600 shadow-sm hover:shadow-xl dark:shadow-slate-900/50 transition-all duration-300">
					<div class="relative h-48 overflow-hidden">
						<img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop"
							alt="UMKM Inovasi"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
							onerror="this.src='https://via.placeholder.com/400x300/14b8a6/ffffff?text=UMKM+Senenan'">
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

			<div class="text-center mt-12">
				<a href="{{ route('home') }}"
					class="inline-block px-8 py-3 bg-slate-900 dark:bg-blue-600 text-white font-bold rounded-full hover:bg-slate-800 dark:hover:bg-blue-700 transition shadow-lg">
					Kembali ke Beranda
				</a>
			</div>
		</div>
	</div>

	<!-- News Detail Modal (reuse from home) -->
	<div id="news-modal" class="fixed inset-0 z-[9999] hidden" aria-labelledby="news-modal-title" role="dialog"
		aria-modal="true">
		<div class="fixed inset-0 bg-slate-900/75 backdrop-blur-sm transition-opacity" onclick="closeNewsModal()"></div>
		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
				<div
					class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-800 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
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
					<div id="news-modal-content"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script>
		const newsData = {
			pkk: {
				category: 'PEMBERDAYAAN',
				categoryColor: 'bg-purple-600',
				date: '15 Januari 2025',
				title: 'Prestasi PKK Desa Senenan Tingkat Kabupaten',
				image: '{{ asset("images/pkk_prestasi.jpg") }}',
				content: `
						<p class="mb-4">Tim Penggerak PKK (Pemberdayaan Kesejahteraan Keluarga) Desa Senenan berhasil meraih penghargaan dalam lomba inovasi program pemberdayaan perempuan tingkat Kabupaten Jepara. Prestasi ini merupakan bukti nyata dedikasi para kader PKK dalam meningkatkan kesejahteraan keluarga dan pemberdayaan perempuan di desa.</p>

						<p class="mb-4">Ketua TP PKK Desa Senenan, Ibu Siti Aminah, menyampaikan bahwa penghargaan ini diraih berkat kerja keras seluruh kader PKK yang telah mengimplementasikan berbagai program inovatif. "Kami fokus pada tiga pilar utama: kesehatan keluarga, pemberdayaan ekonomi perempuan, dan pendidikan anak," ujarnya.</p>

						<p class="mb-4">Beberapa program unggulan yang dinilai juri antara lain <strong>Kampung KB (Keluarga Berencana)</strong> yang berhasil menurunkan angka stunting, <strong>Bank Sampah Perempuan</strong> yang mengelola sampah menjadi produk bernilai ekonomis, dan <strong>Griya Perempuan Sehat</strong> yang menyediakan layanan deteksi dini kanker serviks dan payudara secara gratis.</p>

						<p class="mb-4">Program pemberdayaan ekonomi juga menjadi fokus utama, dengan membentuk kelompok usaha bersama seperti pengolahan makanan tradisional, kerajinan tangan, dan budidaya tanaman obat keluarga (TOGA). Hasilnya, lebih dari 50 ibu rumah tangga kini memiliki penghasilan tambahan dari usaha mandiri.</p>

						<p class="mb-4">"PKK bukan hanya organisasi, tapi gerakan nyata untuk meningkatkan kualitas hidup keluarga. Kami akan terus berinovasi dan berkolaborasi dengan berbagai pihak untuk kesejahteraan masyarakat Desa Senenan," tambah Ibu Aminah.</p>

						<p>Pemerintah Desa Senenan memberikan apresiasi tinggi atas prestasi ini dan berkomitmen untuk terus mendukung program-program PKK melalui alokasi dana desa dan fasilitasi pelatihan bagi para kader.</p>
					`
			},
			sentra_ukir: {
				category: 'EKONOMI',
				categoryColor: 'bg-red-600',
				date: '8 Januari 2025',
				title: 'Desa Senenan: Jantung Sentra Ukir Nasional',
				image: '{{ asset("images/Ukiran-Jepara.jpeg") }}',
				content: `
						<p class="mb-4">Desa Senenan memiliki peran strategis sebagai salah satu sentra utama industri ukir kayu di Kabupaten Jepara. Dengan lebih dari 50 UMKM ukir yang tersebar di berbagai RT/RW, desa ini menjadi tulang punggung eksistensi Jepara sebagai "Kota Ukir" yang mendunia.</p>

						<p class="mb-4">Sejarah seni ukir Jepara yang telah ada sejak abad ke-14 terus hidup dan berkembang di Desa Senenan. Para pengrajin di desa ini dikenal dengan keahlian mereka dalam menghasilkan <strong>ukiran relief tiga dimensi</strong> yang rumit dan bernilai seni tinggi, berbeda dengan ukiran datar pada umumnya.</p>

						<p class="mb-4">Bapak Sutrisno, salah satu pengrajin senior di Desa Senenan, menjelaskan bahwa keahlian ukir diwariskan secara turun-temurun. "Saya belajar dari ayah saya, dan sekarang anak saya juga mulai belajar. Ini bukan hanya pekerjaan, tapi warisan budaya yang harus dijaga," katanya.</p>

						<p class="mb-4">Produk-produk ukiran dari Desa Senenan tidak hanya memenuhi pasar domestik, tetapi juga diekspor ke berbagai negara seperti Amerika Serikat, Eropa, dan Timur Tengah. Mebel ukir khas Jepara yang terbuat dari kayu jati berkualitas tinggi menjadi primadona di pasar internasional.</p>

						<p class="mb-4">Untuk menghadapi persaingan global, para pengrajin di Desa Senenan terus berinovasi dengan mengadaptasi desain modern tanpa meninggalkan ciri khas ukiran tradisional Jepara. Mereka juga mulai memanfaatkan platform digital untuk memasarkan produk mereka secara online.</p>

						<p class="mb-4">Pemerintah Kabupaten Jepara melalui Dinas Perindustrian dan Perdagangan memberikan dukungan berupa pelatihan desain, bantuan peralatan produksi, dan fasilitasi pameran di berbagai event nasional maupun internasional.</p>

						<p>"Kami bangga menjadi bagian dari sentra ukir nasional. Dengan terus menjaga kualitas dan berinovasi, kami yakin produk ukir Desa Senenan akan tetap diminati pasar dunia," tutup Kepala Desa Senenan, Bapak Mulyono.</p>
					`
			},
			umkm_inovasi: {
				category: 'WIRAUSAHA',
				categoryColor: 'bg-teal-600',
				date: '3 Januari 2025',
				title: 'Inovasi UMKM Lokal Go Digital',
				image: '{{ asset("images/umkm_inovasi.jpg") }}',
				content: `
						<p class="mb-4">Pelaku UMKM di Desa Senenan kini semakin melek teknologi dan bertransformasi digital untuk memperluas jangkauan pasar. Dengan dukungan pemerintah desa dan berbagai lembaga pembinaan, puluhan UMKM lokal kini telah memiliki toko online dan aktif memasarkan produk melalui platform e-commerce.</p>

						<p class="mb-4">Ibu Rina Wulandari, pemilik usaha kerajinan ukir miniatur, menceritakan pengalamannya. "Dulu saya hanya mengandalkan pembeli yang datang langsung ke workshop. Sekarang dengan berjualan online, pesanan datang dari berbagai kota bahkan luar negeri. Omzet meningkat hingga 300%," ungkapnya dengan antusias.</p>

						<p class="mb-4">Transformasi digital ini didukung oleh program pelatihan yang diselenggarakan oleh Dinas Koperasi dan UMKM Kabupaten Jepara bekerja sama dengan Universitas Ivet dan PLN. Pelatihan mencakup <strong>fotografi produk, manajemen media sosial, SEO, dan pengelolaan toko online</strong>.</p>

						<p class="mb-4">Selain ukiran kayu, UMKM di Desa Senenan juga mengembangkan produk-produk inovatif lainnya seperti kerajinan monel, produk olahan makanan khas Jepara, dan souvenir unik berbahan dasar limbah kayu dengan konsep <em>zero waste</em>.</p>

						<p class="mb-4">Bapak Agus Priyanto, pengrajin yang juga aktif sebagai mentor UMKM, menjelaskan pentingnya inovasi. "Kita tidak bisa hanya mengandalkan produk tradisional. Harus ada inovasi desain yang mengikuti tren pasar, tapi tetap mempertahankan ciri khas Jepara. Digitalisasi juga wajib, karena pasar sekarang ada di online," jelasnya.</p>

						<p class="mb-4">Beberapa UMKM di Desa Senenan bahkan telah berhasil menembus pasar ekspor melalui program <strong>Ekspor Shopee</strong> dan marketplace internasional lainnya. Produk mereka kini tersebar di negara-negara ASEAN, Amerika, dan Eropa.</p>

						<p class="mb-4">Pemerintah Desa Senenan juga turut mendukung dengan menyediakan ruang pameran produk UMKM di balai desa dan memfasilitasi partisipasi dalam berbagai event pameran tingkat kabupaten hingga nasional.</p>

						<p>"Kami optimis UMKM Desa Senenan akan terus berkembang. Dengan semangat inovasi dan pemanfaatan teknologi digital, produk lokal kami bisa bersaing di pasar global," tutup Sekretaris Desa, Ibu Sri Wahyuni.</p>
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
						<img src="${news.image}" alt="${news.title}" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/800x400/3b82f6/ffffff?text=${news.category}'">
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