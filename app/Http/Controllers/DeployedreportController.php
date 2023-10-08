<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeployedreportController extends Controller
{
    public function pdf($name,$date){
        $icsNum;
        $deployed_data = DB::table('backup_prepares')
            ->where('created_at','like', '%'.$date.'%')
            ->where('receiver', '=', $name)
            ->where('item_type','!=', 'consumable')
            ->get();
        foreach ($deployed_data as $data){
            $icsNum = $data->ics;
        }
        $pdf = PDF::loadView('form.deployed', compact('deployed_data','date','icsNum'))
            ->setPaper('legal','portrait');
        return $pdf->stream('load.pdf');
    }
}
