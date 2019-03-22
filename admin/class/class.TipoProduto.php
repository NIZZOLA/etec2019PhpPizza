<?php

class TipoProduto extends PDO
{
   private $codigo,$titulo;
	
   public function setCodigo( $value )
   {
	  $this->codigo = $value; 
   }
	
   public function getCodigo()
   {
	   return $this->codigo;
   }
	
   public function setTitulo( $value )
   {
	   $this->titulo = $value;
   }
	
   public function getTitulo()
   {
	   return $this->titulo;
   }
   
   public function validaDados()
   {
	   $resposta = true;
	   
	   if( $this->codigo == "" || $this->titulo == "" )
		   $resposta = false;
	   
	   return $resposta;
   }
	
   public function Incluir()
   {
	   $sqlcmd = "insert into tipoproduto (codigo, tipo ) values 
	        ( ".$this->getCodigo().", '".$this->getTitulo()."')";
	   
	   if( $base = $this->query($sqlcmd) )
	   {
		   while($row = $base->fetch())
			   return $row["codigo"];
	   }
	   else
		  return 0;
   }

   public function CarregaDados( $id )
   {
       $sql = "SELECT * FROM tipoproduto WHERE tipoid=".$id;
 //      echo $sql;
       if($base = $this->query($sql)){
 
          while($row = $base->fetch())
              {
               $this->setCodigo( $row['TipoId']);
               $this->setTitulo( $row['Descricao']);
               
             return true;
          }
       }
       else{
          return false;
       }
   }
   
   public function GetAll()
   {
	   $sql = "select tp.tipoid codigo, tp.descricao descricao  from tipoproduto tp order by descricao";
	//   echo $sql;
	   return $this->query( $sql );
   }
}



?>