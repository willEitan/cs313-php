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