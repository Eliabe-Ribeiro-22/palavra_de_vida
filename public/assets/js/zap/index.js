	let inpnome = document.getElementById("nome");
	let inpemail = document.getElementById("email");
	let inptelefone = document.getElementById("telefone");
	let mensagem = document.getElementById("mensagem");
	let btnSubmit = document.getElementById("send");

async function whats(){

	alert("ENTROU NA function")

	let nome = inpnome.value;
	let email = inpemail.value;
	let telefone = inptelefone.value;
	let mensagem = inpmensagem.value;

	if (nome == "" || telefone == "" || email == "" || mensagem == "") {
		alert("Preencha todos os campos");
		return;
	}

alert("NOME: ", nome)
alert("TELEFONE: ", telefone)
alert("EMAIL: ", email)
alert("MENSAGEM: ", mensagem)

	try{
	alert("TRY FUNCIONANDO")
	btnSubmit.disabled = true;
	btnSubmit.innerHTML = "Enviando mensagem ..."
	//codigo gzappy


	} catch(error){
		alert(error);
	} finally{
		btnSubmit.disabled = false;
		btnSubmit.innerHTML = "Enviar mensagem";
	}
}