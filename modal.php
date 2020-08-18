
<?php

require('carro.php');
$carro=new Carro();

  
    
  
    $carro=$carro->getCarro($_POST['id']);
    
  


?>


    <form form action="controller.php" method="post" id="select-modal">
    
            <?php
                
            ?>
            
            <div class="form-group">

                <label  for="modal-placa">Placa</label>
                <input class="form-control" value=<?= $carro['placa']?> type="text" maxlength="7"  name="modal-placa" id="modal-placa" required> 
            </div>

            <div class="form-group">
                <input type="hidden" id="input-marca" value=<?= $carro['marca']?>>
                <label for="modal-marca">Marca</label>

                <select class="form-control"  onchange="atualizarModelosCadastro('modal-marca','modal-modelo')" name="modal-marca" id="modal-marca" required>
                   
                    <option disabled selected value=>Selecione uma Marca</option>
                    <option value="GM">GM</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="FIAT">FIAT</option>
                </select>
            

            </div>

            <div class="form-group">

                <label for="modal-modelo">Modelo</label>

                <select class="form-control"  disabled required name="modal-modelo" id="modal-modelo">
            
                </select>

                
            </div>
                    <?php
                            
                    ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                <input type="hidden" name="id" value='<?= $carro['id']?>'></input>
                <input type="hidden" name="action" value="update"></input>
                <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>

    <script src="telaCadastro/scriptCadastro.js"></script>
    <script src="telaConsulta/index.js"></script>

    <link rel="stylesheet" href="telaConsulta/index.css">