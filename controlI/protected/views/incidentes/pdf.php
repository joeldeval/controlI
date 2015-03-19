<?php

 $dataProvider=$_SESSION['datos_filtrados']->getData();

 $contador=count($dataProvider);

$html2="";
 $html='




<h2 align="center" >Control de Incidentes de laboratorios CUTonalá</h2>      
      	
 

 
 <h3 align="center"> REPORTE DE INCIDENTES</h3> 

 <h3> Total Resultados: '.$contador.' </h3> 

<style>


table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;        width: 500px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

</style>


 <table> 

 <tr>
 <th>Id</th>
 <th>Descripcion</th>
 <th>Inicio</th>
 <th>Categoria</th>
 <th>Estatus</th>
 <th>Laboratorio</th>
 <th>Asignado</th>
 <th>Urgencia</th>
 <th>Solucion</th>
 <th>Modificacion</th>
 <th>Equipo</th>
 <th>Inmueble</th>
 </tr>';
 $i=0;
 $val=count($dataProvider);
 while($i<$val){
 $html2=$html2.'
 <tr >
 <td>'.$dataProvider[$i]["idIncidente"].'</td>
 <td>'.$dataProvider[$i]["Descripcion"].'</td>
 <td>'.$dataProvider[$i]["InicioFechaHora"].'</td>
 <td>'.$dataProvider[$i]["Categoria"].'</td>
 <td>'.$dataProvider[$i]["Estatus"].'</td>
 <td>'.$dataProvider[$i]["Laboratorio"].'</td>
 <td>'.$dataProvider[$i]["Asignado"].'</td>
 <td>'.$dataProvider[$i]["Urgencia"].'</td>
 <td>'.$dataProvider[$i]["SolucionFechaHora"].'</td>
 <td>'.$dataProvider[$i]["ModificacionFechaHora"].'</td>
 <td>'.$dataProvider[$i]["Equipo"].'</td>
 <td>'.$dataProvider[$i]["Inmueble"].'</td>

 </tr>'; $i++;
 }
 $html3='</table>';

 $mpdf = Yii::app()->ePdf->mpdf();
 //$mpdf->WriteHTML($html.$html2.$html3);
 $mpdf->Output('Reporte_Incidnetes.pdf','D');
 $mpdf->Output();
 exit; ?>