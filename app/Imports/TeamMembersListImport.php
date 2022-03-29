<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;


class TeamMembersListImport implements WithStartRow, WithHeadingRow
{
    public function startRow(): int
    {
        return 2;
    }
}
