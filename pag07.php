<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form name="avaliação" method="post" action="pag08.php">
		O que você achou do site?

		<br><br>

		<input type="radio" name="mb">Muito bom
		<input type="radio" name="b">Bom
		<input type="radio" name="r">Regular

		<br><br>

		Qual seção que você mais gostou?
		<br><br>

		<select>
			<option value="ec">Em cartaz</option>
			<option value="nc">No cinema</option>
			<option value="br">Blu Ray</option>

		</select>
		Outra:
		<input type="text" name="outra">
		<br><br>

		Digite seus comentários no campo abaixo:<br>
		<textarea name="coment" cols="80" rows="7">
			
		</textarea>

		<br><br>
		Diga-nos como entrar em contato com você:
		<br><br>

		Nome: 
		<input type="text" name="nome">
		<br><br>
		Email:
		<input type="text" name="email">
		<br><br>
		Fone:
		<input type="text" name="fone">

		<br><br>
		<input type="checkbox" name="aceito">Quero receber todas as novidades do site por email

		<br><br>

		<input type="submit" name="Enviar">
		<input type="reset" name="Limpar">
	</form>
</body>
</html>
