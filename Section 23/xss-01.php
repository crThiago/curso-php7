<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php

$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';
if (isset($_POST["busca"])) {
	echo strip_tags($_POST["busca"], "<strong><br>")."<br>"; // remove as tag não especificadas no segundo atributo
	echo htmlentities($_POST['busca']); // transforma em texto as tags
} 