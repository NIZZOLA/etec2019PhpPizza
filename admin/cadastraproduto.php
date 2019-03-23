<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<div>
		<form action="gravaproduto.php" method="post">
		
        <span>Titulo:</span> <input type="text" name="titulo" value=""><br>
		<span>Descricao:</span> <textarea name="descricao"></textarea><br>
        <span>Valor:</span> <input type="text" name="valor" value=""><br>
        <span>Imagem:</span> <input type="text" name="imagem" value=""><br>
		<span>Tipo:</span> 
        <select name="tipo">
            <option value="1">Pizza</option>
            <option value="2">Refrigerante</option>
            <option value="3">Cerveja</option>
        </select><br>

		<input type="submit" value="Enviar">
		</form>
	
	</div>
</body>
</html>