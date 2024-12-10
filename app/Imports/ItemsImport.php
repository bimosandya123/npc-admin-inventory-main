<?php

namespace App\Imports;
use App\Models\Item;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ItemsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $Item = Items::where('name', $row['name'])->first();
            if($Item){
                Item->update([
                    'description' => $row['description'],
                    'category_id' => $row['category_id'],
                    'year_purchased' => $row['year_purchased'],
                    'quantity' => $row['quantity'],
                    'quantity_type' => $row['quantity_type'],
                    'condition' => $row['condition'],
                    'location' => $row['location'],
                ]);
            }else{
                Item::create([
                    'name' => $row['name'],
                    'description' => $row['description'],
                    'category_id' => $row['category_id'],
                    'year_purchased' => $row['year_purchased'],
                    'quantity' => $row['quantity'],
                    'quantity_type' => $row['quantity_type'],
                    'condition' => $row['condition'],
                    'location' => $row['location'],
                ]);
            }
        }
    }
}
