@extends('layouts.app')

@section('content')
	<div class="min-h-screen bg-slate-50 flex" x-data="adminData()">

		<!-- Sidebar -->
		<aside class="w-64 bg-slate-900 text-white hidden md:block">
			<div class="p-6">
				<h2 class="text-xl font-bold tracking-tight">GIS Admin</h2>
				<p class="text-slate-400 text-xs">Desa Senenan</p>
			</div>
			<nav class="mt-6 px-4 space-y-2">
				<a href="{{ route('admin.dashboard') }}"
					class="block px-4 py-2 bg-blue-600 rounded-lg text-sm font-medium">Dashboard</a>
				<a href="{{ route('map.index') }}" target="_blank"
					class="block px-4 py-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg text-sm transition">Lihat
					Peta Publik</a>
			</nav>
		</aside>

		<!-- Main Content -->
		<main class="flex-1 p-8 overflow-y-auto">
			<header class="flex justify-between items-center mb-8">
				<div>
					<h1 class="text-2xl font-bold text-slate-800">Manajemen Lokasi</h1>
					<p class="text-slate-500 text-sm">Klik 'Edit' untuk ubah posisi titik atau batas wilayah di peta.</p>
				</div>
				<div class="flex gap-3">
					<a href="{{ route('map.index') }}"
						class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-4 py-2 rounded-lg text-sm font-medium shadow-sm transition flex items-center gap-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M10 19l-7-7m0 0l7-7m-7 7h18" />
						</svg>
						Kembali ke Peta
					</a>
					<button @click="openModal()"
						class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm transition flex items-center gap-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						</svg>
						Tambah Lokasi
					</button>
				</div>
			</header>

			@if(session('success'))
				<div class="mb-4 p-4 bg-green-50 text-green-700 rounded-lg border border-green-200">
					{{ session('success') }}
				</div>
			@endif

			@if($errors->any())
				<div class="mb-4 p-4 bg-red-50 text-red-700 rounded-lg border border-red-200">
					<ul class="list-disc list-inside">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
				</div>
			@endif

			<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
				<table class="w-full text-left text-sm text-slate-600">
					<thead class="bg-slate-50 text-xs uppercase font-semibold text-slate-500">
						<tr>
							<th class="px-6 py-4">Nama Lokasi</th>
							<th class="px-6 py-4">Kategori</th>
							<th class="px-6 py-4">Koordinat / Tipe</th>
							<th class="px-6 py-4 text-right">Aksi</th>
						</tr>
					</thead>
					<tbody class="divide-y divide-slate-100">
						@forelse($locations as $location)
							<tr class="hover:bg-slate-50 transition">
								<td class="px-6 py-4 font-medium text-slate-900">{{ $location->name }}</td>
								<td class="px-6 py-4">
									<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
										style="background-color: {{ $location->category->color }}20; color: {{ $location->category->color }}">
										{{ $location->category->name }}
									</span>
								</td>
								<td class="px-6 py-4 font-mono text-xs">
									@if($location->polygon)
										<span class="text-blue-600 font-bold">AREA POLYGON</span>
									@else
										{{ number_format($location->latitude, 5) }}, {{ number_format($location->longitude, 5) }}
									@endif
								</td>
								<td class="px-6 py-4 text-right space-x-2">
									<button @click="openModal({{ $location }})"
										class="text-blue-600 hover:text-blue-800 font-medium">Edit Peta</button>
									<form action="{{ route('admin.locations.destroy', $location->id) }}" method="POST"
										class="inline" onsubmit="return confirm('Hapus lokasi ini?')">
										@csrf @method('DELETE')
										<button type="submit" class="text-red-500 hover:text-red-700 font-medium">Hapus</button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="4" class="px-6 py-12 text-center text-slate-400">Belum ada data lokasi.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</main>

		<!-- Modal with Map -->
		<div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm"
			style="display: none;">
			<div @click.outside="showModal = false"
				class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] flex flex-col overflow-hidden">

				<div class="p-4 border-b border-slate-200 flex justify-between items-center">
					<h3 class="text-lg font-bold text-slate-900"
						x-text="editMode ? 'Edit Lokasi & Peta' : 'Tambah Lokasi Baru'"></h3>
					<button @click="showModal = false" class="text-slate-400 hover:text-slate-600"><svg class="w-6 h-6"
							fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
							</path>
						</svg></button>
				</div>

				<div class="flex-1 flex flex-col md:flex-row overflow-hidden">
					<!-- Map Area -->
					<div class="w-full md:w-2/3 h-64 md:h-auto bg-slate-100 relative">
						<div id="admin-map" class="w-full h-full"></div>
						<div class="absolute top-4 right-4 z-[9999] bg-white p-2 rounded shadow text-xs">
							<p class="font-bold mb-1">Panduan:</p>
							<ul class="list-disc list-inside text-slate-600">
								<li>Klik peta untuk set titik marker.</li>
								<li>Tarik marker untuk ubah posisi.</li>
								<li>Untuk Polygon: Klik peta berulang kali untuk buat titik sudut.</li>
							</ul>
							<button @click="clearPolygon"
								class="mt-2 w-full bg-red-100 text-red-600 px-2 py-1 rounded hover:bg-red-200">Reset
								Polygon</button>
						</div>
					</div>

					<!-- Form Area -->
					<div class="w-full md:w-1/3 p-6 overflow-y-auto bg-slate-50 border-l border-slate-200">
						<form :action="editMode ? '/admin/locations/' + form.id : '/admin/locations'" method="POST"
							id="locationForm" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="_method" :value="editMode ? 'PUT' : 'POST'">
							<!-- Hidden Inputs populated by Map -->
							<input type="hidden" name="latitude" x-model="form.latitude">
							<input type="hidden" name="longitude" x-model="form.longitude">
							<input type="hidden" name="polygon" x-model="form.polygon">

							<div class="space-y-4">
								<div>
									<label class="block text-sm font-medium text-slate-700 mb-1">Nama Lokasi</label>
									<input type="text" name="name" x-model="form.name"
										class="w-full rounded-lg border-slate-300" required>
								</div>

								<div>
									<label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
									<select name="category_id" x-model="form.category_id"
										class="w-full rounded-lg border-slate-300" required>
										<option value="">Pilih Kategori</option>
										@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
								</div>

								<div>
									<label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi & Alamat</label>
									<textarea name="description" x-model="form.description" rows="4"
										class="w-full rounded-lg border-slate-300"></textarea>
								</div>

								<div>
									<label class="block text-sm font-medium text-slate-700 mb-1">Gambar (Opsional)</label>
									<input type="file" name="image" class="w-full text-sm text-slate-500
											file:mr-4 file:py-2 file:px-4
											file:rounded-full file:border-0
											file:text-sm file:font-semibold
											file:bg-blue-50 file:text-blue-700
											hover:file:bg-blue-100
										" />
									<div x-show="form.image && typeof form.image === 'string'" class="mt-2">
										<p class="text-xs text-slate-500 mb-1">Gambar saat ini:</p>
										<img :src="form.image.startsWith('http') ? form.image : '/storage/' + form.image"
											class="h-20 w-auto rounded border">
									</div>
								</div>

								<hr class="border-slate-200">

								<div class="text-xs text-slate-500">
									<p class="font-semibold mb-1">Data Spasial (Otomatis)</p>
									<p>Lat: <span x-text="form.latitude || '-'"></span></p>
									<p>Lng: <span x-text="form.longitude || '-'"></span></p>
									<p x-show="form.polygon" class="text-blue-600 mt-1">✓ Data Polygon Terisi</p>
								</div>
							</div>

							<div class="mt-6 flex justify-end gap-3">
								<button type="submit"
									class="w-full px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-bold shadow-lg shadow-blue-600/20">Simpan
									Perubahan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Leaflet Draw -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

	<script>
		document.addEventListener('alpine:init', () => {
			Alpine.data('adminData', () => ({
				showModal: false,
				editMode: false,
				map: null,
				marker: null,
				drawnItems: null, // FeatureGroup for drawn polygons
				form: { id: null, name: '', description: '', latitude: '-6.61028', longitude: '110.68917', category_id: '', polygon: '' },

				init() {
					this.$watch('showModal', value => {
						if (value) {
							this.$nextTick(() => {
								if (!this.map) this.initMap();
								this.map.invalidateSize();
								setTimeout(() => {
									this.updateMapState();
								}, 200);
							});
						}
					});
				},

				initMap() {
					this.map = L.map('admin-map').setView([-6.61028, 110.68917], 15);

					const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
						maxZoom: 20,
						subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
					});

					const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
						maxZoom: 20,
						subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
					});

					this.map.addLayer(googleStreets);

					L.control.layers({
						"Peta Jalan": googleStreets,
						"Satelit": googleHybrid
					}).addTo(this.map);

					this.drawnItems = new L.FeatureGroup();
					this.map.addLayer(this.drawnItems);

					const drawControl = new L.Control.Draw({
						draw: {
							polygon: {
								allowIntersection: false,
								showArea: true,
								shapeOptions: { color: '#f43f5e' }
							},
							marker: true,
							polyline: false,
							circle: false,
							circlemarker: false,
							rectangle: false
						},
						edit: {
							featureGroup: this.drawnItems,
							remove: true
						}
					});
					this.map.addControl(drawControl);

					// Handle Created (Draw Tool)
					this.map.on(L.Draw.Event.CREATED, (e) => {
						const type = e.layerType;
						const layer = e.layer;

						if (type === 'marker') {
							this.setMarker(layer.getLatLng());
						} else if (type === 'polygon') {
							this.drawnItems.clearLayers();
							this.drawnItems.addLayer(layer);
							this.updatePolygonInput(layer);
						}
					});

					this.map.on(L.Draw.Event.EDITED, (e) => {
						e.layers.eachLayer((layer) => {
							this.updatePolygonInput(layer);
						});
					});

					this.map.on(L.Draw.Event.DELETED, (e) => {
						this.form.polygon = '';
					});

					// Handle Click on Map (Quick Move)
					this.map.on('click', (e) => {
						this.setMarker(e.latlng);
					});
				},

				setMarker(latlng) {
					// Remove old
					if (this.marker) this.map.removeLayer(this.marker);

					// Create new draggable marker
					this.marker = L.marker(latlng, { draggable: true }).addTo(this.map);

					// Update Form
					this.form.latitude = latlng.lat.toFixed(6);
					this.form.longitude = latlng.lng.toFixed(6);

					// Listen for drag
					this.marker.on('dragend', (event) => {
						const pos = event.target.getLatLng();
						this.form.latitude = pos.lat.toFixed(6);
						this.form.longitude = pos.lng.toFixed(6);
					});
				},

				updatePolygonInput(layer) {
					const latlngs = layer.getLatLngs()[0];
					const simplePoints = latlngs.map(p => [p.lat, p.lng]);
					this.form.polygon = JSON.stringify(simplePoints);
				},

				updateMapState() {
					// Clear map
					if (this.marker) this.map.removeLayer(this.marker);
					this.drawnItems.clearLayers();

					// Polygon
					if (this.form.polygon && this.form.polygon.length > 5 && this.form.polygon !== 'null') {
						try {
							const points = JSON.parse(this.form.polygon);
							const polygon = L.polygon(points, { color: '#f43f5e' });
							this.drawnItems.addLayer(polygon);
							this.map.fitBounds(polygon.getBounds());
						} catch (e) { }
					}

					// Marker
					if (this.form.latitude && this.form.longitude) {
						const latlng = [parseFloat(this.form.latitude), parseFloat(this.form.longitude)];
						this.setMarker(L.latLng(latlng[0], latlng[1]));
						this.map.setView(latlng, 15);
					}
				},

				clearPolygon() {
					this.drawnItems.clearLayers();
					this.form.polygon = '';
				},

				openModal(location = null) {
					this.showModal = true;
					if (location) {
						this.editMode = true;
						this.form = { ...location };
						if (this.form.polygon === 'null') this.form.polygon = '';
					} else {
						this.editMode = false;
						this.form = { id: null, name: '', description: '', latitude: '-6.61028', longitude: '110.68917', category_id: '', polygon: '' };
					}
				}
			}));
		});
	</script>

@endsection