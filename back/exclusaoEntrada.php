<?php
//conexao com banco
$conect = mysqli_connect('mysql.hostinger.com.br','u613824788_cidin','fgli4545','u613824788_relat');
mysqli_select_db($conect,"entrada");

//definicoes
//atualizacao dos dados existentes
$id = $_GET['ids'];
$editou = $_GET['editou'];
$dia = $_GET['dias'];
$horas = $_GET['horas'];
$minutos = $_GET['minutos'];
$revisitas = $_GET['revisitas'];
$revistas = $_GET['revistas'];
$livros = $_GET['livros'];
$broxuras = $_GET['broxuras'];
$obs = $_GET['obs'];
if($editou == "ok"){
    //edita o dia pelo id
    mysqli_query($conect, "UPDATE  `entrada` SET `dia`='{$dia}',`horas`='{$horas}', `minutos`='{$minutos}', `revisitas`='{$revisitas}', `revistas`='{$revistas}', `livros`='{$livros}', `broxuras`='{$broxuras}',`observacoes`='{$obs}' WHERE `idDia`='{$id}'");
}elseif($editou == "nao"){   
    //deleta dia pelo id
    mysqli_query($conect, "DELETE FROM  `entrada` WHERE (`idDia` = '{$id}');");
}

mysqli_close($conect);
?>