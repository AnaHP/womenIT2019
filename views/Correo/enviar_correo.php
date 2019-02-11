<?php
ob_end_clean();
require('./public/fpdf/fpdf.php');


  // print_r($this->nombres);
  $dato = [];
  $datos = $this->correos;
  // print_r($datos);
  class PDF extends FPDF{
    function Header(){
      $this->AddFont('roboto','','Roboto-Light.php');
      $this->Image('./public/images/reco.jpg',0,0,100,211);
      $this->Image('./public/images/escudo1.jpg',150,10,20,25);
      $this->Image('./public/images/escudo2.jpg',172,10,20,25);
      $this->Ln(25);
      $this->SetFont('roboto','',17,'C');
      $this->SetTextColor(105, 107, 106);
      $this->Cell(75);
      $this->Cell(180,10,utf8_decode('Universidad Autónoma de Querétaro'),0,1,'C');
      $this->Cell(75);
      $this->SetFont('roboto','',20,'C');
      $this->Cell(180,10,utf8_decode('Facultad de Informática'),0,1,'C');


    }
    // Pie de Página
    function Footer(){
      // Posicion: a 1,5 cm del final
      $this->SetY(-15);
      $this->SetFillColor(1,72,124);
      $this->Rect(0,270,220,25, "F");
      $this->Image('./public/images/firma1.jpg',75,170,80,40);
      $this->Image('./public/images/firma2.jpg',195,174,85,35);
      // $this->Image('./public/images/logo_troyana.png',45,268,20,25);
      // // Arial Italic 8
      // $this->SetFont('Arial', 'I', 8);
      // Número de Página
      // $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

    }

  }

    // $dato[] = [utf8_decode($datos[$i][1]." ".$datos[$i][2])."/".$datos[$i][0]];

    $pdf = new PDF('L','mm','A4');
    $pdf->AddFont('cursivestandard','','cursivestandard.php');
    $pdf->AddFont('roboto','','Roboto-Light.php');
    $pdf->AddFont('italianno','','italianno-Regular.php');
    $pdf->AddFont('roboto','B','DroidSans-Bold.php');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    # Parte forma de Pagoza
    // $pdf->SetFillColor(232,232,232);
    // $pdf->Rect(10,60,40,18, "F");
    $pdf->Ln(10);
    $pdf->SetTextColor(105, 107, 106);
    $pdf->SetFont('roboto','',17,'C');
    $pdf->Cell(75);
    $pdf->Cell(180,8,'Otorga la siguiente',0,1,'C');
    // $pdf->Ln(10)
    $pdf->SetTextColor(225, 103, 121);
    $pdf->SetFont('roboto','B',35,'C');
    $pdf->Cell(75);
    $pdf->Cell(180,15,'CONSTANCIA',0,1,'C');
    $pdf->SetTextColor(105, 107, 106);
    $pdf->SetFont('roboto','',17,'C');
    $pdf->Cell(75);
    $pdf->Cell(180,8,'a',0,1,'C');
    $pdf->Ln(5);
    $pdf->SetFont('italianno','',35,'C');
    $pdf->Cell(75);
    $pdf->Cell(180,10,utf8_decode($datos[0][0]." ".$datos[0][1]),0,1,'C');
    $pdf->Ln(10);
    $pdf->SetFont('roboto','',20,'C');
    $pdf->Cell(75);
    $pdf->Cell(180,10,'Por haber asistido al evento ',0,1,'C');
    $pdf->SetFont('roboto','B',25,'C');
    $pdf->Cell(75);
    $pdf->SetTextColor(114, 116, 124);
    $pdf->Cell(180,10,'"Women IT"',0,1,'C');
    $pdf->SetFont('roboto','',20,'C');
    $pdf->Ln(5);
    $pdf->Cell(75);
    $pdf->Cell(180,10,utf8_decode('Campus Juriquilla, Querétaro a 15 de Marzo del 2018.'),0,1,'C');

    $name = "Constancia_".$datos[0][0]."_".$datos[0][1].".pdf";
    if($pdf->Output($name,'D')){
      echo "listo";
    }else{
      echo "descargado";
    }

  // print_r($dato);


 ?>
