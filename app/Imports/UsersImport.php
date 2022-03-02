<?php

namespace App\Imports;

use App\Models\User;
use Barryvdh\Reflection\DocBlock\Type\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Str;

class UsersImport implements ToModel, WithStartRow
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
    public function model(array $row)
    {
//        return [
//            'name'     => $row[0],
//            'email'    => $row[1],
//            'password' => (Str::random(8)),
//        ];
    }

    public function collection(Collection $rows)
    {
    }
}
