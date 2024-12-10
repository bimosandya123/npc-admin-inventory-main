@extends('main')

@section('title', 'Dashboard')
@section('content')
    <!-- Card Section -->
    <div class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 lg:py-6">
        <!-- Grid -->
        <div class="grid grid-cols-2 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col  bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Total karyawan
                        </p>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                2
                            </h3>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                </div>

                <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    Lihat selengkapnya
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col  bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex justify-between gap-x-3">
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Total barang
                        </p>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="mt-1 text-xl font-medium text-gray-800 dark:text-neutral-200">
                                2000
                            </h3>
                        </div>
                    </div>
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M5 22h14" />
                            <path d="M5 2h14" />
                            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                        </svg>
                    </div>
                </div>

                <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    Lihat selengkapnya
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

    <!-- Table Section -->
    <div class="max-w-[75rem] mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b bg-blue-600 dark:bg-blue-900 border-gray-200 dark:border-neutral-700">
                            <span class="uppercase font-semibold text-white">Transaksi Terbaru</span>
                        </div>
                        <!-- End Header -->
                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <th scope="col" class="p-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                No
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="pe-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                ID Transaksi
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Tanggal
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Nama Barang
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Peminjam/Pembeli
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Jumlah
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Jenis Transaksi
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Status
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-2">
                                            <a class="text-sm text-gray-600 dark:text-neutral-400" href="#">1</a>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="pe-6 py-2">
                                            <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500"
                                                href="#">#35463</a>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-600 dark:text-neutral-400">Aug 17, 2020,
                                                5:48 (ET)</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-600 dark:text-neutral-400">Laptop</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-600 dark:text-neutral-400">Jase
                                                Marley</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-600 dark:text-neutral-400">12</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-sm text-gray-600 dark:text-neutral-400">Peminjaman</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                Selesai
                                            </span>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <!-- End Table -->
                        <!-- Footer -->

                        <a class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl dark:border-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="#">
                            Lihat selengkapnya
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
    <?php
    use Akaunting\Apexcharts\Chart;

    // ...

    $category_chart = (new Chart())
        ->setType('bar')
        ->setTitle('Jumlah Barang Berdasarkan Kategori')
        ->setSubtitle('')
        ->setWidth('100%')
        ->setHeight(350)
        ->setLabels(['Elektronik', 'Furnitur', 'Drone'])
        ->setDataset('Barang berdasarkan kategori', 'bar', [1907, 1923, 2000])
        ->setOptions([
            'dataLabels' => [
                'enabled' => true,
                'style' => [
                    'colors' => ['#fff'],
                ],
            ],
        ]);
    ?>

    <div
        class="max-w-96 bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        {!! $category_chart->container() !!}
    </div>

    {!! $category_chart->script() !!}

@endsection
