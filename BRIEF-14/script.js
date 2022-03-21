const max = document.querySelectorAll(".max");
const min = document.querySelectorAll(".min");
var price = document.getElementsByClassName('price') ;
var subtotalproducts = document.getElementsByClassName('subtotalproducts');
var gtotal = document.getElementById('gtotal');
gt = 0 ;
// let quantity = document.querySelector('#quantity');
max.forEach((btn) => {
    btn.addEventListener("click", increment);
});
function increment() {
    const quantity = this.previousElementSibling.querySelector("input");
    quantity.value = Number(quantity.value) + 1;
    subtotal() ;
}
min.forEach((btn) => {
    btn.addEventListener("click", decrement);
});
function decrement() {
    const quantity = this.nextElementSibling.querySelector("input");
    if(quantity.value>=1){
        quantity.value = Number(quantity.value) - 1;
        subtotal();
    }
  
}
subtotal() ;
function subtotal(){
    gt = 0 ;
    for(i=0;i<price.length; i++){
        var quantities = document.getElementsByClassName('quantity');
        subtotalproducts[i].innerText=(price[i].value)*(quantities[i].value);
        gt += (price[i].value)*(quantities[i].value);
    }
    gtotal.innerText = gt ;
} 


// function incrementValue(btn){
//     let print = btn.previousSibling ;
//     print.value = Number(print.value)+1 ;

// }
// function decrementValue(btn){
//     let print = btn.nextSibling ;
//     print.value = Number(print.value)-1 ;

// }
/////////////////////////////

// let btnadd= document.querySelector('#add');
// let btnsutract = document.querySelector('#subtract') ;
// let quantity = document.querySelector('#quantity');
// gt = 0 ;                
// btnadd.addEventListener('click' , ()=>{
//     quantity.value = parseInt(quantity.value) + 1 ;
//     subtotal() ;

// })
// btnsutract.addEventListener('click' , ()=>{
//     quantity.value = parseInt(quantity.value) - 1 ;
//     subtotal() ;

// })

/////////////////////////// amine  disible input 

// disabled_inputs();

// function disabled_inputs() {
//     document.querySelectorAll('.disabling_btn_js').forEach(element => element.disabled = true);
// }
// disabled_quantity();

// function disabled_quantity() {
//     document.querySelectorAll('.quantity').forEach(element => element.disabled = true);
// }