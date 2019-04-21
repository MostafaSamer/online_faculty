
<?php
      $con=mysqli_connect("localhost","root","","test");	
  
$id =$_GET['id'];

$check = "SELECT * FROM `faculty` WHERE `id`='$id'";
 $result= mysqli_query($con,$check);
  $row=mysqli_fetch_row($result);

require ('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image("../admin/$row[8]",20,30,90,0);	

$pdf->Ln();

$pdf->SetFont('Arial','B',22);
$pdf->Cell(140,180,"$row[1]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,-150,"Location: $row[7]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,180,"Courses: $row[3]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,-150,"Area Expertise: $row[4]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,180,"Professional Interest: $row[5]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,-150,"Department: $row[2]",0,0,'R');

$pdf->Ln();

$pdf->SetFont('Arial','',15);
$pdf->Cell(140,170,"Phone: $row[6]",0,0,'R');

$pdf->Ln();

    $pdf -> output();

