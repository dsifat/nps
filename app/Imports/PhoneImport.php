<?php

namespace App\Imports;

use App\Models\Backend\Phone;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PhoneImport implements ToCollection, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function __construct($temp)
    {
        $this->group_id = $temp;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Phone::create([
                'number' => $row['number'],
                'phone_groups_id' => $this->group_id
            ]);
        }
    }
    public function rules(): array
    {
        return [
            'number' => Rule::unique('phones')->where('phone_groups_id',$this->group_id)
        ];
    }

    public function customValidationMessages()
    {
        return [
            'number.unique' => 'Same number has been found in records',
        ];
    }
}
