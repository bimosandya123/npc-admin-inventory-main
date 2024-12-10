@extends('main')

@section('content')

<div class="min-h-screen flex flex-col">
    <div class="container mx-auto mt-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800">PT. NPC LABORATORIUM INDONESIA</h1>
            <p class="text-gray-600">Automation Drone Survey</p>
        </div>

        <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Data Transaksi</h2>
                    <a href="{{ url('transactions/create') }}" class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">Tambah Transaksi</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Nama User</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Nama Barang</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Jenis Transaksi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-center">Tanggal Transaksi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-center">Jumlah</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Status</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Transaction as $transaction)
                            <tr class="text-gray-700">
                                <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->user->name }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->item->name }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ ucfirst($transaction->transaction_type) }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $transaction->transaction_date->format('d/m/Y') }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $transaction->quantity }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ ucfirst($transaction->status) }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-center">
                                    <a href="{{ url('/transactions/edit/' . $Transaction->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded text-sm hover:bg-yellow-600">Edit</a>
                                    <a href="{{ url('/transactions/delete/' . $Transaction->id) }}" class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600 ml-2">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4">
                    {{ $Transaction->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
