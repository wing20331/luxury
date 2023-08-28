const plus = document.getElementById('peculiarities-plus');
const hide = document.getElementById('peculiarities-hidden');

const plus1 = document.getElementById('rent-plus');
const hide1 = document.getElementById('rent-hidden');

const move = document.querySelector('.move');
const rent = document.querySelector('.menu-move');

plus.onclick = function () {

    if (!document.querySelector('.peculiarities-hidden')) {
        hide.classList.add('peculiarities-hidden');
        move.style.top = '5px';
        rent.style.top = '-100px';
        hide.style.transform = "translate(0px, 0px)";
        plus.style.transform = "rotate(45deg)"
    }
    else {
        hide.classList.remove('peculiarities-hidden');
        move.style.top = '-377px';
        rent.style.top = '-482px';
        hide.style.transform = "translate(0px, -100%)";
        plus.style.transform = "rotate(0deg)"
    }
}

plus1.onclick = function () {

    if (!document.querySelector('.rent-hidden')) {
        hide1.classList.add('rent-hidden');
        if (!document.querySelector('.peculiarities-hidden')) { rent.style.top = '-340px'; }
        else { rent.style.top = '45px'; }
        hide1.style.transform = "translate(0px, 0px)";
        plus1.style.transform = "rotate(45deg)"
    }
    else {
        hide1.classList.remove('rent-hidden');
        if (!document.querySelector('.peculiarities-hidden')) { rent.style.top = '-490px'; }
        else { rent.style.top = '-100px'; }
        hide1.style.transform = "translate(0px, -100%)";
        plus1.style.transform = "rotate(0deg)"
    }
}