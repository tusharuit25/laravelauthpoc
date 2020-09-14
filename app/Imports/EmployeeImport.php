<?php

namespace App\Imports;
use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Employee([
            'member_id'     => $row[0],
            'first_name'    => $row[1],
            'last_name'     => $row[2],
            'relative_name'    => $row[3],
            'dob'     =>  $row[4],
            'id_type'    => $row[5],
            'id_number'     => $row[6],
            'id_image_link'    => $row[7],
            'member_photo_link'     => $row[8],
            'allotted_to_admin_user_id'    => (int) $row[9]
          
        ]);
    }
}
