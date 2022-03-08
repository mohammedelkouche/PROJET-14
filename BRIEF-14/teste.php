<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <input type="button" onclick="decrementValue()" value="-" />
        <input type="text" name="quantity" value="1"  size="1"  id="number" />
        <input type="button" onclick="incrementValue()" value="+" />
    </div>
        <script>
            function incrementValue()
                {
                    var value = parseInt(document.getElementById('number').value);
                    value = isNaN(value) ? 0 : value;
                    // if(value<100){
                        value++;
                            document.getElementById('number').value = value;
                    // }
                }
                function decrementValue()
                {
                    var value = parseInt(document.getElementById('number').value);
                    value = isNaN(value) ? 0 : value;
                    if(value>1){
                        value--;
                            document.getElementById('number').value = value;
                    }

                }
        </script>
</body>
</html>