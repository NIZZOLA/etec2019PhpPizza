<?php
  include "class\config.php";
  include "class\class.TipoProduto.php";
   
  $tipo = new TipoProduto(DB_STRING, DB_USER, DB_PASS);
  $tipo->setCodigo( $_POST["codigo"] );
  $tipo->setTitulo( $_POST["descri"] );

   if( $tipo->ValidaDados())
   {
     $codigo = $tipo->Incluir();
     $teste = $tipo->Deletar();
     
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