<h1>Tipos de Pizza</h1>
<?php
  include "class\config.php";
  include "class\class.TipoProduto.php";
  include "class\class.Produto.php";

   
   $tipoDb = new TipoProduto(DB_STRING, DB_USER, DB_PASS);

   $lista = $tipoDb->GetAll();
   $qtd=0;

   if (isset($lista))
  {
    while ($tipo = $lista->fetchObject())
    {
                    $qtd++;
                    echo $tipo->codigo." ";
                    echo $tipo->descricao;
    }
  }
			   


   ?>