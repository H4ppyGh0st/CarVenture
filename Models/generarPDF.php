<?php
require('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(1);
    // Título
    $this->Cell(184,10,'Estado     
        Trabajador   
        Cargo  
        Valor  
        Dias',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

include '../conexion/conexion.php';


$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


/*Se consultan los datos de la tabla con el mismo join para poderlos
imprimir en el pdf*/ 
$sql = $conn->prepare('SELECT Nombre, NombreT , NombreC , Valor, Tiempo 
FROM detalleordendetrabajo, estados, cargos,trabajador WHERE detalleordendetrabajo.IdEstado = estados.Id 
 and detalleordendetrabajo.IdCargo = cargos.Id
 and detalleordendetrabajo.IdTrabajador = trabajador.Id;');

$sql->execute();


foreach ($sql as $row) {

   
/*se imprimen los datos del join dentro del archivo pdf*/ 
    $pdf->cell(37, 10 , $row['Nombre'], 1 , 0 , 'C' , 0);
    $pdf->cell(37, 10 , $row['NombreT'], 1 , 0 , 'C' , 0);
    $pdf->cell(37, 10 , $row['NombreC'], 1 , 0 , 'C' , 0);
    $pdf->cell(37, 10 , $row['Valor'], 1 , 0 , 'C' , 0);
    $pdf->cell(37, 10 , $row['Tiempo'], 1 , 1 , 'C' , 0);


}

/*Consulta Para extraer valor y tiempo*/ 

$sql = $conn->prepare('SELECT Valor, Tiempo FROM detalleordendetrabajo');

$sql->execute();

$sumaValor = 0;
$sumaTiempo = 0;

                /* Esta sumando el total de los valores que se han asignado y el tiempo (en dias) que
             se han asignado
            */

foreach ($sql as $row) {

        $sumaValor +=  $row['Valor'];
        $sumaTiempo += $row['Tiempo'];
}

                /* Se muestra el resultado en el Pdf
            */
$pdf->cell(260, 10 , "Total    
   " ."$". $sumaValor."    
        ".$sumaTiempo." Dias" , 0 , 0 , 'C' , 0);
               

$pdf->Output();
