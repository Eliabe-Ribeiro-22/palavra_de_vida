
let inpnome  = document.getElementById("formContato-container-nome")
let inptelefone = document.getElementById("formContato-container-telefone")
let inpemail = document.getElementById("formContato-container-email")
let inpmensagem = document.getElementById("formContato-container-mensagem")
let inpbtnSubmit = document.getElementById("formContato-enviar");
let inpcampo; //telefone ou email

async function envio_whats(){
	let nome = inpnome.value;
	let telefone = inptelefone.value;
	let email = inpemail.value;
	let mensagem = inpmensagem.value;
	
	

	if(nome == "" || typeof nome !== "string"){
		alert("Digite seu nome")
		return;
	}
	if(mensagem == "" || typeof mensagem !== "string"){
		alert("Digite sua mensagem")
		return;
	}
	if (email = "") {
		campo = telefone;
		alert("Campo recebeu telefone")
	}
	if (telefone == "") {
		campo = email;
		alert("Campo recebeu email")
	}
	try{
		alert(nome)
		alert(telefone)
		alert(email)
		alert(mensagem)
		alert("entrou try")
		const GZAPPY_API_TOKEN = "850cb51bda92317d7e9752188729a3f63cf4159b4ba7c3ab3e12dffd04f7bb88456ac483098704ee128b2b032d3342bbf58b398c7da6432efbfe6e49b9370354";
		const GZAPPY_INSTANCE_ID = "JYJBND8MTY70BNFB2XZDXRC0";
		const GZAPPY_URL = "https://api.gzappy.com/v1/message/send-message";

		alert("Enviando mensagem");
		btnSubmit.disabled = true;
		btnSubmit.innerHTML = "Enviando mensagem ...";
		alert("enviando mensagem ...")
		const response = await fetch(GZAPPY_URL, {
	  		method: 'POST',
  			headers: {
	    		'Content-Type': 'application/json',
	    		"Authorization": `Bearer ${GZAPPY_API_TOKEN}`
  			},
  			body: JSON.stringify({
	    	instance_id: GZAPPY_INSTANCE_ID,
	    	//message: [nome, campo],
	    	message: [nome],
	    	phone: ["5549988477611", "5549988967075"]
  			})
		})
		alert("envio de mensagem com algum staus code")
		const data = await response.json()
		console.log(data)
		alert(data)
		alert("mensagem enviada com sucesso")
	}catch(error){
		alert("Erro ao enviar mensagem" . error);
	}
	finally{
		btnSubmit.disabled = false;
		btnSubmit.innerHTML = "Enviar mensagem";
	}
}