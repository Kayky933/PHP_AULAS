<?php
  define ('FPDF_FONTPATH', 'font/');
  require ('pdf/fpdf.php');
  
  
  $pdf = new FPDF ('P','cm','A4');
  
  $pdf->AddPage();
  $pdf-> SetFont('Arial','B','12');
  $pdo = new PDO ('mysql:host=localhost; dbname=5-crud','root','');
  $sql = $pdo ->prepare("select * from usuario;");
  $sql ->execute();
 

  $pdf-> cell(18,1,"Relatorio de Usuarios",1,3,'C'); 
  $pdf-> cell(3,1,"ID",1,0,'C');
  $pdf-> cell(8,1,"nome",1,0,'C');
  $pdf-> cell(7,1,"perfil",1,1,'C');
  
       
  foreach($sql as $resultado)
  {
	  $pdf-> cell(3,1,$resultado['id'],1,0,'C');
	  $pdf-> cell(8,1,utf8_encode($resultado['nome']),1,0,'C');
    $pdf-> cell(7,1,utf8_encode($resultado['perfil']),1,1,'C');
  }
  $pdf-> OutPut();
  ?>

