<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\MedicalHistory;

class MedicalHistoryController extends Controller
{
    public function exportPdf(Request $request)
    {
        $data = $request->all();
        dd($data);

        //return back();

        //$pdf = PDF::loadView('medical_history.form', $data);

        //return $pdf->download('reporte-clínico.pdf');
    }
}
