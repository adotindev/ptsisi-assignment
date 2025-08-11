@extends('components.layouts.app')

@section('title', 'Menu List')

@section('content')
<h1 class="text-2xl font-bold mb-4">Menus</h1>

<a href="{{ route('menu.createpage') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Create Menu</a>

<ul class="mt-4">
    @foreach($menu as $menu)
    <li>{{ $menu->name }} - {{ $menu->url }}</li>
    @endforeach
</ul>
@endsection
