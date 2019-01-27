var cart = [];

function addItem(name, price, quantity = 1){
	var item = {name: name, price: price, quantity: quantity};
	//check for duplicate items
	for (var i in cart) {
		if (cart[i].name === item.name){
			cart[i].quantity += item.quantity;
			return;
		}
	}
	cart.push(item);
}

function getAddress (){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("customer_address").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "service.php?action=address", true);
        xmlhttp.send();
}