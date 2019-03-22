<?php

class ProdutoProduto 
{
   private $codigo,$titulo,$imagem,$descri,$valor,$tipo;
	
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
   
	public function setImagem($value)
	{
		$this->imagem = $value;
	}
	public function getImagem()
	{
		return $this->imagem;
	}
	
	public function setDescri($value)
	{
		$this->descri = $value;
	}
	public function getDescri()
	{
		return $this->descri;
	}
	
	public function setValor($value)
	{
		$this->valor = $value;
	}
	
	public function getValor()
	{
		return $this->valor;
	}
	
	public function setTipo( $value )
	{
		$this->tipo = $value;
	}
	public function getTipo()
	{
		return $this->tipo;
	}
}



   


?>