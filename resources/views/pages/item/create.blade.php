@extends('main')

@section('content')
    @if ($errors->any())
        <div class="container mx-auto mt-8">
            <div class="max-w-2xl mx-auto border px-4 py-2 border-neutral-200 bg-white shadow-md rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Tambah Data Barang</h1>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container mx-auto mt-8">
        <div class="max-w-2xl mx-auto border px-4 py-2 border-neutral-200 bg-white shadow-md rounded-lg">
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Tambah Data Barang</h1>
                <form action="{{ route('item.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <div class="mb-4">
                        <label for="item_name" class="block text-sm font-medium mb-2 dark:text-white">Nama</label>
                        <input type="text" id="item_name" name="name"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Nama Barang" aria-describedby="item_name">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="item_name_helper_text">Contoh:
                            Laptop, Meja</p>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between items-center">
                            <label for="item_description"
                                class="block text-sm font-medium mb-2 dark:text-white">Deskripsi</label>
                            <span class="block mb-2 text-sm text-gray-500 dark:text-neutral-500">Optional</span>
                        </div>
                        <textarea id="item_description" name="description"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="3" placeholder="Deskripsi Barang" aria-describedby="hs-textarea-helper-text"></textarea>
                        <p class="mt-2 text-xs text-gray-500 dark:text-neutral-500" id="item_description_helper_text">
                            Contoh: Warna hitam, ukuran 15 cm</p>
                    </div>
                    <div class="mb-4">
                        <label for="category_id" class="block text-sm font-medium mb-2 dark:text-white">Kategori</label>
                        <!-- Select -->
                        <select
                            data-hs-select='{
                            "hasSearch": true,
                            "searchPlaceholder": "Search...",
                            "searchClasses": "block w-full text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 py-2 px-3",
                            "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-neutral-900",
                            "placeholder": "Pilih Kategori...",
                            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-neutral-200 \" data-title></span></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                            "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                            "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-neutral-200 \" data-title></div></div></div>",
    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
    }'
                            class="hidden" name="category_id">
                            <option value="">Choose</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <!-- End Select -->
                    </div>

                    <div class="mb-4">
                        <label for="year_purchased" class="block text-sm font-medium mb-2 dark:text-white">Tahun
                            Pembelian</label>
                        <input type="text" id="year_purchased" name="year_purchased"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Tahun Pembelian" aria-describedby="year_purchased">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="year_purchased-helper-text">Contoh:
                            2024, 2020</p>
                    </div>

                    <div class="mb-4">
                        <label for="location_of_item" class="block text-sm font-medium mb-2 dark:text-white">Lokasi</label>
                        <input type="text" id="location_of_item" name="location"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Lokasi barang disimpan" aria-describedby="location_of_item-text">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="location_of_item-text">Contoh:
                            Lantai 1, Rak 2</p>
                    </div>
                    <!-- Input Number -->
                    <div class="mb-4 py-2 px-3 bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700"
                        data-hs-input-number="">
                        <div class="w-full flex justify-between items-center gap-x-5">
                            <div class="grow">
                                <span class="block text-xs text-gray-500 dark:text-neutral-400">
                                    Jumlah barang
                                </span>
                                <input name="quantity"
                                    class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white"
                                    style="-moz-appearance: textfield;" type="number" aria-roledescription="Number field"
                                    value="1" data-hs-input-number-input="">
                            </div>
                            <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button"
                                    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Input Number -->
                    <div class="mb-4">
                        <label for="quantity_type" class="block text-sm font-medium mb-2 dark:text-white">Satuan</label>
                        <input type="text" id="quantity_type" name="quantity_type"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Satuan jumlah" aria-describedby="quantity_type-helper-text">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="quantity_type-helper-text">Contoh:
                            pcs, unit, set, pack</p>
                    </div>
                    <div class="mb-4">
                        <label for="condition" class="block text-sm font-medium mb-2 dark:text-white">Kondisi</label>
                        <input type="text" id="condition" name="condition"
                            class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Kondisi barang" aria-describedby="condition-helper-text">
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500" id="condition-helper-text">Contoh:
                            rusak 3, baik, bekas</p>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
