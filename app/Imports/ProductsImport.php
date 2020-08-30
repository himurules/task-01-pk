<?php

namespace App\Imports;

use App\Products;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $rows All Rows
     *
     * @return \App\Models\Customers
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            \App\Models\Products::create(
                [
                    'name'    => addslashes($row['name']),
                    'price'    => addslashes($row['price']),
                ]
            );
        }
    }
}
