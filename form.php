<?php ob_start(); ?>

<div class="card-panel" style="max-width: 500px">
	<h4 class="center-align">Contato</h4>
	<form id="formContato" action="controller/contatoController.php" method="post">
		<div class="form-group">
	    <label for="exampleInputEmail1">Nome:</label>
	    <input name="nome" id="nome" type="text" class="form-control" id="exampleInputEmail1" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Salário</label>
	    <input name="salario" id="salario" type="number" step="any" min=0 class="form-control" id="exampleInputPassword1" required>
	  </div>
	  <button type="submit" class="btn btn-primary">Enviar</button>
	</form>
	<br>
	<div id="msg">

	</div>
</div>

<script>
	$("#formContato").submit(function(evento){
		//Cancela o envio dos dados
		evento.preventDefault();

		$.ajax({
			url: $("#formContato").attr("action"),
			method: $("#formContato").attr("method"),
			data: $("#formContato").serialize(),
			success: function(retorno){
				$("#msg").html(retorno);
			}
		})
	});
</script>

<?php
	$conteudo = ob_get_contents();
	ob_end_clean();
	$titulo = "Contato";
	include "layout.php";
?>
