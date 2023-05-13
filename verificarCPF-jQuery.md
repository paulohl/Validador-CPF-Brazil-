Inclua os dois scripts em seu HTML, imediatamente antes de fechar a tag head, como na ilustração abaixo:

<head>
<title>Título da Página</title>
...
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
</head>


Em seguida, na linha seguinte da inclusão, inicialize a máscara com jQuery da seguinte forma:

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
</script>



Agora basta criar seu formulário e utilizar o atributo id='cpf' no campo de CPF:

<form name="form" method="post" action="">
	<input name="cpf" type="text" id="cpf"/>
</form>

Pronto! A máscara de CPF já estará funcionando! Note que o script já impede a digitação de caracteres diferentes de números. Tente pressionar no campo de exemplo abaixo letras, ponto, traço ou outros caracteres especiais e verifique como o script se comporta.

Caso o usuário interrompa a digitação sem preencher os 11 números necessários e mude de campo, o script automaticamente limpa o valor preenchido assumindo uma condição de erro.
