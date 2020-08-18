
<?php

require('carro.php');



$carro=new Carro();

if($_POST['action']=='create'){

    $carro->createCarro($_POST['modelo'],$_POST['placa'],$_POST['marca']);
    header('Location:index.php');

}
else if($_POST['action']=='delete'){
   
    $carro->deleteCarro($_POST['id']);
    header('Location:index.php');
}

else if($_POST['action']=='update'){
    
    
    $carro->updateCarro($_POST['id'],$_POST['modal-placa'],$_POST['modal-marca'],$_POST['modal-modelo']);

    header('Location:index.php');
    
}



