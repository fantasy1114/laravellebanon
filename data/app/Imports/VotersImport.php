<?php
  
namespace App\Imports;
  
use App\Models\Voter;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class VotersImport implements ToModel, WithValidation
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = Voter::create([
            'name' => $row[1],
            'wifehusname' => $row[2], 
            'father' => $row[3],
            'mother' => $row[4],
            'housenum' => $row[5],
            'age' => $row[6],
            'gender' => $row[7],
            'sectionname' => $row[8],
            'village' => $row[9],
            'filename' => $row[10],
            'status' => $row[11],
            'phone' => $row[12],
            'buddyemail' => $row[13],
            'buddycontact' => $row[14],
        ]);
    }

    public function rules(): array
    {
        return [
            '13' => 'unique:voters,buddyemail',
        ];
    }
}