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
            <button type="button" class="max" >+</button>
            <div class="withinDiv"><input type="number"  name="quantity" value="1"  size="1"   /> </div>
            <button type="button" class="max" >-</button>
            <div class="withinDiv"><input type="text"  name="quantity" value="1"  size="1"   /></div>
        </div>
    <!-- <div class="container">

    <div class="main">

    <button type="button" class="submit"> +  </button>
    <div class="withinDiv"><input type="number"  value="1"> </div>

    <button type="button" class="submit">+</button>
    <div class="withinDiv"><input type="number"  value="1"> </div>


    <button type="button" class="submit">+</button>
   <input type="number"  value="1"> 

    </div>

    </div> -->
<!-- <div class="input">
    <input type="button" id="subtract" class="crementation"  value="-" " />
    <input type="text" name="quantity" value="1"  size="1"  id="quantity" />
    <input type="button"id="add" class="crementation"  value="+" "/>
</div> -->
<script>
        const max = document.querySelectorAll(".max");
        const min = document.querySelectorAll(".min");
        let quantity = document.querySelector('#quantity');
        max.forEach((btn) => {
            btn.addEventListener("click", increment);
        });
        
        function increment() {
            const quantity = this.nextElementSibling.querySelector("input");
            quantity.value = Number(quantity.value) + 1;
        }
        min.forEach((btn) => {
            btn.addEventListener("click", decrement);
        });
        
        function decrement() {
            const quantity = this.nextElementSibling.querySelector("input");
            quantity.value = Number(quantity.value) - 1;
        }
//     const submit = document.querySelectorAll(".submit");

// submit.forEach((btn) => {
//   btn.addEventListener("click", increment);
// });

// function increment() {
//   const inp = this.nextElementSibling.querySelector("input");
//   inp.value = Number(inp.value) + 1;
// }
//     let btnadd= document.querySelector('#add');
// let btnsutract = document.querySelector('#subtract') ;
// let quantity = document.querySelector('#quantity');
// btnadd.addEventListener('click' , ()=>{
//     quantity.value = parseInt(quantity.value) + 1 ;
// })
// btnsutract.addEventListener('click' , ()=>{
//     quantity.value = parseInt(quantity.value) - 1 ;
// })
</script>
</body>
</html>