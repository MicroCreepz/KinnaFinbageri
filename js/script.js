let navbar = document.querySelector('.header .navbar');
let menu = document.querySelector('#menu-btn');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let cart = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cart.classList.add('active');
}

document.querySelector('#close-form').onclick = () =>{
    cart.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    cnteredSlides:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var btn = document.getElementById('btn');
btn.addEventListener('click', function(e){
    e.preventDefault()
    var name = document.getElementById('name').value;
    var lastname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var product = document.getElementById('product').value;
    var number = document.getElementById('number').value;
    var message = document.getElementById('message').value;
    var body = 'namn: ' +name + lastname + '<br/> email: ' +email + '<br/> telefonnummer: ' +phone + '<br/> Produkt de vill ha' +number +product + '<br/> extra saker ' +message

    Email.send({
        Host : "liam.ryden@elev.ga.lbs.se",
        Username : "liamr.ryden@gmail.com",
        Password : "pskwofhhysqyylhq",
        To : 'liamr.ryden@gmail.com',
        From : mail,
        Body : body
    }).then(
      message => alert(message)
    );
})