var subtrai = document.querySelector('.subtrai')
var adiciona = document.querySelector('.adiciona')
var valor = document.querySelector('#valor')

var prod = 0

subtrai.addEventListener("click",()=>{
    if(prod > 0){
        prod = prod - 1
    }
    console.log(prod)

    valor.innerHTML = prod
})



adiciona.addEventListener("click",()=>{
   
        prod = prod + 1
        console.log(prod)

        valor.innerHTML = prod
})

