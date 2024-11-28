// import './bootstrap';

var titulo = document.getElementById('titulo').value;

var btnCadastrar = document.getElementById('btnCadastrar')

btnCadastrar.addEventListener("click", function() {
    if(titulo == ''){
        alert('Informe o titulo!');
    }
});

