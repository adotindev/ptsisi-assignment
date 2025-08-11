@extends('components.layouts.app')

@section('title', 'Create Menu')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Menu</h1>

    <form action="{{ route('menu.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold">No. HP</label>
            <input type="text" name='nohp' class="border px-2 py-1 w-full" required>
        </div>

        <div>
            <label class="block font-semibold">WA</label>
            <input type="text" name="wa" class="border px-2 py-1 w-full" required>
        </div>

        <div>
            <label class="block font-semibold">PIN</label>
            <input type="number" name="pin" class="border px-2 py-1 w-full">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
            Save Menu
        </button>
    </form>
@endsection
