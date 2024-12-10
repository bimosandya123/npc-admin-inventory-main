@extends('main')

@section('content')

<div class="container mx-auto mt-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg">
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Detail Data Barang</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="font-medium text-gray-700">Nama Barang:</div>
                <div class="text-gray-800">{{ $item->name }}</div>

                <div class="font-medium text-gray-700">Deskripsi:</div>
                <div class="text-gray-800">{{ $item->description }}</div>

                <div class="font-medium text-gray-700">Kategori:</div>
                <div class="text-gray-800">{{ $item->category->name }}</div>

                <div class="font-medium text-gray-700">Jumlah:</div>
                <div class="text-gray-800">{{ $item->quantity }}</div>

                <div class="font-medium text-gray-700">Lokasi:</div>
                <div class="text-gray-800">{{ $item->location }}</div>
                
                <div class="font-medium text-gray-700">Tanggal Dibuat:</div>
                <div class="text-gray-800">{{ $item->created_at->format('d/m/Y') }}</div>
            </div>
            <div class="mt-6 flex justify-between">
                <a href="{{ url('/items/edit/' . $item->id) }}" class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-200 focus:ring-opacity-50">
                    Edit
                </a>
                <a href="{{ url('/items') }}" class="px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
