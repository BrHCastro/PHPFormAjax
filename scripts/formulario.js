$(function(){
	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			url:include_path+'ajax/formulario.php',
			//Metodo de envio.
			method:'post',
			//Tipo de resposta.
			dataType:'json',
			//Opcional. Quais infomaçoes enviar para o formulario;
			data:form.serialize()
		}).done(function(data){
			if (data.sucesso){
				$('.result').slideToggle();
				setTimeout(function(){
					$('.result').slideToggle();
				},2000);
			} else if(data.contem){
				alert('O e-mail informado já consta em nossos registros!');
			} else {
				alert('Deu Caguéde!');
			}
		});
		return false;
	})
})

