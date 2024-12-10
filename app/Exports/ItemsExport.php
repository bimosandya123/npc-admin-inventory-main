<?php

namespace App\Exports;

use App\Models\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

// FromCollection, WithHeadingRow
class ItemsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return view('pages.item.index', [
            'items' => Item::all() // Mengambil semua data tanpa paginator
        ]);
    }
    public function headings(): array
    {
        return [
                'name',
                'description',
                'category_id',
                'year_purchased',
                'quantity',
                'quantity_type',
                'condition',
                'location', 
        ];
    }
    // use Exportable;

    // public function query()
    // {
    //     return view('pages.item.index', [
    //                 'items' => Item::all() // Mengambil semua data tanpa paginator
    //             ]);
    // }
    // public function collection()
    // {
    //     return Item::all();
    // }
    // public function headings(): array
    // {
    //     return [
    //         '#',
    //         'User',
    //         'Date',
    //     ];
    // } 
}
