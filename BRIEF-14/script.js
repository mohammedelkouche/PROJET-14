var price = document.getElementsByClassName('price') ;
var quantity = document.getElementsByClassName('quantity') ;
var subtotalproducts = document.getElementsByClassName('subtotalproducts');
var gtotal = document.getElementById('gtotal');
gt = 0 ;                
function incrementValue()
                {
                    var value = parseInt(document.getElementById('quantity').value);
                    value = isNaN(value) ? 0 : value;
                    // if(value<100){
                        value++;
                            document.getElementById('quantity').value = value;
                            subtotal() ;
                    // }
                }
function decrementValue()
{
    var value = parseInt(document.getElementById('quantity').value);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('quantity').value = value;
            subtotal() ;
    }

}

function subtotal(){
    gt = 0 ;
    for(i=0;i<price.length; i++){
        subtotalproducts[i].innerText=(price[i].value)*(quantity[i].value);
        gt += (price[i].value)*(quantity[i].value);
    }
    gtotal.innerText = gt ;
} 
subtotal() ;