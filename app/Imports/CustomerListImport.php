<?php

namespace App\Imports;

use App\Models\CustomerList;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CustomerListImport implements WithStartRow, WithHeadingRow
{
    public function startRow(): int
    {
        return 2;
    }
}
