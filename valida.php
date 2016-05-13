<?php
session_start();
require_once("connect.php");
if($_GET['login'] != "" && $_GET['senha'] != "")
{
    $login = $_GET['login'];
    $pass = $_GET['senha'];
}
else
{
$login = $_POST['login'];
$pass = md5($_POST['senha']);
}
$sql = "SELECT * FROM medico WHERE CRM='".$login."' AND Senha='".$pass."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row['Tipo'] == "S")
        {
        $_SESSION['Nome'] = $row['Nome'];
        $_SESSION['CRM']  = $row['CRM'];   
       echo '<meta http-equiv="refresh" content="0; url=index.php">';
        }
        else if($row['Tipo'] != "S")
        {
            echo "<script> alert('Você não tem permissao para acessar este painel!')</script><meta http-equiv='refresh' content='0; url=login.php'>";
        }
    }
} 
else {
    echo '<meta charset="UTF-8"><script>alert("Usuário ou senha incorretos!");</script><meta http-equiv="refresh" content="0; url=login.php">';
}

mysqli_close($conn);

?>