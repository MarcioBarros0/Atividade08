<?php
    include_once("imc.class.php");

    $obj = new IMC();

    $obj->setNome("Teste");
    $obj->setPeso("80");
    $obj->setAltura("1.84");

    $obj->setIMC();

    echo $obj->getNome()." é classificado como: ".$obj->getClassificacao()." e tem grau de obesidade ".$obj->getGrau();
?>