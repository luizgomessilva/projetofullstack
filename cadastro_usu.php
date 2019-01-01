<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
  session_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Usuários</title>
<link href="../css/estilo_c.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div id="cabecalho">
      <h1>Cadastro de Usuários</h1>
    </div>
   <div id="cadastro">  
    <form name="usuario" method="POST" action="">
      <div class="form-row">
        <div class="col">
            <label for="inputName4">Nome</label>
           <input type="text" class="form-control" placeholder="Nome" name="nome">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
        </div>
        <div class="form-group col-md-6">
            <label for="inputMat6">Matrícula</label>
            <input type="text" class="form-control" placeholder="Matricula" name="matricula">
        </div>

        <input type="checkbox" name="status[]" value=1>
            <label>ATIVO</label>
          
        <input type="checkbox" name="status[]" value=0>
            <label>INATIVO</label>


      </div>
      
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="../index.php" class="btn btn-primary">Voltar</a>
    
    </form>

    <?php
        include('conexao.php');

          if(empty($_POST)){
            echo ("");
          }else{
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $matricula = $_POST['matricula'];
            if(isset($_POST['status'])){
            $listaCheckbox = $_POST['status'];

            foreach ($listaCheckbox as $status) {
                echo $status;
        //aqui você salva no seu banco
    }
}


            $inserir = "INSERT INTO usuarios(nome,senha,matricula,status)
            VALUES('$nome','$senha','$matricula','$status')";

            $y = mysqli_query($conexao, $inserir)or die("Falha na conexão");
          }
      ?>
  </div>
</body>
</html>
