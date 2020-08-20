<?php
include('configdb.php');
include('library/fpdf.php');
$query="SELECT * FROM healthworkers";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if($num>0)
{
	
		$pdf=new FPDF();
		$pdf->AddPage('P');
		
		$pdf->SetFont('Arial','B',9);
		$pdf->Image('images/ab.jpg',0,0,15,15);//logo
		$pdf->Image('images/ab.jpg',100,4,15,15);//admin photo
		$pdf->Image('images/ab.jpg',195,0,15,15);//corts of arms
		$pdf->cell('',7,'',0,1,'C');
		$pdf->cell('',7,'',0,1,'C');
		$pdf->cell('',7,'ADMIN HEALTH WORKS REPORT',0,1,'C');
		
		$pdf->cell(26,7,'FIRST NAME',1,0,'C');
		$pdf->cell(26,7,'LAST NAME',1,0,'C');
		$pdf->cell(26,7,'SURNAME',1,0,'C');
		$pdf->cell(26,7,'ID NUMBER',1,0,'C');
		$pdf->cell(26,7,'MOBILE NO',1,0,'C');
		$pdf->cell(26,7,'EMAIL',1,0,'C');
		$pdf->cell(26,7,'LOCATION',1,1,'C');
		//-=====QUERY THE DATA BASE====
		$pdf->SetFont('Arial','',8);
		while($row=mysqli_fetch_assoc($result))
		{
			$pdf->cell(26,7,$row["first_name"],1,0,'C');
			$pdf->cell(26,7,$row["Last_name"],1,0,'C');
			$pdf->cell(26,7,$row["sur_name"],1,0,'C');
			$pdf->cell(26,7,$row["id_no"],1,0,'C');
			$pdf->cell(26,7,$row["mobile_no"],1,0,'C');
			$pdf->cell(26,7,$row["email"],1,0,'C');
			$pdf->cell(26,7,$row["location"],1,1,'C');
		}
		
		$pdf->Output();
}


?>