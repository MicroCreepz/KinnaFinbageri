if(document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else{
    ready()
}

function ready(){
    var removecartitembtn = document.getElementsByClassName('btn_remove')
    for (var i = 0; i < removecartitembtn.length; i++) {
        var button = removecartitembtn[i]
        button.addEventListener('click', removecartitem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('btn_shop') 
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
}

function purshaseClicked(event){
    alert('tack för att du beställde hos oss')
}

function removecartitem(event){
    var buttonclicked = event.target
    buttonclicked.parentElement.remove()
    updatecarttotal()
}

function addToCartClicked(event){
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('item-title')[0].innerText
    var price = shopItem.getElementsByClassName('price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('image')[0].innerHTML
    addItemToCart(title, price, imageSrc)
    updatecarttotal()
}

function addItemToCart(title, price, imageSrc){
    var cartRow = document.createElement('div')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for(var i = 0; i < cartItemNames.length; ++i) {
        if(cartItemNames[i].innerText == title) {
            alert('Detta objektet finns redan i din kundvagn.')
            return
        }
    }
    var cartRowContents = `
    <div class="cart-item">
        <span class="fas fa-times btn_remove"></span>
        ${imageSrc}
        <div class="content">
            <h3 class="cart-item-title">${title}</h3>
            <div class="price">${price}</div>
            <div class="quantity-container">
                <button id="btn_minus" onclick="stepper(this)"> - </button>
                <input id="my-input" class="cart-quantity" 
                type="number" value="1" min="1" max="50" step="1" readonly>
                <button id="btn_plus" onclick="stepper(this)"> + </button>
            </div>
        </div>
    </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn_remove')[0].addEventListener('click', removecartitem)
    updatecarttotal()
}

function updatecarttotal(){
    var cartitemscontainer = document.getElementsByClassName('cart-items')[0];
    var CartItems = cartitemscontainer.getElementsByClassName('cart-item');
    var total = 0;
    for (let i = 0; i < CartItems.length; i++) {
        var cartprice = CartItems[i].getElementsByClassName('price')[0]
        var quantity = CartItems[i].getElementsByClassName('cart-quantity')[0].value
        var price = parseFloat(cartprice.innerText.replace('kr', ''))
        total = total + (price * quantity)
    }
    document.getElementsByClassName('total')[0].innerText = total + 'kr'
    document.getElementsByClassName('lenght-text')[0].innerText = CartItems.length
}
function stepper(btn){
    const myInput = document.getElementById("my-input");
    var id = btn.getAttribute('id')
    var min = myInput.getAttribute('min')
    var max = myInput.getAttribute('max')
    var val = myInput.getAttribute('value')
    var step = myInput.getAttribute('step')
    var calcstep = (id == "btn_plus") ? (step*1) : (step * -1)
    var newvalue = parseInt(val) + calcstep;
    
    if(newvalue >= min && newvalue <= max){
        myInput.setAttribute('value', newvalue);
    } 

    updatecarttotal()
}

