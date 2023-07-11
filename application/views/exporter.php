<?php 

/* Include fpdf185 */
//set_include_path(get_include_path() . PATH_SEPARATOR . 'D:\Mark\Documents\UwAmp\www\projet\fpdf185');
require_once('/fpdf185/fpdf.php');

/* Create new fpdf object */
$pdf = new fpdf('P','mm','A3',true,'UTF-8');

/* Set the document content */
$pdf->SetCreator('ZA');
$pdf->SetAuthor('ZA');
$pdf->SetTitle('Régime');
$pdf->SetSubject('Exported Table');

/* Add new page to the PDF */
$pdf->AddPage();

/* Define the table content */
// Define table headers
$header = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

// Define table data
$data = array(
    array('Banane','Pomme','Poire','Fraise','Citron','Coco','Peche'),
    array('Pompe','Squat','Course','Marche','Abdo','Corde a sauter','Velo'),
);

/* Generate the table */
// Set table font & size
$pdf->SetFont('helvetica','B',10);

// Set table header font & color
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(54,57,63);

//Output table header
foreach ($header as $column)
{
    $pdf->Cell(40,10,$column,1,0,'C',true);
}
$pdf->Ln(); // Move to next line

// Reset font & color for table data
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);

// Output table data
foreach ($data as $row)
{
    foreach ($row as $cell)
    {
        $pdf->Cell(40,10,$cell,1,0,'C',true);
    }
    $pdf->Ln();
}

// Output the PDF file
$pdf->Output('regime.pdf', 'D');

?>