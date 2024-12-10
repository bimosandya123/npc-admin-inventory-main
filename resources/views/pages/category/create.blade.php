@extends('main')

@section('content')
    <div class="container mx-auto mt-8">
        <div
            class="max-w-xl mx-auto bg-white border border-gray-200 dark:bg-neutral-700 dark:border-neutral-600 shadow-md rounded-lg">
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6 dark:text-white">Buat Kategori Baru</h1>
                <form action="{{ route('category.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <div class="">
                        <label for="input-label-with-helper-text"
                            class="block text-sm font-medium mb-2 dark:text-white">Nama</label>
                        <input type="text" id="input-label-with-helper-text" name="name"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Nama Kategori" aria-describedby="hs-input-helper-text">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="hs-input-helper-text">Contoh:
                            Elektronik</p>
                    </div>
                    <div class="mt-6">
                        <div class="flex justify-between items-center">
                            <label for="with-corner-hint"
                                class="block text-sm font-medium mb-2 dark:text-white">Deskripsi</label>
                            <span class="block mb-2 text-sm text-gray-500 dark:text-neutral-500">Optional</span>
                        </div>
                        <input type="text" id="with-corner-hint" name="description"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Deskripsi kategori">
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            Buat
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
