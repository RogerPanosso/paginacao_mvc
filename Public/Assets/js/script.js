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
		if(nome == "" || sobrenome == "" || email == "" || senha == "" || data_nascimento == "") {
			$("#resultCadastro").fadeIn().html("<span class='text-danger'>Preencha todos os campos por favor!</span>");
			setTimeout(function(){
				$("#resultCadastro").fadeOut();
			}, 4000);
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
				$("#resultCadastro").fadeIn().html(data);
				setTimeout(function(){
					$("#resultCadastro").fadeOut();
				}, 4000);
			},
			error:function(response) {
				window.alert(response);
				window.location.reload();
				return false;
			}
		});
	});
});

//seleciona no documento(página) class específica perante elemento HTML responsavel por editar
$(document).ready(function(){
	$(document).on("click", ".editar", function(){
		let id = $(this).data("id");
		if(id != "") {
			$.ajax({
				type:"POST",
				url:BASE_URL+"usuarios/editarUsuario/"+id,
				dataType:"html",
				data:{id:id},
				success:function(data) {
					$("#resultEditar").html(data);
				},
				error:function(response) {
					window.alert(response);
					window.location.reload();
					return false;
				}
			});
		}
	});
});
