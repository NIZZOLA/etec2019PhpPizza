<h1>Tipos de Pizza</h1>
<?php
  include "class\config.php";
  include "class\class.TipoProduto.php";
  include "class\class.Produto.php";

   
   $tipoDb = new TipoProduto(DB_STRING, DB_USER, DB_PASS);

   if( $tipoDb->CarregaDados(1) )
   {

   echo $tipoDb->getTitulo();
   }
   else
   {
       echo "Tipo nao encontrado !";
   }
   ?>