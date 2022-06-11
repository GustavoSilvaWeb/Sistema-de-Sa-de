<html>
 <head>
  <title>Sistema de Saúde</title>
  
 </head>
  <link rel="stylesheet" href="style.css">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
 <body>

 
 <h1>
    Sistema de Saúde

</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
                <label class="form-label">Peso</label>
                <input type="text" class="form-control" name="peso">
                <label class="form-label">Altura</label>
                <input type="altura" class="form-control" name="altura">
                <button class="form-control">
                    Calcular
                </button>
            </form>
        </div>
    </div>
</div>

<?php
 
    
    
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }   
    if(isset($_POST['peso'])){
        $peso = $_POST['peso'];
    }
    if(isset($_POST['altura'])){
        $altura = $_POST['altura'];
    }
    $saudavel = true;
    if(isset($_POST['nome'])&&isset($_POST['peso'])&&isset($_POST['altura'])){

        $imc = $peso/($altura^2);    
        if($imc<=30){
            $saudavel = true;
        }
        else{
            $saudavel = false;
        }       
        if($saudavel){
            echo
            "<div class='alert alert-success' role='alert'>".$nome.
            "
                está bem de saúde
            </div>
            ";            
        }
        else{            
            echo
            "<div class='alert alert-danger' role='alert'>".$nome.
            "
            está precisando se cuidar
            </div>
            ";   
        }
    }
?>









</body>
</html>