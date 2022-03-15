<?php

namespace App\Imports;

use App\Models\User;
use Barryvdh\Reflection\DocBlock\Type\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Str;

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
