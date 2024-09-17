<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function generateReport()
    {
        // Aquí puedes obtener los datos que deseas mostrar en el reporte
        $data = ['title' => 'Reporte de Productos', 'products' => \App\Models\Product::all()];

        // Generar el PDF
        $pdf = PDF::loadView('products.product_report', $data);

        // Descargar el PDF
        return $pdf->download('reporte_productos.pdf');
    }
}

