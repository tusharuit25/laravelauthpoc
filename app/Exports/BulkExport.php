<?php

namespace App\Exports;
use App\employee_verification;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BulkExport implements FromQuery,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */  
    public $id;
    
    public function __construct($id) {
        $this->id = $id;
    }

    public function headings(): array
    {
        return [
            'Id',
            'Is Member Id Verified',
            'Is First Name Verified',
            'Is Last Name Verified',
            'Is Relative Name Verified',
            'Is Dob Verified',
            'Is Id type Verified',
            'Is Id number Verified',
            'Is Id image link Verified',
            'Is Member photo link Verified',
            'Record Id ',
            'Verified By',
            'CreatedAt',
            'UpdatedAt',
        ];
    }
    public function query()
    {

        // wants export custom collection
        return employee_verification::query()->whereRaw('employee_record_id ='. $this->id );
        /***you can use condition in query to get required result return Bulk::query()->whereRaw('id > 5');*/
    }
    public function map($bulk): array
    {
        return [
            $bulk->id
           // Date::dateTimeToExcel($bulk->created_at),
           // Date::dateTimeToExcel($bulk->updated_at),
        ];
    }
  
}
