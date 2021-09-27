<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\VotersExport;
use App\Imports\VotersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Logs;
  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export(Request $request, $name) 
    {   
        // var_dump($name);
        $Logs = new Logs;
        $Logs->username = $name;
        $Logs->tablename = 'Reporting';
        $Logs->crudevent = 'export';
        $Logs->description = 'Voters.xlsx';
        $Logs->save();
        
        return Excel::download(new VotersExport, 'Voters.xlsx');
        
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        $validator = $request->validate([
            'file' => 'required|mimes:xlsx|max:10000'
        ]);

        Excel::import(new VotersImport, request()->file('file'));
        $Logs = new Logs;
        $Logs->username = request('usernamesave');
        $Logs->tablename = 'Reporting';
        $Logs->crudevent = 'import';
        $Logs->description = request()->file('file');
        $Logs->save();
        return back();
    }
}