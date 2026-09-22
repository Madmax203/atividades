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



// section 2 //



