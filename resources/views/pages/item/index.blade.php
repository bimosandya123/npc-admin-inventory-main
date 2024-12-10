@extends('main')

@section('content')
    <div class="min-h-screen flex flex-col">

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Data Barang</h2>
                    <div class="tombol flex items-center justify-between w-4/6">
                        <form action="{{ route('item.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="relative">
                                    <input class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="import_file">
                                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-80">Import</button>
                                </div>
                            </form>
                        <form action="{{ route('item.export') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-6000">Download Data</button>
                            </form>
                        <a href="{{ route('item.create') }}"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">Tambah
                            Barang</a>
                    </div>
                </div>


                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Nama Barang</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Deskripsi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Kategori</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Tahun Beli</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Jumlah</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Satuan</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Kondisi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Lokasi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr class="text-gray-700">
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->description }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->category->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->year_purchased }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->quantity }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->quantity_type }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->condition }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $item->location }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-center">
                                        <a href="{{ route('item.edit', ['item' => $item->id]) }}"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded text-sm hover:bg-yellow-600">Edit</a>
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="delete-item-{{ $item->id }}"
                                            data-hs-overlay="#delete-item-{{ $item->id }}"
                                            class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600 ml-2">Hapus</button>
                                    </td>
                                </tr>
                                <div id="delete-item-{{ $item->id }}"
                                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1" aria-labelledby="delete-item-{{ $item->id }}-label">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div
                                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                            <div
                                                class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                <h3 id="delete-item-{{ $item->id }}-label"
                                                    class="font-bold text-gray-800 dark:text-white">
                                                    Hapus Barang
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                    aria-label="Close" data-hs-overlay="#delete-item-{{ $item->id }}">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M18 6 6 18"></path>
                                                        <path d="m6 6 12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <p class="mt-1 text-gray-800 dark:text-neutral-400">
                                                    Yakin ingin menghapus kategori {{ $item->name }}?
                                                </p>
                                            </div>
                                            <div
                                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    data-hs-overlay="#delete-item-{{ $item->id }}">
                                                    Batal
                                                </button>
                                                <form action="{{ route('item.destroy', ['item' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $items->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection
