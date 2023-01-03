
<?php

use frontend\models\bestelling;
use yii\web\Session;

$session = Yii::$app->session;

$path = Yii::getAlias("@vendor/fpdf/fpdf.php");
require_once($path);

class PDF extends FPDF
{

  function Header()
  {

    $this->SetY(10);
    $this->SetX(10);
    $this->setFont('Arial','',10);
    $this->setFillColor(255,255,255);
    $this->cell(277,5,"Urenregistratie",0,1,'C',1); 
    $this->SetX(10);
    $this->cell(277,5,"Export",0,1,'C',1);  

  }

function Content($data)
{
   
  $y_axis_initial = 30;
  $row_height= 11;
  $y_axis = 24;
  $y_axis = $y_axis + $row_height;

  $i = 0;
  $a = 0;

  $max = 30;
  $row_height = 6;

  foreach ($data->models as $row)
  { 

    if ($i == $max)
     {
          $this->AddPage();
          $y_axis = 35;
          $i = 0;

      }
          $ID = $row->ID;
          $Datum = $row->Datum;
        //   $klantennaam = $row->klantennaam;
          $Project = $row->Project;
          $Medewerker = $row->Medewerker;
          $Activiteit = $row->Activiteit;
          $Uren = $row->Uren;
          $Declarabel = $row->Declarabel;
          $Opmerkingen = $row->Opmerkingen;


           
  
          $this->SetFillColor(232,232,232);
          $this->SetFont('Arial','',6);
          $this->SetY(28);
          $this->SetX(10);
          $this->Cell(20,7,'ID',1,0,'C',1);
          $this->Cell(20,7,'Datum',1,0,'C',1);
        //   $this->Cell(20,7,'klantennaam',1,0,'C',1);
          $this->Cell(20,7,'Project',1,0,'C',1);
          $this->Cell(20,7,'Medewerker',1,0,'C',1);
          $this->Cell(20,7,'Activiteit',1,0,'C',1);
          $this->Cell(20,7,'Uren',1,0,'C',1);
          $this->Cell(20,7,'Declarabel',1,0,'C',1);
          $this->Cell(20,7,'Opmerkingen',1,0,'C',1);




          $this->SetFillColor(255,255,255);
          $this->SetY($y_axis);
          $this->SetX(10);
          $this->Cell(20,7,$ID,1,0,'L',1);
          $this->Cell(20,7,$Datum,1,0,'R',1);
        //   $this->Cell(20,7,$klantennaam,1,0,'R',1);          
          $this->Cell(20,7,$Project,1,0,'R',1);
          $this->Cell(20,7,$Medewerker,1,0,'R',1);
          $this->Cell(20,7,$Activiteit,1,0,'R',1);
          $this->Cell(20,7,$Uren,1,0,'R',1);
          $this->Cell(20,7,$Declarabel,1,0,'R',1);
          $this->Cell(20,7,$Opmerkingen,1,0,'R',1);
         


          $y_axis = $y_axis + $row_height;
          $i = $i + 1;
         
  }      
       
}

  function Footer()
  {

    $this->SetY(-8);
    $this->SetFont('Arial','',7);
    $this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'R');
  }
}

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->Output();

exit;