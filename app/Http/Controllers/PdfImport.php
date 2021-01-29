<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Gtesh001;
use PDF;

class PdfImport extends Controller
{
     // mostrar documento
    public function showUsers(Request $request)
    {
        $user = User::all();
        $gtesh001 = Gtesh001::find(1);
        return view('pdf/view_'.$request->id.'', compact('gtesh001'));
    }
    // crear pdf
    public function createPDF(Request $request)
    {
        $gtesh001 = Gtesh001::find(1);
        // datos de la db user
        $data = User::all();
        dd($gtesh001);
        // compartir la data a la vista
        view()->share('gtesh001',$gtesh001);
        $pdf = PDF::loadView('pdf/dd_'.$request->id.'', $gtesh001);
        // download PDF file with download method
        return $pdf->download('GT-ESH-'.$request->id.'.pdf');

        //---------------------------------------------------------------------------
        // $url = "https://garrido.vertrag.tech";

        // $pdf = PDF::loadView('pdf/document_002');
        // return $pdf->download('GT-ESH-'.$request->id.'.pdf');

        // $pdf = PDF::loadView('pdf/document_001', []);
        // $pdf->download('GT-ESH-001.pdf');
    }
}
