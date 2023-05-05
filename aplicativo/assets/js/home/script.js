
//Pega a ultima Categoria e deixa ocupando toda a largura
var categorias = document.querySelectorAll(".categoria")
var ultimaCategoria = categorias.length - 1
var decisaoCategoria = ultimaCategoria%2

if(decisaoCategoria == 0){

    categorias[ultimaCategoria].classList.toggle("ultimoItemImpar")

}



//Abre carrinho


var carrinhoIcon = document.querySelector('.carrinho')
var areaCarrinhoModal = document.querySelector('#areaModal')

carrinhoIcon.addEventListener("click", ()=>{
    areaCarrinhoModal.classList.toggle('desativo')
})

areaCarrinhoModal.addEventListener("click", ()=>{
    areaCarrinhoModal.classList.toggle('desativo')
})

