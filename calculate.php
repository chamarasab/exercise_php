<?php
session_start();

    //(int)$sum = 0;
    //$_SESSION['sum'] = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fn = $_POST["txtFn"];
        $sn = $_POST["txtSn"];

        $sum = (int)$fn + (int)$sn;
        $_SESSION['sum'] = $sum;
    }
//header('location:calculator.php');
?>
<?php 
    //include_once 'calculator.html'; 
    include_once 'index.html';
?>