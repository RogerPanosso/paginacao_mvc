//define codigo jquery selecionando no documento(página) id de form de cadastro de usuário
$(document).ready(function(){
	$("#formCadastroUser").on("submit", function(){
		event.preventDefault();
		let form_cadastro = document.querySelector("#formCadastroUser");
		let nome = $("#nome").val();
		let sobrenome = $("#sobrenome").val();
		let email = $("#email").val();
		let senha = $("#senha").val();
		let data_nascimento = $("#data_nascimento").val();
		if(nome == "" || nome.length <= 2) {
			window.alert("Por favor informe um nome valido");
			return false;
		}
		if(sobrenome == "") {
			window.alert("Por favor informe um sobrenome valido");
			return false;
		}
		if(email == "" || email.indexOf("@") == -1) {
			window.alert("Por favor informe um e-mail valido");
			return false;
		}
		if(data_nascimento == "") {
			window.alert("Por favor informe uma data de nascimento valida");
			return false;
		}
		//realiza requisição interna ajax
		$.ajax({
			type:"POST",
			url:BASE_URL+"ajaxcadastrouser/salvarCadastro",
			dataType:"html",
			data:{
				nome:nome,
				sobrenome:sobrenome,
				email:email,
				senha:senha,
				data_nascimento:data_nascimento
			},
			success:function(data) {
				$("#resultCadastro").html(data);
				$("#resultCadastro").css("transition", ".1s");
			},
			error:function(response) {
				window.alert(response);
				window.location.reload();
				return false;
			}
		});
	});
});