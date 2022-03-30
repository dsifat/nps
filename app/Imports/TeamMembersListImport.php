<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeamMembersListImport implements WithStartRow, WithHeadingRow
{
    public function startRow(): int
    {
        return 2;
    }
}
