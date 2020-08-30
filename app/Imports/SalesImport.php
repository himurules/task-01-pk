<?php

namespace App\Imports;

use App\Sales;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $rows All Rows
     *
     * @return \App\Models\Customers
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            //dd($row);
            \App\Models\Sales::create(
                [
                    'invoice_id'    => addslashes($row['invoiceid']),
                    'product_name'    => addslashes($row['product_name']),
                    'date' =>  date('Y-m-d', strtotime($row['date'])),
                    'sales_person'    => addslashes($row['sales_person']),
                    'customer_name'    => addslashes($row['customer_name']),
                ]
            );
        }
    }
}
