<?php

  include "class\class.TipoProduto.php";
  include "class\class.Produto.php";

   
   $tipo = new TipoProduto();
   $tipo->setCodigo(1);
   $tipo->setTitulo("Pizza");


    
   echo "<br>Tipo de pizza:".$tipo->getCodigo();
   echo "<br>Descrição:".$tipo->getTitulo();



?>