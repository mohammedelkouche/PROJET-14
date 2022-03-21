// function incrementValue(btn){
//     let print = btn.previousSibling ;
//     print.value = Number(print.value)+1 ;

// }
// function decrementValue(btn){
//     let print = btn.nextSibling ;
//     print.value = Number(print.value)-1 ;

// }
let btnadd= document.querySelector('#add');
let btnsutract = document.querySelector('#subtract') ;
let quantity = document.querySelector('#quantity');
btnadd.addEventListener('click' , ()=>{
    quantity.value = parseInt(quantity.value) + 1 ;
})
btnsutract.addEventListener('click' , ()=>{
    quantity.value = parseInt(quantity.value) - 1 ;
})

// var price = document.getElementsByClassName('price') ;
// var quantity = document.getElementsByClassName('quantity') ;
// var subtotalproducts = document.getElementsByClassName('subtotalproducts');
// var gtotal = document.getElementById('gtotal');
// gt = 0 ;                
// function incrementValue()
//                 {
//                     var value = parseInt(document.getElementById('quantity').value);
//                     value = isNaN(value) ? 0 : value;
//                     // if(value<100){
//                         value++;
//                             document.getElementById('quantity').value = value;
//                             subtotal() ;
//                     // }
//                 }
// function decrementValue()
// {
//     var value = parseInt(document.getElementById('quantity').value);
//     value = isNaN(value) ? 0 : value;
//     if(value>1){
//         value--;
//             document.getElementById('quantity').value = value;
//             subtotal() ;
//     }

// }

// function subtotal(){
//     gt = 0 ;
//     for(i=0;i<price.length; i++){
//         subtotalproducts[i].innerText=(price[i].value)*(quantity[i].value);
//         gt += (price[i].value)*(quantity[i].value);
//     }
//     gtotal.innerText = gt ;
// } 
// subtotal() ;
/////////////////////////// amine  disible input 




// disabled_inputs();

// function disabled_inputs() {
//     document.querySelectorAll('.disabling_btn_js').forEach(element => element.disabled = true);
// }
// disabled_quantity();

// function disabled_quantity() {
//     document.querySelectorAll('.quantity').forEach(element => element.disabled = true);
// }