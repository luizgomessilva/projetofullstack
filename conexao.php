<?php

$conexao=mysqli_connect('localhost','root','')
or die('Falha na conexao');

mysqli_select_db($conexao,'projetofullstack')
or die('Falha ao selecionar o banco');

?>