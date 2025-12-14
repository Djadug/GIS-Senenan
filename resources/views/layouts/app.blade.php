<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name', 'Desa Senenan') }}</title>
	<link rel="icon" href="{{ asset('images/logo_jepara.PNG') }}" type="image/png">
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			darkMode: 'class',
			theme: {
				extend: {
					fontFamily: {
						sans: ['Inter', 'sans-serif'],
					},
				}
			}
		}
	</script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
		integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
		integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<style>
		body {
			font-family: 'Inter', sans-serif;
		}
	</style>
	<script>
		// Dark mode init
		if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
			document.documentElement.classList.add('dark')
		} else {
			document.documentElement.classList.remove('dark')
		}
	</script>
</head>

<body
	class="font-sans antialiased text-slate-800 bg-white dark:bg-slate-900 dark:text-slate-100 flex flex-col min-h-screen transition-colors duration-300">

	<!-- Navbar -->
	<nav
		class="bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800 sticky top-0 z-50 shadow-sm transition-colors duration-300">
		<div class="container mx-auto px-4">
			<div class="flex justify-between items-center h-20">
				<!-- Logo -->
				<a href="{{ route('home') }}" class="flex items-center gap-3 group">
					<img src="{{ asset('images/logo_jepara.PNG') }}" alt="Logo Jepara" class="h-10 w-auto">
					<div class="flex flex-col">
						<span
							class="text-xs font-semibold text-slate-500 dark:text-slate-400 tracking-wider uppercase group-hover:text-amber-600 transition">Kabupaten
							Jepara</span>
						<span class="text-xl font-bold text-slate-900 dark:text-white leading-none">Desa Senenan</span>
					</div>
				</a>

				<!-- Desktop Menu -->
				<div class="hidden md:flex gap-8 items-center">
					<a href="{{ route('home') }}"
						class="text-sm font-medium {{ request()->routeIs('home') ? 'text-amber-600 dark:text-amber-500' : 'text-slate-600 dark:text-slate-300 hover:text-amber-600 dark:hover:text-amber-500' }} transition">Beranda</a>
					<a href="{{ route('profile') }}"
						class="text-sm font-medium {{ request()->routeIs('profile') ? 'text-amber-600 dark:text-amber-500' : 'text-slate-600 dark:text-slate-300 hover:text-amber-600 dark:hover:text-amber-500' }} transition">Profil
						Desa</a>
					<a href="{{ request()->routeIs('home') ? '#berita-section' : route('home') . '#berita-section' }}"
						class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-amber-600 dark:hover:text-amber-500 transition">Berita</a>
					<a href="{{ request()->routeIs('home') ? '#peta-wilayah' : route('home') . '#peta-wilayah' }}"
						class="text-sm font-medium {{ request()->routeIs('map.index') ? 'text-amber-600 dark:text-amber-500' : 'text-slate-600 dark:text-slate-300 hover:text-amber-600 dark:hover:text-amber-500' }} transition">Peta
						GIS</a>
				</div>

				<!-- Admin Button & Dark Toggle -->
				<div class="flex items-center gap-4">
					<!-- Dark Mode Toggle -->
					<button id="theme-toggle" type="button"
						class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-700 rounded-lg text-sm p-2.5 transition">
						<svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
							<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
						</svg>
						<svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
							viewBox="0 0 20 20">
							<path
								d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
								fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</button>

					@auth
						<a href="{{ route('admin.dashboard') }}" class="text-sm font-bold text-blue-600">Dashboard</a>
					@else
						<a href="{{ route('login') }}"
							class="bg-slate-900 dark:bg-blue-600 hover:bg-slate-800 dark:hover:bg-blue-700 text-white px-5 py-2.5 rounded-full text-sm font-medium transition shadow-lg shadow-slate-900/20 dark:shadow-blue-600/20">Login</a>
					@endauth
				</div>
			</div>
		</div>
	</nav>

	<!-- Content -->
	<main class="flex-grow">
		@yield('content')
	</main>

	<!-- Footer -->
	<footer class="bg-slate-900 text-slate-300 py-16 border-t border-slate-800 mt-auto">
		<div class="container mx-auto px-4">
			<div class="grid grid-cols-1 md:grid-cols-4 gap-12">
				<div class="col-span-1 md:col-span-2 space-y-4">
					<div class="flex items-center gap-3">
						<img src="{{ asset('images/logo_jepara.PNG') }}" alt="Logo"
							class="h-10 opacity-80 decoration-slate-50 grayscale">
						<span class="text-2xl font-bold text-white">Desa Senenan</span>
					</div>
					<p class="leading-relaxed text-sm text-slate-400 max-w-sm">
						Website Desa Senenan, Kecamatan Tahunan, Kabupaten Jepara. Media transparansi
						dan informasi -pelayanan publik digital.
					</p>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6">Tautan Cepat</h4>
					<ul class="space-y-3 text-sm">
						<li><a href="{{ route('home') }}" class="hover:text-amber-500 transition">Beranda</a></li>
						<li><a href="{{ route('profile') }}" class="hover:text-amber-500 transition">Profil Desa</a>
						</li>
						<li><a href="{{ route('map.index') }}" class="hover:text-amber-500 transition">Peta
								Geografis</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6">Kontak Kami</h4>
					<ul class="space-y-4 text-sm">
						<li class="flex gap-3">
							<span class="text-slate-400">Jl. Raya Jepara - Kudus<br>Kec. Tahunan, Kab. Jepara<br>Jawa
								Tengah 59426</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="border-t border-slate-800 mt-12 pt-8 text-center text-xs text-slate-600">
				&copy; {{ date('Y') }} Pemerintah Desa Senenan. All rights reserved. • Built with Laravel 10
			</div>
		</div>
	</footer>
	@stack('scripts')
	<script>
		// Dark Mode Toggle Logic
		var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
		var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

		// Change the icons inside the button based on previous settings
		if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
			themeToggleLightIcon.classList.remove('hidden');
		} else {
			themeToggleDarkIcon.classList.remove('hidden');
		}

		var themeToggleBtn = document.getElementById('theme-toggle');

		themeToggleBtn.addEventListener('click', function () {

			// toggle icons inside button
			themeToggleDarkIcon.classList.toggle('hidden');
			themeToggleLightIcon.classList.toggle('hidden');

			// if set via local storage previously
			if (localStorage.theme === 'dark') {
				document.documentElement.classList.remove('dark');
				localStorage.setItem('theme', 'light');
			} else {
				document.documentElement.classList.add('dark');
				localStorage.setItem('theme', 'dark');
			}
		});
	</script>

	<!-- Smooth Scroll with Offset -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Handle all anchor links
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', function (e) {
					const href = this.getAttribute('href');
					if (href === '#') return;

					e.preventDefault();
					const target = document.querySelector(href);
					if (target) {
						const offset = 100; // Offset from top in pixels
						const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;

						window.scrollTo({
							top: targetPosition,
							behavior: 'smooth'
						});
					}
				});
			});
		});
	</script>
</body>

</html>
```