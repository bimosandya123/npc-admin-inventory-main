@extends('main')

@section('content')

<div class="container mx-auto mt-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg">
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Detail Data Kategori</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="font-medium text-gray-700">Nama:</div>
                <div class="text-gray-800">{{ $Category->name }}</div>

                <div class="font-medium text-gray-700">Deskripsi:</div>
                <div class="text-gray-800">{{ $Category->descriptions }}</div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="{{ url('/edit/' . $data->id) }}" class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-200 focus:ring-opacity-50">
                    Edit
                </a>
                <a href="{{ url('/') }}" class="px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

@endsection