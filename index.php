
<?php

include('database/connection.php');
require("carro.php");


?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="telaConsulta/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tela de consulta</title>
</head>
<body>

    <div class="page-container">
        <h2 id="title">Tela de consulta</h2>

        <div class="filter-container">

            
            <form  method="post" id="select-form">
                <input type="hidden" name="action"value="search"></input>
                <div class="form-section">

                    <div class="form-item">
                        <label for="placa">Placa</label>
                        <input   type="text" maxlength="7" name="select-placa" id="">
                    </div>
                
                
                </div>

                    

                <div class="form-section">
                    
                    <div class="form-item">
                        <label for="select-marca">Marca</label>

                        <select onchange="atualizarModelos()" name="select-marca" id="marca">
                            <option value=""></option>
                            <option value="GM">GM</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="FIAT">FIAT</option>
                            
                        </select>
                    </div>
                    

                    <div class="form-item">
                        <label for="select-model">Modelo</label>

                        <select value=""  name="select-modelo" id="modelo">
                            <option value=""></option>
                        </select>
                        
                    </div>

                </div>
                
                <button value="submit" type="submit" form="select-form" class="button" id="filter-button">Consultar</button>

            </form>


        </div>




        <div class="container">
            <h2 id="title-dados">Dados registrados</h2>
            
            <div class="tabela">


            </div>


            <button  onclick="window.location.href = 'http://localhost/estagio/telaCadastro/cadastro.php'"   class="button" id="register-button">Registrar</button>

           

        </div>
        


    </div>

</body>



<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="telaConsulta/index.js"></script>


<script>

$(document).ready(function () {
    

    
    $.ajax({

        type: 'POST',
        url: 'tabela.php',
        success: function (data) {

            $('.tabela').html(data)
            
            
        }
    });
});

</script>

</html>