<?php
if($_POST){
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];

    conta($v1, $v2);
    
}

function conta($a, $b){
    $Conta=$a+$b;
    echo"$a + $b = $Conta";
}

?>