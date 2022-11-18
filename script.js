let cart = document.querySelector('.cart-items-container');

document.querySelector('#cart_btn').onclick = () =>{
    cart.classList.add('activate');
}

document.querySelector('#close-form').onclick = () =>{
    cart.classList.remove('activate');
}