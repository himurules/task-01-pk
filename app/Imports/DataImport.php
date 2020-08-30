<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class DataImport implements WithMultipleSheets
{
    /**
     * Handle sheets by one on one basis
     *
     * @return array
     */
    public function sheets(): array
    {
        return [
            0 => new CustomersImport(),
            1 => new SalesImport(),
            2 => new ProductsImport(),
            3 => new EmployeeImport()
        ];
    }
}
