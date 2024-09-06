// document.getElementById('btn1').addEventListener('click', function() {
//     alert('Botão clicado!');
// });

// document.getElementById('div1').addEventListener('click', function() {
    
//     this.innerText = '<p>Oi eu sou um paragrafo</p>';


// });

// document.getElementById('img1').addEventListener('mouseover', function() {
//     alert('Mouse sobre a img');
// });

// document.getElementById('p1').addEventListener('click', function() {
//     this.style.backgroundColor = '#8908';
// });

// document.getElementById('div1').addEventListener('mousemove', function(event) {
//     const x = event.pageX;
//     const y = event.pageY;

//     alert('Posição x: ' + x + '- Posição Y: ' + y)
// });

// elemento.addEventListener(tipoDeEvento, função, [opções]);

// const btn1 = document.getElementById('btn1')
// btn1.addEventListener('click',function(event){
//     alert('Botão Clicado')
// })

// btn1.addEventListener('click',imprimirMensagem)

// function imprimirMensagem(){
//     alert('Botão Clicado')
// }

// document.addEventListener('keypress', function(event){
//     let tecla = event.key
//     document.getElementById('mostrarTecla').textContent = `Tecla Pressionada é: ${tecla}`
// })

// document.addEventListener('keydown', function(event){
//     let tecla = event.key
//     if(tecla === 'Escape'){
//         alert('Tecla Esc foi pressionada')
//     }
    
// })

// document.addEventListener('keydown', function(event){
//     let codigo = event.keyCode
//     alert('Código da tecla é: ' + codigo)
    
// })


// const elementos = document.querySelectorAll('*');

// elementos.forEach(elemento => {
//     elemento.addEventListener('keydown',function(event){
//         console.log('Tecla pressionada: ',event.key)
//     })
// })


// setInterval(callback,interval)

// setInterval(() => {
//     console.log('Isso será mostrado a cada dois segundos')
// },2000)

// setInterval(imprimirTexto,2000)

// function imprimirTexto(){
//     console.log('Isso será mostrado a cada dois segundos')
// }

// setTimeout(callback,delay)

// setTimeout(imprimirTexto,3000)

// setInterval(()=>{
//     console.log('Essa msg a ser mostrada')
// },2000)

// setInterval(mostrarMensagem,2000)
// setTimeout(mostrarMensagem,5000)

// var segundos = 0
// var meuIntervalo = setInterval(()=>{
//     segundos ++
//     if(segundos == 3 || segundos == 6 || segundos == 9){
//         mostrarMensagem()
//     }
//     setTimeout(pararIntervalo,10000)
// },1000)

// function pararIntervalo(){
//     clearInterval(meuIntervalo)
// }



// function outraFuncao(segundo){
//     console.log('Execução de outra função: '+ segundos)
// }

// var segundos = 0
// var meuIntervalo = setInterval(()=>{
//     segundos ++
//     if(segundos == 1){
//         mostrarMensagem(segundos)
//     }
//     if(segundos % 4 == 0){
//         outraFuncao(segundos)
//     }
// },4000)



// function somar(){
//     let soma = numero1 + numero2
//     return soma
// }

// function somar(numero1,numero2){
//     return numero1 + numero2
// }

// function somar(numero1,numero2,numero3 = 0){
//     return numero1 + numero2 + numero3
// }


// var n1 = 107
// var n2 = 14
// // n3 = 1
// console.log(somar(n1,n2,n3))

// function mostrarMensagem(){
//     console.log('Essa msg a ser mostrada:')
// }
// function mostrarMensagem()  {
//     console.log('Essa msg a ser mostrada:')
// }

// // setInterval(mostrarMensagem,1000)

// setInterval(() => {
//     console.log('Essa msg a ser mostrada:')
// },1000)

// document.addEventListener('click',(evento)=>{

// })

// document.addEventListener('click',function(evento){

// })
// let peso = 4

// switch (peso) {
//     case 1:
//     case 2:
//     case 3:
//     case 4:
//         alert("O valor é 10R$")
//         break;  
//     case 5:
//     case 6:
//     case 7:
//     case 8:
//     case 9:
//     case 10:
//         alert("O valor é 20R$")
//         break;
//     default:
//         alert("O valor é 30R$")
//         break;
// }

