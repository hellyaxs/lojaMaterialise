<?php

Class adm{

public function conexao(){

    global $pdo;
    try {
    $pdo=new PDO("mysql:dbname=lojavr;host=localhost","root","");
    } catch (PDOException $e) {
      echo "erro na conexao com o BD";
    }
   }

public function NovoProduto($categoria,$marca,$nome,$preco,$tamanho,$cor,$descricao){

  global $pdo;
  $bd=$pdo->prepare("INSERT INTO produtos (categoria,marca,nome,preco,tamanho,cor,descricao) VALUES (:c,:m,:n,:p,:t,:cor,:d)");

  $bd->bindValue("c",$categoria);
  $bd->bindValue("m",$marca);
  $bd->bindValue("n",$nome);
  $bd->bindValue("p",$preco);
  $bd->bindValue("t",$tamanho);
  $bd->bindValue("cor",$cor);
  $bd->bindValue("d",$descricao);
  $bd->execute();

  if ($bd->rowCount()>0) {
    echo "enviado";
    # code...
  }else{
 echo "erro";

  }
  

}


}





?>