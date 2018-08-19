<?php

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once('fpdf/fpdf.php');
require_once('fpdi2/src/autoload.php');

	if(isset($_POST['sbmt'])) {
		
		



		$pdf = new Fpdi();

		

		$pdf->addPage('L');
		$pdf->useImportedPage($pageId, 0, 0, 297, 210);
		$pdf->addPage('L');
		$pdf->useImportedPage($pageId2, 0, 0, 297, 210);
		$pdf->SetFont('Arial','',9);
		$x = 155;
		$y = 39;
		$i = strlen($name);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$name[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// surname
		$x = 155;
		$y = 46;
		$i = strlen($surname);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$surname[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// street_number
		$x = 155;
		$y = 53.5;
		$i = strlen($street_number);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$street_number[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// zip
		$x = 155;
		$y = 60.5;
		$i = strlen($zip);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$zip[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// residence
		$x = 179;
		$y = 60.5;
		$i = strlen($residence);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$residence[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// tel
		$x = 155;
		$y = 67.5;
		$i = strlen($tel);
		$cnt = 0;
		while($cnt < $i) {

			if($cnt%2 == 0)
				$x+=2.8;
			else
				$x+=2.7;
			$pdf->SetXY($x, $y);
			$pdf->Cell(0, 0, ''.$tel[$cnt], 'C', 0, 1);
			$cnt++;
		}

		// date
		$pdf->SetXY(222, 67.5);
		$pdf->Cell(0, 0, ''.$date, 'C', 0, 1);

		// time
		$pdf->SetXY(258, 67.5);
		$pdf->Cell(0, 0, ''.$time, 'C', 0, 1);

		// dep
		$pdf->SetXY(222, 76);
		$pdf->Cell(0, 0, ''.$dep, 'C', 0, 1);

		// dest
		$pdf->SetXY(222, 84.5);
		$pdf->Cell(0, 0, ''.$dest, 'C', 0, 1);

		// line
		$pdf->SetXY(222, 93);
		$pdf->Cell(0, 0, ''.$line, 'C', 0, 1);

		// direction
		$pdf->SetXY(222, 101.5);
		$pdf->Cell(0, 0, ''.$direction, 'C', 0, 1);

		// place
		$pdf->SetXY(222, 110);
		$pdf->Cell(0, 0, ''.$place, 'C', 0, 1);

		
	}
?>
