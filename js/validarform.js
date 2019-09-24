$(document).ready(function(){
	$('#Form').validate({
		rules : {
			user : {
				required : true,
				minlength : 3
			},
			email : {
				required : true,
				email : true
			},
			senha : {
				required : true,
				minlength : 8,
				
			},
			conf_senha : {
				required : true,
				equalTo : '#senha'
			}
		},
		messages : {
			nome : {
				required : 'Informe o seu nome.',
				minlength : 'O seu nome deve ter no mínimo 3 caracteres.'
			},
			email : {
				required : 'Informe o seu e-mail.',
				email : 'Informe um e-mail válido.'
			},
			senha : {
				required : 'Informe a sua senha.',
				minlength : 'A senha deve ter, no mínimo, 8 caracteres.',
				maxlength : 'A senha deve ter, no máximo, 20 caracteres.'
			},
			conf_senha : {
				required : 'Confirme a sua senha.',
				equalTo : 'As senhas não se correspondem.'
			}
		}
	});
});