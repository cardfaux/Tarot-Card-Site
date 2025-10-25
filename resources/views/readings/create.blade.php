@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md p-6 rounded-lg">
    <h2 class="text-2xl font-bold mb-4">Request a Tarot Reading</h2>

    <form action="{{ route('readings.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Your Question</label>
            <input type="text" name="question" class="mt-1 block w-full border-gray-300 rounded-md" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Additional Details (optional)</label>
            <textarea name="details" rows="4" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
        </div>
        <button type="submit" class="bg-indigo-700 text-white px-4 py-2 rounded hover:bg-indigo-600">Submit</button>
    </form>
</div>
@endsection