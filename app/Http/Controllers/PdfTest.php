<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class PdfTest extends Controller
{
    // // mostrar documento
    // public function showUsers()
    // {
    //     $usuarios = User::all();
    //     return view('pdf/view_001', compact('user'));
    // }
    // // crear pdf
    // public function createPDF()
    // {
    //     // datos de la db user
    //     $data = User::all();
    //     // compartir la data a la vista
    //     view()->share('user',$data);
    //     $pdf = PDF::loadView('pdf/dd_001', $data);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    // }
}
