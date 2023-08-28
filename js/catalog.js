const coupe = document.getElementById('coupe');
const coupeCars = document.getElementById('coupe-img');

const sportcars = document.getElementById('sportcars');
const sportcarsCars = document.getElementById('sportcars-img');

const cab = document.getElementById('сabriolet');
const cabCars = document.getElementById('cabriolet-img');

const suv = document.getElementById('SUV');
const suvCars = document.getElementById('SUV-img');

const van = document.getElementById('van');
const vanCars = document.getElementById('van-img');

coupe.addEventListener('mouseover', () => {
    coupeCars.style.opacity = '1';
    coupeCars.style.zIndex = '1';
})

coupe.addEventListener('mouseout', () => {
    coupeCars.style.opacity = '0.1';
    coupeCars.style.zIndex = '0';
})

sportcars.addEventListener('mouseover', () => {
    sportcarsCars.style.opacity = '1';
    sportcarsCars.style.zIndex = '1';
})

sportcars.addEventListener('mouseout', () => {
    sportcarsCars.style.opacity = '0.1';
    sportcarsCars.style.zIndex = '0';
})
cab.addEventListener('mouseover', () => {
    cabCars.style.opacity = '1';
    cabCars.style.zIndex = '1';
})

cab.addEventListener('mouseout', () => {
    cabCars.style.opacity = '0.1';
    cabCars.style.zIndex = '0';
})
suv.addEventListener('mouseover', () => {
    suvCars.style.opacity = '1';
    suvCars.style.zIndex = '1';
})

suv.addEventListener('mouseout', () => {
    suvCars.style.opacity = '0.1';
    suvCars.style.zIndex = '1';
})
van.addEventListener('mouseover', () => {
    vanCars.style.opacity = '1';
    vanCars.style.zIndex = '1';
})

van.addEventListener('mouseout', () => {
    vanCars.style.opacity = '0.1';
    vanCars.style.zIndex = '1';
})