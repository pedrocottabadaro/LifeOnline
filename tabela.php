<?php

    require('carro.php');
    $carro=new Carro();

 

    if(!empty($_POST['select-placa']) || !empty($_POST['select-marca']) || !empty($_POST['select-modelo'])){
        $carro=$carro->getCarros($_POST['select-placa'],$_POST['select-marca'],$_POST['select-modelo']);
    }
    else{

        $carro=$carro->getCarros();
    }
    

   

?>

        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th> 
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach($carro as $key => $value) {

                
                ?>
                <tr>
                <th scope="row"><?= ++$key ?></th>
                <td><?= $value['placa'] ?></td>
                <td><?= $value['marca'] ?></td>
                <td><?= $value['modelo'] ?></td>
                <td><?= $value['date_dia'] ?></td>
                <td id="botoes-tabela">
                    
                    <form action="controller.php" method="POST" id="form-excluir">
                        <input name="action" value="delete" type="hidden"></input>
                        <input name="id" value=<?= $value['id'] ?> type="hidden"></input>
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                    

                    
                        
                    <button  type="button" class="btn btn-warning btn-sm botao-ajustar" data-id='<?= $value['id'] ?>' data-toggle="modal" data-target="#exampleModal" >Ajustar</button>

                </td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atualizar dados</h5>
                        
                    </div>
                    <div class="modal-body">
                        
                        


                    </div>
                
                    
                
                </div>
            </div>
        </div>

    
    
    <script src="telaCadastro/scriptCadastro.js"></script>
    <script src="telaConsulta/index.js"></script>