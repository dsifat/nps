<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithStartRow, WithHeadingRow
{
    public function startRow(): int
    {
        return 2;
    }

    /**
     * @param array $row
     *
     * @return array|null
     */

    public function collection(\Illuminate\Support\Collection $rows)
    {
        \Validator::make($rows->toArray(), [
            '*.name' => 'required',
            '*.email' => 'required',
        ])->validate();
    }
}
