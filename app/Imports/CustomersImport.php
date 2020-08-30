<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomersImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $rows All Rows
     *
     * @return \App\Models\Customers
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $customer = \App\Models\Customers::create(
                [
                    'first_name'    => addslashes($row['first_name']),
                    'last_name'    => addslashes($row['last_name']),
                    'full_name' =>  addslashes($row['full_name']),
                    'email'    => addslashes($row['email']),
                    'gender'    => addslashes($row['gender']),
                    'street' =>  addslashes($row['street']),
                    'city' => addslashes($row['city']),
                ]
            );
        }
    }
}
