<?php
	/*******************************************************************************
	* pdfres.php                                                                   *
	*                                                                              *
	* Versión:  1.14                                                               *
	* Fecha:    2017-12-01                                                         *
	* Proyecto: 17_plcontrol                                                       *
	* GitHub:   https://github.com/rmonla/17_plcontrol                             *
	* Web:      https://immense-tor-16114.herokuapp.com                            *
	* Author:   Ricardo N. MONLA (rmonla@gmail.com)                                *
	*******************************************************************************/


	$vinicia     = utf8_decode( ucwords( strtolower( $_POST['vinicia'] )));
	$vhora       = $_POST['vhora'];
	$vfecha      = date( "Y-m-d", strtotime( $_POST['vfecha'] ));
	$vparticipan = ucwords( strtolower( $_POST['vparticipan'] ));
	
	require('_inc/fpdf/fpdf.php');
	
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->Image('_img/formHead.png',28,8,100);
		// $pdf->Image('_img/formHead.png',28,8,20);
		// $pdf->Image('_img/logoUTN100.png',28,8,20);
		$pdf->Ln(24);
		// $pdf->SetFont('Arial','',10);
		// $pdf->Cell(0, 6, '         Ministerio de Educacion', 0, 1, 'L');
		// $pdf->Cell(0, 6, 'Universidad Tecnologica Nacional', 0, 1, 'L');
		// $pdf->Cell(0, 6, '      Facultad Regional La Rioja', 0, 1, 'L');
		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',30);
		$title = 'DTIC';
		$pdf->SetFillColor(200,220,255);
		$pdf->Cell(0, 6, $title, 0, 1, 'C', true);
		$pdf->Ln(10);
		$pdf->SetFont('Arial','',14);
		$dia   = substr($vfecha, 8, 2);
		$mes   = substr($vfecha, 5, 2);
		$ano   = substr($vfecha, 0, 4);
		$vfec1 = "$dia/$mes/$ano";
		$pdf->Ln(5);
		$pdf->Cell(10);
		$pdf->Cell(0, 6, 'Fecha: ' . stripslashes($vfec1) . '                                                            Hora: ' . stripslashes($vhora),0,1,'L');
		$pdf->Ln();
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(10);
		$pdf->Cell(0, 6, 'Participantes: ', 0, 1, 'L');
		$pdf->SetFont('Arial','',14);
		$pdf->Cell(45);
		$pdf->MultiCell(0, 6, $vparticipan, 0, 'L');
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Cell(130);
		$pdf->SetFont('Arial','I',13);
		$pdf->Cell(0, 6, $vinicia,0,1, 'L');
		$pdf->Ln();
		ob_end_clean();
		$pdf->Output();
?>
