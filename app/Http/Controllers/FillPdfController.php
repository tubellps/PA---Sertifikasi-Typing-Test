<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class FillPdfController extends Controller
{
    public function process(Request $request)
    {
        $nama = "RATU BELLA GITA";
        $lahir = "07 November 2000";
        $outputfile = public_path().'dcc.pdf';
        $this->fillPdf(public_path().'/master/dcc.pdf', $outputfile, $nama, $lahir);

        return response()->file($outputfile);
    }

    public function fillPdf($file, $outputfile, $nama, $lahir) {
        $fpdi = new FPDI;
        $fpdi->setSourceFile($file);
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'],array($size['width'],$size['height']));
        $fpdi->useTemplate($template);
        $top = 112;
        $right = 103;
        $name = $nama;
        $birth = $lahir;
        $fpdi->SetFont("helvetica","",30);
        $fpdi->SetTextColor(25,26,25);
        $fpdi->Text($right,$top,$name,$birth);

        return $fpdi->Output($outputfile, 'F');
    }
}
