<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $users = User::all();

        $pdf = PDF::loadView('myPDF', compact('users'));
    
        return $pdf->download('InformeStock.pdf');
    }
}
