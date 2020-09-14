<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\BulkExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
class ImportExportController extends Controller
{
    /**
    * 
    */
    public function importExportView()
    {
       return view('importexport');
    }
    public function import() 
    {
        Excel::import(new EmployeeImport,request()->file('file'));
           
        return back();
    }
    public function export($id) 
    {
        return Excel::download(new BulkExport($id), 'verification_record.xlsx');
    }
}