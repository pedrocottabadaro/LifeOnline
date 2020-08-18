
<?php

include('../database/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    <title>Tela de cadastro</title>
</head>
<body>

   
    <div class="form-container">
         <h2 id="title">Tela de registro</h2>

        <form action="../controller.php" method="post" id="form">

            <div class="form-section">

                <div class="form-item">
                    <label for="placa">Placa</label>
                    <input  type="text" maxlength="7" name="placa" id="placa" required>
                </div>
            
                

            </div>
            <div class="form-section">
                
                <div class="form-item">
                    <label for="marca">Marca</label>

                    <select  onchange="atualizarModelosCadastro('marca','modelo')" name="marca" id="marca" required>
                        <option disabled selected value=>Selecione uma Marca</option>
                        <option value="GM">GM</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="FIAT">FIAT</option>

                      
                    </select>
                </div>
                

                <div class="form-item">
                    <label for="modelo">Modelo</label>

                    <select value="" disabled required name="modelo" id="modelo">
                       
                    </select>
                    
                 </div>
            </div>
            
                <div class="buttons-cadastro" >
                    

                    <input name="action" value="create" type="hidden"></input>
                    <button value="submit" type="submit" form="form" class="button" id="register-button">Cadastrar</button>
                    
                </div>
                
               

        </form>

                
               

                <button onclick="window.location.href = 'http://localhost/estagio/index.php'"  class="button" id="consulta-button">Consultar Dados</button>


        


    </div>
</body>

<script src="scriptCadastro.js"></script>

</html>