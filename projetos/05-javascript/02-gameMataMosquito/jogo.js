var altura = 0
var largura = 0
var vidas = 1
var tempo = 15

var criaMosquitoTempo = 1500

var nivel = window.location.search
nivel = nivel.replace('?','')

if(nivel === 'normal'){
	//1500
	criaMosquitoTempo = 1500
}else if(nivel === 'dificil'){
	// 1000
	 criaMosquitoTempo = 1000
}else if(nivel === 'chuclnorris'){
	//750
	criaMosquitoTempo = 750
}

// Ajusta tela do joga - recupera largura e altura
function ajustaTamanhoDoJogo(){
	 altura = window.innerHeight
	 largura = window.innerWidth
}

ajustaTamanhoDoJogo()
var cronometro = setInterval(function(){
	tempo -=1
	if(tempo < 0){
		clearInterval(cronometro)
		clearInterval(criaMosca)
		window.location.href =  'vitoria.html'

	}else{
		document.getElementById('cronometro').innerHTML = tempo
	}
	
	
},1000)

function posicaoRandomica(){

	// remover mosquito anterior caso exista
	if(document.getElementById('mosquito')){
		document.getElementById('mosquito').remove()

		if(vidas > 3){
			//game over
			window.location.href =  'fim_de_jogo.html'
		}else{
			document.getElementById('v'+vidas).src = "imagens/coracao_vazio.png"
			vidas++
		}

		

	}


	// posição random mosquito
	var posicaox = Math.floor(Math.random() * largura) - 90
	var posicaoy = Math.floor(Math.random() * altura) - 90

	 if(posicaox < 0){
	 	posicaox = 50
	 }
	 if(posicaoy < 0){
	 	posicaoy = 50
	 }

	console.log(posicaoy, posicaox)

	// criar elemento
	var mosquito = document.createElement('img')
	mosquito.src = 'imagens/mosca.png'
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
	mosquito.style.left = posicaoy + 'px'
	mosquito.style.top = posicaoy + 'px'
	mosquito.style.position = 'absolute'
	mosquito.id = 'mosquito'
	mosquito.onclick = function(){
		this.remove()
	}

	document.body.appendChild(mosquito)

}

function tamanhoAleatorio(){
	var classe = Math.floor(Math.random() * 3)


	switch(classe){
		case 0:
			return 'mosquito1'
		case 1:
			return 'mosquito2'
		case 2:
			return 'mosquito3'
	}

}

function ladoAleatorio(){
	var classe = Math.floor(Math.random() * 2)


	switch(classe){
		case 0:
			return 'ladoa'
		case 1:
			return 'ladob'
	}
}




