<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class ExportController extends Controller
{
    public function exportPDF()
    {
        $user = Auth::user()->id;
        $data = Log::where('user_id','like',$user)->orderBy('log_date', 'DESC')->get();
        // dd($data);
        $pdf = PDF::loadView('template.export',['data'=>$data]);
        return $pdf->download('YourLogBook.pdf');
        // return $pdf->stream();
    }

    public function exportXLSX(Request $request)
    {

    }
}
