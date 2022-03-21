<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="input">
    <input type="button" id="subtract" class="crementation"  value="-" " />
    <input type="text" name="quantity" value="1"  size="1"  id="quantity" />
    <input type="button"id="add" class="crementation"  value="+" "/>
</div>
<script>
    let btnadd= document.querySelector('#add');
let btnsutract = document.querySelector('#subtract') ;
let quantity = document.querySelector('#quantity');
btnadd.addEventListener('click' , ()=>{
    quantity.value = parseInt(quantity.value) + 1 ;
})
btnsutract.addEventListener('click' , ()=>{
    quantity.value = parseInt(quantity.value) - 1 ;
})
</script>
</body>
</html>