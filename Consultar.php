<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Well.Com</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
       <h3>Consultar Clientes</h3>
       <hr>
       <form  class="form-group" action="">
       <input type="text" placeholder="Nome" style="width:30%; display:inline !important;" class="form-control"> 
       <input class="btn btn-outline-dark" style="margin-bottom:0.5%" type="submit">
       </form>
       
       
       
       
        <table class="table table-bordered table-dark">
           
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Estado Civil</th>
                    <th>Sexo</th>
                </tr>
                
            </thead>
            <tbody>
                
                
                <?php 
                    
                    
                    include "conexao.php"; 
                    $sql = "SELECT * FROM cliente;";
                    $busca = mysqli_query($con, $sql);
                    
                    while($array = mysqli_fetch_array($busca)){
                    
                        $id = $array['id'];
                        $nome = $array['nome'];
                        $email = $array['email'];
                        $estadocivil = $array['estadocivil'];
                        $sexo = $array['sexo'];
                        
                
                    ?>
                
                
               
                
                <tr>
                    
                    <td><?php echo $id ?></td>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $estadocivil ?></td>
                    <td><?php echo $sexo ?></td>
                    
                </tr>
                
                 <?php }?>
            </tbody>
            
            
        </table>
    </div>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>