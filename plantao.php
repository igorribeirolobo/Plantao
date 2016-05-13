<?php
require_once("connect.php");
$crm = $_POST['crm'];
$data = $_POST['data'];
$plantao = $_POST['r1'];
$tipo = $_POST['tipo'];
$feriado = $_POST['r2'];

$sql = "INSERT INTO plantao(Data,Tp_Plantao_idTp_Plantao,Medico_CRM,Feriado) VALUES('".$data."',".$tipo.",".$crm.",".$feriado.")";
mysqli_query($conn,$sql);
    echo '<meta charset="UTF-8"><script>alert("Plantão validado com sucesso!");</script><meta http-equiv="refresh" content="0; url=medico.php">';
?>