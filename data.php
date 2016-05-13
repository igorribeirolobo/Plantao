<?php
$data = date(m);
$data = $data -1;
$ano = date("Y");
$ultimo_dia = date("t", mktime(0,0,0,$data,'01',$ano));
$ultimo_dia = $ano."-0".$data."-".$ultimo_dia;
$primeiro_dia = $ano."-0".$data."-01";
if($data == '1')
{
  $data = "Janeiro";    

}
if($data == '2')
{
    $data = 'Fevereiro';
}
if($data == '3')
{
    $data = 'Março';
}
if($data == '4')
{
    $data = 'Abril';
}
if($data == '5')
{
    $data = 'Maio';
}
if($data == '6')
{
    $data = 'Junho';
}
if($data == '7')
{
    $data = 'Julho';
}
if($data == '8')
{
    $data = 'Agosto';
}
if($data == '9')
{
    $data = 'Setembro';
}
if($data == '10')
{
    $data = "Outubro";
}
if($data == '11')
{
    $data = "Novembro";
}
if($data == '12')
{
    $data = "Dezembro";
}
?>