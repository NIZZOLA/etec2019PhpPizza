<?php
  include "class\config.php";
  include "class\class.produto.php";
   
  $produto = new Produto(DB_STRING, DB_USER, DB_PASS);
  
  $produto->setTitulo( $_POST["titulo"] );
  $produto->setDescricao( $_POST["descricao"]);
  $produto->setTipo( $_POST["tipo"]);
  $produto->setValor( $_POST["valor"]);
  $produto->setImagem( $_POST["imagem"]);

   if( $produto->ValidaDados())
   {
     $codigo = $produto->Incluir();
     
	   if( $codigo > 0 )
	   {
		   echo "produto incluido com o código ".$codigo;
	   }
	   else
	   {
		   echo "Houve erro na transação !";
	   }
   }
   else
   {
	   echo "Preencha todos os campos !";
   }
	   

?>