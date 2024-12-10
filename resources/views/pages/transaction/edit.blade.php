@extends('main')

@section('content')

<div class="container mx-auto mt-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg">
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Edit Data Transaksi</h1>
            <form action="/transactions/update/{{ $Transaction->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label for="user_id" class="block text-sm font-medium text-gray-700">Nama User</label>
                    <select id="user_id" name="user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="" disabled>Pilih User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $Transaction->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="item_id" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                    <select id="item_id" name="item_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="" disabled>Pilih Barang</option>
                        @foreach ($Item as $item)
                            <option value="{{ $Item->id }}" {{ $item->id == $Transaction->item_id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="transaction_type" class="block text-sm font-medium text-gray-700">Jenis Transaksi</label>
                    <select id="transaction_type" name="transaction_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="borrowing" {{ $Transaction->transaction_type == 'borrowing' ? 'selected' : '' }}>Peminjaman</option>
                        <option value="return" {{ $Transaction->transaction_type == 'return' ? 'selected' : '' }}>Pengembalian</option>
                        <option value="purchase" {{ $Transaction->transaction_type == 'purchase' ? 'selected' : '' }}>Pembelian</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="transaction_date" class="block text-sm font-medium text-gray-700">Tanggal Transaksi</label>
                    <input type="date" id="transaction_date" name="transaction_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $Transaction->transaction_date }}">
                </div>

                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah</label>
                    <input type="number" id="quantity" name="quantity" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $Transaction->quantity }}" min="1">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status Transaksi</label>
                    <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="pending" {{ $Transaction->status == 'pending' ? 'selected' : '' }}>Menunggu</option>
                        <option value="completed" {{ $Transaction->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
