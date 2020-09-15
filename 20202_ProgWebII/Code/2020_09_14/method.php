<?php

echo '$_REQUEST ';
print_r($_REQUEST);
echo '<br/>';

echo '$_GET ';
print_r($_GET);
echo '<br/>';

echo '$_POST ';
print_r($_POST);
echo '<br/>';

$parametro = $_REQUEST["parametro"];

?>
<html>

<body>
	<form action="method.php?parametro=veioViaFormulario" method="POST">
		<p>
			Login: <input type="text" name="login" />
		</p>
		<p>
			Senha: <input type="password" name="senha" />
		</p>
		<p>
			<input type="submit" value="Enviar" />
		</p>
	</form>
</body>

</html>