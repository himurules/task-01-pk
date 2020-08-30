<?php

namespace App\Imports;

use App\Employee;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $rows All Rows
     *
     * @return \App\Models\Customers
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            \App\Models\Employee::create(
                [
                    'name'    => addslashes($row['name']),
                ]
            );
        }
    }
}
