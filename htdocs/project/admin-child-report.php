<?php
include('configdb.php');
include('library/fpdf.php');
$query="SELECT * FROM registry";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if($num>0)
{
	
		$pdf=new FPDF();
		$pdf->AddPage('L');
		
		$pdf->SetFont('Arial','B',9);
		$pdf->Image('images/ministry.jpg',0,0,15,15);//logo
		$pdf->Image('images/fb.jpg',140,4,15,15);//admin photo
		$pdf->Image('images/unicef.png',283,0,15,15);//corts of arms
		$pdf->cell('',7,'',0,1,'C');
		$pdf->cell('',7,'',0,1,'C');
		$pdf->cell('',7,'ADMIN CHILD REPORT',0,1,'C');
		
		$pdf->cell(27,7,'NAME',1,0,'C');
		$pdf->cell(27,7,'SURNAME',1,0,'C');
		$pdf->cell(27,7,'ORIGINAL No.',1,0,'C');
		$pdf->cell(27,7,'DATE',1,0,'C');
		$pdf->cell(27,7,'MOTHER',1,0,'C');
		$pdf->cell(27,7,'BIO',1,0,'C');
		$pdf->cell(27,7,'COUNTY',1,0,'C');
		$pdf->cell(27,7,'CONSTITUENCY',1,0,'C');
		$pdf->cell(27,7,'WARD',1,0,'C');
		$pdf->cell(27,7,'SEX',1,1,'C');
		
		
		
		//-=====QUERY THE DATA BASE====
		$pdf->SetFont('Arial','',8);
		while($row=mysqli_fetch_assoc($result))
		{
			$pdf->cell(27,7,$row["name"],1,0,'C');
			$pdf->cell(27,7,$row["surname_of_father"],1,0,'C');
			$pdf->cell(27,7,$row["original_number"],1,0,'C');
			$pdf->cell(27,7,$row["date_of_birth"],1,0,'C');
			$pdf->cell(27,7,$row["name_of_mother"],1,0,'C');
			$pdf->cell(27,7,$row["bio"],1,0,'C');
			$pdf->cell(27,7,$row["countyName"],1,0,'C');
			$pdf->cell(27,7,$row["constName"],1,0,'C');
			$pdf->cell(27,7,$row["wardName"],1,0,'C');
			$pdf->cell(27,7,$row["sex"],1,1,'C');
		}
		
		$pdf->Output();
}


?>