function increment()
{
    var value = parseInt(document.getElementById('quantity').value, 10);
    if (value<10){
        value++;
        document.getElementById('quantity').value = value;
    }
}
function decrement()
{
    var value = parseInt(document.getElementById('quantity').value);
    if (value>1){
        value--;
        document.getElementById('quantity').value = value;
    }

}
