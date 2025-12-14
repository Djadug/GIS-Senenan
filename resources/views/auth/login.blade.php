@extends('layouts.app')

@section('content')
	<div class="min-h-screen flex items-center justify-center bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
		<div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
			<div class="text-center">
				<h2 class="mt-6 text-3xl font-extrabold text-slate-900">
					Login Admin
				</h2>
				<p class="mt-2 text-sm text-slate-600">
					Masuk untuk mengelola data desa
				</p>
			</div>
			<form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
				@csrf
				<div class="rounded-md shadow-sm -space-y-px">
					<div>
						<label for="email-address" class="sr-only">Email address</label>
						<input id="email-address" name="email" type="email" autocomplete="email" required
							class="appearance-none rounded-none relative block w-full px-3 py-2 border border-slate-300 placeholder-slate-500 text-slate-900 rounded-t-md focus:outline-none focus:ring-amber-500 focus:border-amber-500 focus:z-10 sm:text-sm"
							placeholder="Email Address">
					</div>
					<div>
						<label for="password" class="sr-only">Password</label>
						<input id="password" name="password" type="password" autocomplete="current-password" required
							class="appearance-none rounded-none relative block w-full px-3 py-2 border border-slate-300 placeholder-slate-500 text-slate-900 rounded-b-md focus:outline-none focus:ring-amber-500 focus:border-amber-500 focus:z-10 sm:text-sm"
							placeholder="Password">
					</div>
				</div>

				@if ($errors->any())
					<div class="text-red-500 text-sm text-center">
						{{ $errors->first() }}
					</div>
				@endif

				<div>
					<button type="submit"
						class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500 transition">
						Sign in
					</button>
				</div>


			</form>
		</div>
	</div>
@endsection