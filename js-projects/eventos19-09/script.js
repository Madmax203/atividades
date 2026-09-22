//first section click//

let messageNumber = document.getElementById("messageNumber")
let btnSum = document.getElementById("btnSum")
let btnClear = document.getElementById("btnClear")
let btnSubtract = document.getElementById("btnSubtract")
let counter = 0
btnSum.onclick = function() {
    counter++
    messageNumber.textContent = counter
    
    
}

btnClear.onclick = function() {
    counter = 0;
    messageNumber.textContent = counter
}

btnSubtract.onclick = function() {
    counter-- 
    messageNumber.textContent = counter
}



// section 2 mouseover mouseout //

let area = document.getElementById("areaMouse")
let mensagem = document.getElementById("resultadoMouse")

area.onmouseover = function() {
    area.style.backgroundColor = 'azure'
    area.style.color = 'orange'
    area.style.fontWeight = 'bold'
    mensagem.innerHTML = "O mouse entrou na área!!!"
}

area.onmouseout = function() {
    area.style.backgroundColor = ''
    area.style.color = ''
    area.style.fontWeight = ''
    mensagem.innerHTML = ''

}

// Section 3 keydown //

let entrada = document.querySelector("#campoTeclado")
let display = document.querySelector("#resultadoTeclado")

entrada.addEventListener("keydown", function(event){
    display.innerHTML = event.key
})

// Section 4 change //

let selecao = document.querySelector("#selecao")
