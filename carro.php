<?php

require('database/connection.php');

class Carro{

    public function createCarro($modelo,$placa,$marca){
        global $conn;

        $sql="INSERT INTO carros (placa,marca,modelo,date_dia) VALUES ('{$placa}','{$marca}','{$modelo}',NOW())";

        try{

            
            $stmt=$conn->prepare($sql);
            $stmt->execute();
                


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function getCarros($placa = null,$marca = null,$modelo = null){

        global $conn;

       
    

        $return=array();

        $sql = "SELECT * FROM carros WHERE TRUE";

        if(!empty($placa)) {
            $sql .= " AND placa LIKE '%{$placa}%'";
        } 
        if(!empty($marca)) {
            $sql .=" AND marca LIKE '%{$marca}%'";
        } 
        if(!empty($modelo)) {
            $sql .= " AND modelo LIKE '%{$modelo}%'";
        }

        try{

            

            $stmt=$conn->prepare($sql);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $return[] = $row;
            
            }
            return $return;


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    public function getCarro($id){

        global $conn;

       

        $sql = "SELECT * FROM carros WHERE id=$id";

       

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
            
            
            return $row;


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }



    public function deleteCarro($id){
        global $conn;

        $sql="DELETE FROM carros WHERE id=$id";

        try{

            
            $stmt=$conn->prepare($sql);
            $stmt->execute();
                


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function updateCarro($id,$placa,$marca,$modelo)
    {
        global $conn;

        $sql = "UPDATE carros  SET placa = '{$placa}', modelo = '{$modelo}', marca = '{$marca}' WHERE id = $id";

        try {

            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}