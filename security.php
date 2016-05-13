<?php
session_start();
if($_SESSION['Nome'] == "" && $_SESSION['CRM'] == "")
{
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    
}

?>