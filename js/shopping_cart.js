/*window.onload = function(){
    let items_in_cart= JSON.parse(localStorage.getItem('shopping_cart_items'))
    console.log('shopping cart testing');

    for(let i=0; i<items_in_cart.length;i++){
        console.log(items_in_cart[i].img); 
        //document.getElementsById('item_in_cart').innerHTML+=`<img src="${items_in_cart[i].img}" width="150px" height="210px"></img>`
        var element = document.getElementById('item_in_cart');
            if(element != null){
                element.innerHTML += `<img src="${items_in_cart[i].img}" width="5em" height="7em"></img>`;
            }
            else{
                element.innerHTML = `<p>Nothing here</p>`;
            }
    }
}*/
window.onload = function() {
    let items_in_cart = JSON.parse(localStorage.getItem('shopping_cart_items'));
    console.log('shopping cart testing');
  
    for (let i = 0; i < items_in_cart.length; i++) {
      console.log(items_in_cart[i].img); 
  
      var element = document.getElementById('item_in_cart');
  
      if (element != null) {
        element.innerHTML += `<img src="${items_in_cart[i].img}" width="5em" height="7em"></img>`;
      } else {
        console.log('The element with ID "item_in_cart" does not exist');
      }
    }
  };
  