@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Your Tarot Readings</h2>

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    @forelse ($readings as $reading)
    <div class="bg-white shadow p-4 rounded-lg mb-4">
        <h3 class="font-semibold text-lg">{{ $reading->question }}</h3>
        <p class="text-gray-600 mt-2">{{ $reading->details }}</p>
        <p class="mt-3 text-sm text-gray-500">Status: <span class="font-medium">{{ ucfirst($reading->status) }}</span>
        </p>

        @if ($reading->response)
        <div class="mt-3 bg-indigo-50 p-3 rounded">
            <strong>Reader’s Response:</strong>
            <p class="text-gray-700 mt-1">{{ $reading->response }}</p>
        </div>
        @endif
    </div>
    @empty
    <p>No readings yet. <a href="{{ route('readings.create') }}" class="text-indigo-600 underline">Request one now.</a>
    </p>
    @endforelse
</div>
@endsection