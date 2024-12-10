@extends('main')

@section('content')
    <div class="min-h-screen flex flex-col">
        <div class="mt-8 bg-white shadow-md border border-gray-200 rounded-lg overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Data Kategori</h2>
                    <a href="{{ route('category.create') }}"
                        class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">Tambah</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Nama</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-left">Deskripsi</th>
                                <th class="py-2 px-4 border-b border-gray-200 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="text-gray-700">
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $category->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $category->description }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 text-center">
                                        <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded text-sm hover:bg-yellow-600">Edit</a>
                                        <button aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="delete-category-{{ $category->id }}"
                                            data-hs-overlay="#delete-category-{{ $category->id }}"
                                            class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600 ml-2">Hapus</button>
                                    </td>
                                </tr>
                                <div id="delete-category-{{ $category->id }}"
                                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                    role="dialog" tabindex="-1"
                                    aria-labelledby="delete-category-{{ $category->id }}-label">
                                    <div
                                        class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div
                                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                            <div
                                                class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                <h3 id="delete-category-{{ $category->id }}-label"
                                                    class="font-bold text-gray-800 dark:text-white">
                                                    Hapus Kategori
                                                </h3>
                                                <button type="button"
                                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                    aria-label="Close"
                                                    data-hs-overlay="#delete-category-{{ $category->id }}">
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
                                                    Yakin ingin menghapus kategori {{ $category->name }}?
                                                </p>
                                            </div>
                                            <div
                                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                    data-hs-overlay="#delete-category-{{ $category->id }}">
                                                    Batal
                                                </button>
                                                <form
                                                    action="{{ route('category.destroy', ['category' => $category->id]) }}"
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
                    {{ $categories->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection
