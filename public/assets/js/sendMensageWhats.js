function PegarValoresForm(){
	const nome  = document.getElementById("formContato-container-nome").value;
	const telefone = document.getElementById("formContato-container-telefone").value;
	const mensagem = document.getElementById("formContato-container-mensagem").value;

	if(nome == "" || typeof nome !== "string"){
		alert("Digite seu nome")
	}
		if(telefone == "" || typeof telefone !== "string"){
		alert("Digite seu nome")
	}
	if(mensagem == "" || typeof mensagem !== "string"){
		alert("Digite sua mensagem")
	}

	return {
		nome, telefone, mensagem
	}
}

async function EnviarWhatapi(nome, telefone, mensagem){
	/* ANTIGA API 
	const GZAPPY_URL = "https://api.gzappy.com/v1/message/send-message";		
	const response = await fetch(GZAPPY_URL, {
		method: "POST", 
		headers: {
		"Content-Type": "aplication/json",
		"Authorization": `Bearer ${GZAPPY_API_TOKEN}`
		}, 
		body: JSON.stringfy({
			instance_id: "O9PH5XEV7KUSKVMWQGMPSK5E",
			instance_token:,
			message: ["olá, tudo bem", "acesse o site"],
			phone: ""
		})
	});

	const data = await response.json();

	console.log(data); */

//Importação do módulo gzappy-js

import gzappy from "gzappy-js";

// Definição das variáveis de ambiente
const GZAPPY_API_TOKEN = "c7aabc5f80360250506a690da6e5db21e8af7f8bd55a9164d2b4425a36af3ca9868a736b2cf066e4d5456e96e5666181e1b990820bc588622778d2780fbbf399";
const GZAPPY_INSTANCE_ID = "O9PH5XEV7KUSKVMWQGMPSK5E";

// Criação de uma instância do gzappy client
const gClient = new gzappy({
  token: GZAPPY_API_TOKEN,
  instanceId: GZAPPY_INSTANCE_ID,
});

// Enviando mensagens
const messages = [nome, mensagem];
const phones = telefone;

gClient
  .sendMessage(messages, phones)
  .then((response) => console.log(response))
  .catch((error) => console.error(error));
}

function BotaoEnviarWhats(){
	const data = PegarValoresForm();

		if(data){
			await EnviarWhatapi(data.nome, data.telefone, data.mensagem)
		}

	console.log(data);
}