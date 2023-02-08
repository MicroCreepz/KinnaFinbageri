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

function SendEmail(){

    Email.send({
        SecureToken :"8490db62-6b08-4b1d-a411-674d4584359c",
        To : 'liamr.ryden@gmail.com',
        From : 'liamr.ryden@gmail.com',
        Subject : "En ny beställning",
        Body : "And this is the body"
    }).then(
        
      message => alert(message)
    );
}

/*
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
*/

const box_con = document.querySelector('.box-container')

let isdragstart = false, prevPageX, prevScrollLeft;

const dragstart = (e) => {
    isdragstart = true;
    prevPageX = e.pageX;
    prevScrollLeft = box_con.scrollLeft;
}

const dragging = (e) => {
    if(!isdragstart) return
    e.preventDefault();
    let positionDiff = e.pageX - prevPageX;
    box_con.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
    isdragstart = false;
}

box_con.addEventListener('mousedown', dragstart)
box_con.addEventListener('mousemove', dragging)
box_con.addEventListener('mouseup', dragStop)