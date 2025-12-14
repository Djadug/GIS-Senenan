@extends('layouts.app')

@section('content')
	<!-- Peta Admin -->
	<section class="py-16 bg-slate-100 dark:bg-slate-900 transition-colors duration-300 min-h-screen">
		<div class="w-full md:w-3/4 mx-auto px-4">
			<!-- Edit Mode Toggle -->
			<div class="mb-4 flex justify-end">
				<button id="edit-mode-toggle" onclick="toggleEditMode()"
					class="px-6 py-2 bg-amber-600 hover:bg-amber-500 text-white font-bold rounded-lg shadow-lg transition flex items-center gap-2">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
					</svg>
					<span id="edit-mode-text">Mode Edit: OFF</span>
				</button>
			</div>

			<div
				class="relative w-full h-[600px] rounded-3xl overflow-hidden shadow-2xl border border-white/50 dark:border-slate-700 z-0 transition-colors">
				<div id="admin-map" class="w-full h-full z-0"></div>

				<!-- Detail Panel (Floating Left) -->
				<div id="detail-panel"
					class="absolute top-4 left-4 z-[400] w-72 max-w-[calc(100%-2rem)] glass bg-white/95 dark:bg-slate-800/95 backdrop-blur rounded-2xl shadow-xl overflow-hidden hidden transition-all duration-300 border border-slate-200 dark:border-slate-700">
					<div class="relative h-40 bg-slate-200">
						<img id="detail-image" src="" alt="Location Image" class="w-full h-full object-cover">
						<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
						<button onclick="closeDetail()"
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
					<div class="p-4">
						<p id="detail-description" class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
							Description goes here...
						</p>
						<!-- Admin Edit Button (shown only in edit mode) -->
						<button id="edit-location-btn" onclick="openEditForm()"
							class="hidden w-full py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold uppercase tracking-wider rounded-lg transition">
							Edit Lokasi
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
									class="text-center py-1.5 border border-slate-200 dark:border-slate-600 rounded text-slate-500 dark:text-slate-400 peer-checked:bg-blue-50 dark:peer-checked:bg-slate-700 peer-checked:text-blue-600 dark:peer-checked:text-blue-400 peer-checked:border-blue-200 dark:peer-checked:border-slate-500 transition text-[10px] font-bold">
									Jalan</div>
							</label>
							<label class="flex-1 cursor-pointer">
								<input type="radio" name="basemap" value="hybrid" onclick="switchBasemap('hybrid')"
									class="peer sr-only">
								<div
									class="text-center py-1.5 border border-slate-200 dark:border-slate-600 rounded text-slate-500 dark:text-slate-400 peer-checked:bg-blue-50 dark:peer-checked:bg-slate-700 peer-checked:text-blue-600 dark:peer-checked:text-blue-400 peer-checked:border-blue-200 dark:peer-checked:border-slate-500 transition text-[10px] font-bold">
									Satelit</div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Edit Form Modal -->
	<div id="edit-modal" class="fixed inset-0 z-[9999] hidden" aria-labelledby="edit-modal-title" role="dialog"
		aria-modal="true">
		<div class="fixed inset-0 bg-slate-900/75 backdrop-blur-sm transition-opacity" onclick="closeEditForm()"></div>
		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4">
				<div
					class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-800 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
					<div class="bg-white dark:bg-slate-800 px-6 py-4">
						<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Edit Lokasi</h3>
						<form id="edit-form" onsubmit="saveLocation(event)">
							<input type="hidden" id="edit-location-id">
							<div class="space-y-4">
								<div>
									<label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nama
										Lokasi</label>
									<input type="text" id="edit-name" required
										class="w-full px-3 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-slate-700 dark:text-white">
								</div>
								<div>
									<label
										class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Deskripsi</label>
									<textarea id="edit-description" rows="3"
										class="w-full px-3 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-slate-700 dark:text-white"></textarea>
								</div>
								<div>
									<label
										class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Kategori</label>
									<select id="edit-category" required
										class="w-full px-3 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-slate-700 dark:text-white">
										@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="flex gap-3 pt-4">
									<button type="submit"
										class="flex-1 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition">
										Simpan
									</button>
									<button type="button" onclick="deleteLocation()"
										class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-lg transition">
										Hapus
									</button>
									<button type="button" onclick="closeEditForm()"
										class="px-4 py-2 bg-slate-300 hover:bg-slate-400 text-slate-700 font-bold rounded-lg transition">
										Batal
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script>
		let editMode = false;
		let currentLocationId = null;
		let currentMarker = null;
		let markers = [];
		let geojsonData = null;

		// Initialize Map
		const map = L.map('admin-map', { zoomControl: false }).setView([-6.61028, 110.68917], 15);

		L.control.zoom({
			position: 'bottomright'
		}).addTo(map);

		// Base Layers (terrain/physical map with minimal labels)
		const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
		});

		const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
		});

		map.addLayer(googleStreets);

		let currentBasemap = googleStreets;

		function switchBasemap(type) {
			map.removeLayer(currentBasemap);
			if (type === 'hybrid') {
				currentBasemap = googleHybrid;
			} else {
				currentBasemap = googleStreets;
			}
			map.addLayer(currentBasemap);
		}

		// Fetch Data
		fetch('{{ route('api.locations') }}')
			.then(response => response.json())
			.then(data => {
				geojsonData = data;
				renderFeatures(data.features);
			})
			.catch(error => console.error('Error loading map data:', error));

		function renderFeatures(features) {
			// Clear existing markers
			markers.forEach(layer => map.removeLayer(layer));
			markers = [];

			features.forEach(feature => {
				const props = feature.properties;
				const coords = feature.geometry.coordinates;
				const lat = coords[1];
				const lng = coords[0];

				// Check if boundary polygon
				const catName = props.category ? props.category.toLowerCase() : '';
				const isBoundary = props.polygon && (catName.includes('batas') || catName.includes('wilayah'));

				if (isBoundary) {
					try {
						const latlngs = JSON.parse(props.polygon);
						const polygon = L.polygon(latlngs, {
							color: props.color || '#f43f5e',
							fillColor: props.color || '#f43f5e',
							fillOpacity: 0.2,
							weight: 2
						}).addTo(map);

						polygon.bindTooltip(props.name, {
							permanent: true,
							direction: 'center',
							className: 'bg-transparent border-0 font-bold text-slate-700 shadow-none'
						});

						polygon.on('click', () => showDetail(props, lat, lng));
						markers.push(polygon);
					} catch (e) {
						console.error('Invalid polygon data for ' + props.name);
					}
				}

				// Render marker
				if (!props.polygon || !isBoundary) {
					const marker = L.marker([lat, lng], {
						draggable: false
					})
						.addTo(map)
						.bindTooltip(props.name, {
							permanent: false,
							direction: 'top',
							offset: [0, -10]
						})
						.on('click', () => showDetail(props, lat, lng));

					marker.locationData = props;
					markers.push(marker);
				}
			});
		}

		function showDetail(props, lat, lng) {
			currentLocationId = props.id;
			currentMarker = markers.find(m => m.locationData && m.locationData.id === props.id);

			document.getElementById('detail-panel').classList.remove('hidden');
			document.getElementById('detail-title').innerText = props.name;
			document.getElementById('detail-description').innerText = props.description || 'Tidak ada deskripsi.';
			document.getElementById('detail-category').innerText = props.category;
			document.getElementById('detail-category').style.backgroundColor = props.color;

			const img = document.getElementById('detail-image');
			if (props.image && props.image !== 'null') {
				img.src = props.image.startsWith('http') ? props.image : '/storage/' + props.image;
			} else {
				img.src = 'https://via.placeholder.com/400x200?text=No+Image';
			}

			// Show edit button if in edit mode
			if (editMode) {
				document.getElementById('edit-location-btn').classList.remove('hidden');
			}

			map.flyTo([lat, lng], 17, {
				animate: true,
				duration: 1.5
			});
		}

		function closeDetail() {
			document.getElementById('detail-panel').classList.add('hidden');
		}

		function toggleEditMode() {
			editMode = !editMode;
			const btn = document.getElementById('edit-mode-toggle');
			const text = document.getElementById('edit-mode-text');

			if (editMode) {
				btn.classList.remove('bg-amber-600', 'hover:bg-amber-500');
				btn.classList.add('bg-green-600', 'hover:bg-green-500');
				text.innerText = 'Mode Edit: ON';

				// Make markers draggable
				markers.forEach(marker => {
					if (marker.setLatLng) { // Only for markers, not polygons
						marker.dragging.enable();
					}
				});
			} else {
				btn.classList.remove('bg-green-600', 'hover:bg-green-500');
				btn.classList.add('bg-amber-600', 'hover:bg-amber-500');
				text.innerText = 'Mode Edit: OFF';

				// Disable dragging
				markers.forEach(marker => {
					if (marker.setLatLng) {
						marker.dragging.disable();
					}
				});

				document.getElementById('edit-location-btn').classList.add('hidden');
			}
		}

		function openEditForm() {
			if (!currentLocationId) return;

			const marker = currentMarker;
			if (!marker || !marker.locationData) return;

			const data = marker.locationData;

			document.getElementById('edit-location-id').value = data.id;
			document.getElementById('edit-name').value = data.name;
			document.getElementById('edit-description').value = data.description || '';
			document.getElementById('edit-category').value = data.category_id;

			document.getElementById('edit-modal').classList.remove('hidden');
		}

		function closeEditForm() {
			document.getElementById('edit-modal').classList.add('hidden');
		}

		function saveLocation(event) {
			event.preventDefault();

			const id = document.getElementById('edit-location-id').value;
			const name = document.getElementById('edit-name').value;
			const description = document.getElementById('edit-description').value;
			const category_id = document.getElementById('edit-category').value;

			// Get current marker position
			const marker = currentMarker;
			const latlng = marker.getLatLng();

			fetch(`/admin/locations/${id}`, {
				method: 'PUT',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				body: JSON.stringify({
					name: name,
					description: description,
					category_id: category_id,
					latitude: latlng.lat,
					longitude: latlng.lng
				})
			})
				.then(response => response.json())
				.then(data => {
					alert('Lokasi berhasil diperbarui!');
					closeEditForm();
					closeDetail();
					// Reload data
					location.reload();
				})
				.catch(error => {
					console.error('Error:', error);
					alert('Gagal menyimpan perubahan!');
				});
		}

		function deleteLocation() {
			if (!confirm('Apakah Anda yakin ingin menghapus lokasi ini?')) return;

			const id = document.getElementById('edit-location-id').value;

			fetch(`/admin/locations/${id}`, {
				method: 'DELETE',
				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				}
			})
				.then(response => response.json())
				.then(data => {
					alert('Lokasi berhasil dihapus!');
					closeEditForm();
					closeDetail();
					location.reload();
				})
				.catch(error => {
					console.error('Error:', error);
					alert('Gagal menghapus lokasi!');
				});
		}

		// Category filter
		document.querySelectorAll('.category-toggle').forEach(cb => {
			cb.addEventListener('change', () => {
				const checkedCategories = Array.from(document.querySelectorAll('.category-toggle:checked'))
					.map(cb => parseInt(cb.dataset.categoryId));

				const filtered = geojsonData.features.filter(f =>
					checkedCategories.includes(f.properties.category_id)
				);

				renderFeatures(filtered);
			});
		});
	</script>
@endpush