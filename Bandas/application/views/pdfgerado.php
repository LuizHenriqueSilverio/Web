<?php
	require_once('assets/fpdf/fpdf.php');
	$pdf = new FPDF();
	$pdf->AddPage();
    $num = 0;
    foreach ($bandas as $post) {
	$pdf->SetFont('Arial','B',24);
	$pdf->SetTextColor(255, 0, 0);
	$nome = utf8_decode($post->Nome);
	$pdf->Write(30, "Banda: " . $nome);
	$pdf->Ln(15);
	$pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial','',16);
	$data =  date("d/m/Y", strtotime($post->Data_Fundacao));
	$pdf->Write(30, "Fundada em: " . $data);
	$pdf->Ln(10);
	$integrantes = utf8_decode($post->Quant_Integrantes);
	$pdf->Write(30, "Quantidade de Integrantes: " . $integrantes);
	$pdf->Ln(35);
        $num++;
        if ($num % 4 == 0) {
            $pdf->AddPage();
        }
    }
	$pdf->Output();
?>

