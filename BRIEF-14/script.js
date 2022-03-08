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