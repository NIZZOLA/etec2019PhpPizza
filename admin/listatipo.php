<h1>Tipos de Pizza</h1>
<?php
  include "class\config.php";
  include "class\class.TipoProduto.php";
   
   $tipoDb = new TipoProduto(DB_STRING, DB_USER, DB_PASS);

   $lista = $tipoDb->GetAll();
   $qtd=0;
   ?>
  <table border="1">
    <tr>
      <td>Codigo</td>
      <td>Descricao</td>
    </tr>

<?php
   if (isset($lista))
  {
    while ($tipo = $lista->fetchObject())
    {
                    $qtd++;
                    echo "<tr><td>".$tipo->codigo."</td><td>";
                    echo $tipo->descricao."</td></tr>";
    }
  }
    ?>

  </table>
<?php
  echo "<hr>Total Listado:".$qtd;

   ?>