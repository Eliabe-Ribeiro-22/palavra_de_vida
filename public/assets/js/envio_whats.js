const GZAPPY_API_TOKEN = "e0b5cca5a30487ea3a50bd5b2166965825c35bb48a0fb2dfb74520aba4a8adcff3b54f9757c3aa7ae0e528f75e8d066c49b1149ac78e12f549ffb101097bb5b1";
const GZAPPY_INSTANCE_ID = "JYJBND8MTY70BNFB2XZDXRC0";
const GZAPPY_URL = "https://api.gzappy.com/v1/message/send-message";

async function envio_whats(){
	const nome  = document.getElementById("formContato-container-nome").value;
	const telefone = document.getElementById("formContato-container-telefone").value;
	const email = document.getElementById("formContato-container-email").value;
	const mensagem = document.getElementById("formContato-container-mensagem").value;
	const btnSubmit = document.getElementById("formContato-enviar");
	let campo; //telefone ou email
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
	}
	if (telefone == "") {
		campo = email;
	}
	try{
		alert("Enviando mensagem");
		btnSubmit.disabled = true;
		btnSubmit.innerHTML = "Enviando mensagem ...";
		const response = await fetch(GZAPPY_URL, {
	  		method: 'POST',
  			headers: {
	    		'Content-Type': 'application/json',
	    		"Authorization": `Bearer ${GZAPPY_API_TOKEN}`
  			},
  			body: JSON.stringify({
	    	instance_id: GZAPPY_INSTANCE_ID,
	    	message: [nome, telefone, email],
	    	phone: ["5549988477611", "5549988967075"]
  			})
		})
		const data = await response.json()
		console.log(data)
		alert("mensagem enviada com sucesso")
	}catch(error){
		alert("Erro ao enviar mensagem" . error);
	}
	finally{
		btnSubmit.disabled = false;
		btnSubmit.innerHTML = "Enviar mensagem";
	}
}