// if(peso <= 5){
//     alert("O valor é 10R$")
// }
// else{
//     if(peso > 5 & peso <=10){
//         alert("O valor é 20R$")
//     }
//     else{
//         if(peso < 1){
//             alert("Peso inválido")
//         }
//         else{
//             alert("O valor é 30R$")
//         }
        
//     }
// // }

// let numeros = [3,5,6,7,8,9]
// let numerosDuplicados = []
// numeros.forEach(elemento => {
//     numerosDuplicados.push(elemento * 2)
  
// });

// console.log(numerosDuplicados.toString())


// let numerosInteiros = [3,5,6,7,8,9]
// let numerosEmString = []
// numerosInteiros.forEach(elemento => {
//     numerosEmString.push(elemento.toString())
  
// });

// console.log(numerosEmString.toString())


// let numeros2 = [3,5,6,4,7,8,4,9]
// let numeroBuscado = 4
// let quantidadeVezesNumeroBuscado = 0
// numeros2.forEach(elemento => {
//     if(numeroBuscado === elemento){
//         quantidadeVezesNumeroBuscado ++
//     }
    
// });

// console.log(quantidadeVezesNumeroBuscado)








// let precos = [200,450,800,1200,670]
// let novosPrecos = []

// precos.forEach(precoAtual => {
//     let desconto = precoAtual * 0.10
//     novosPrecos.push(precoAtual - desconto)
// });

// var nome = document.getElementById('nome').value

// saudacao(nome)


// function saudacao(nome){
//     console.log('Olá coleguinha ' + nome + 'como vai?')
// }


// const mensagens = ["Mensagem 1","Mensagem 2","Mensagem 3","Mensagem 4"];


// function atualizarMensagem() {
//     let div = document.getElementById('mensagem');
//     let index = Math.floor(Math.random() * mensagens.length);
//     div.textContent = mensagens[index];
// }


// setInterval(atualizarMensagem, 4000);

// let segundos = 11
// let intervalo = setInterval(() => {
//     segundos --
//     console.log(segundos)
//     if(segundos == 0){
//         clearInterval(intervalo)
//     }
// }, 1000);




// let Segundos = 11

// while(Segundos > 0){
//     Segundos --
//     console.log(Segundos)
// }

// let mensagem = 'Tecla A pressionada!'

// document.addEventListener('keypress',function(event){
//     if(event.key == 'A' || event.key == 'a'){
//         alert(mensagem)
//     }
// })


// document.addEventListener('keydown',function(event){
//     console.log(event.key)
// })

let paragrafo = document.getElementById('tecla')

// document.addEventListener('keypress',function(event){
//     let tecla = event.key
//     let conteudoParagrafo = paragrafo.textContent
//     paragrafo.textContent = conteudoParagrafo + tecla
// })

// let corpoPagina = document.getElementsByTagName('body')[0]

// corpoPagina.addEventListener('keypress',function(event){
//     let tecla = event.key
//     let conteudoParagrafo = paragrafo.textContent
//     paragrafo.textContent = conteudoParagrafo + tecla
// })

// var contagem = document.getElementById('contagem')
// var btn = document.getElementById('incrementar')

// var contador = 0

// function atualizarContagem(){
//     contador ++
//     contagem.textContent = contador
// }

// setInterval(atualizarContagem,3000)

// function exibirMsgAlerta(){
//     alert('Essa mesg a ser exibida após 3 segundos')
// }

// setTimeout(() => {
//     alert('Essa mesg a ser exibida após 3 segundos')
// },3000)


// setTimeout(function(){
//     alert('Essa mesg a ser exibida após 3 segundos')
// },3000)

// setTimeout(exibirMsgAlerta,3000)

// setTimeout(()=>{
//     let div = document.getElementById('texto')
//     div.textContent = 'Hoje o Hicaro foi o campeão do Teken 5'
// },5000)

setInterval(()=>{
    let div = document.getElementById('texto')
    div.textContent += 'Hoje o Hicaro foi o campeão do Teken 5 |'
},5000)






















































