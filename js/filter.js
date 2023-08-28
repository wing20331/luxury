const mark = document.getElementById('mark');
const markFilter = document.getElementById('mark-filter');
const items = document.getElementById('cars-filter');
const AudiCheckbox = document.getElementById('Audi');
const bmwCheckbox = document.getElementById('bmw');
const LamborghiniCheckbox = document.getElementById('Lamborghini');
const astonCheckbox = document.getElementById('aston');
const PorscheCheckbox = document.getElementById('Porsche');
const rollsCheckbox = document.getElementById('rolls');
const horp1Checkbox = document.getElementById('400h');
const horp2Checkbox = document.getElementById('500h');
const horp3Checkbox = document.getElementById('600h');
const horp4Checkbox = document.getElementById('700h');
const horp5Checkbox = document.getElementById('800h');
const col1Checkbox = document.getElementById('white');
const col2Checkbox = document.getElementById('black');
const col3Checkbox = document.getElementById('orange');
const col4Checkbox = document.getElementById('blue');
const col5Checkbox = document.getElementById('gray');
const cars = document.querySelectorAll(".allCars-item");
const filter = document.querySelectorAll('.filter-menu');
var bool = false;
var bool2 = false;
var count = 1;



// mark.addEventListener("click", ()=> {

//     if(markFilter.style.display == "flex"){
//         markFilter.style.display = "none";
//         items.style.top = "0px";
//     }
//     else {
//         markFilter.style.display = "flex";
//         items.style.top = "-164px";
//     }
// });

mark.onclick = function(){
    if(markFilter.style.display == "flex"){
            markFilter.style.display = "none";
            items.style.top = "0px";
    }
    else{
        markFilter.style.display = "flex";
    items.style.top = "-164px";
    filter.forEach(function(carMark){
        if(!carMark.classList.contains('mark')){
            carMark.style.display = 'none';
        }
    })
    }
}

const power = document.getElementById('power');
const powerFilter = document.getElementById('power-filter');

power.onclick = function(){
    if(powerFilter.style.display == "flex"){
            powerFilter.style.display = "none";
            items.style.top = "0px";
    }
    else{
        powerFilter.style.display = "flex";
        items.style.top = "-140px";
        filter.forEach(function(carPower){
            if(!carPower.classList.contains('power')){
                carPower.style.display = 'none';
        }
    })
    }
}

const color = document.getElementById('color');
const colorFilter = document.getElementById('color-filter');

color.onclick = function(){
    if(colorFilter.style.display == "flex"){
            colorFilter.style.display = "none";
            items.style.top = "0px";
    }
    else{
        colorFilter.style.display = "flex";
        items.style.top = "-140px";
        filter.forEach(function(carColor){
            if(!carColor.classList.contains('color')){
                carColor.style.display = 'none';
        }
    })
    }
}

const price = document.getElementById('price');
const priceFilter = document.getElementById('price-filter');

price.onclick = function(){
    if(priceFilter.style.display == "block"){
            priceFilter.style.display = "none";
            items.style.top = "0px";
    }
    else{
        priceFilter.style.display = "block";
        items.style.top = "-52.5px";
        filter.forEach(function(carprice){
            if(!carprice.classList.contains('price')){
                carprice.style.display = 'none';
        }
    })
    }
}

const help = document.querySelector('.help-button');
const helpWindow = document.querySelector('.choiceAuto');

help.addEventListener("click", () => {
    helpWindow.style.display = "block";
})

document.addEventListener('keydown', function(e) {
	if( e.keyCode == 27 ){ // код клавиши Escape, но можно использовать e.key
		helpWindow.style.display = 'none';
	}
});
 


 AudiCheckbox.onclick = function(){
     if(!AudiCheckbox.checked){
         cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('audi')){
                 e4po4mack.style.display = 'block';
                 
             }
             else{
                e4po4mack.classList.toggle("allCars_first");
             }
         })
     }
     else{
         cars.forEach(function(e4po4mack){
             if(!e4po4mack.classList.contains('audi')){
                e4po4mack.style.display = 'none';
             }
             else{
                e4po4mack.classList.toggle("allCars_first");
             }
         })
     }
    
}

rollsCheckbox.onclick = function(){
    if(!rollsCheckbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('rolls')){
                e4po4mack.style.display = 'block';
                
            }
            else{
               e4po4mack.classList.toggle("allCars_first");
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('rolls')){
               e4po4mack.style.display = 'none';
            }
            else{
               e4po4mack.classList.toggle("allCars_first");
            }
        })
    }
   
}

bmwCheckbox.onclick = function(){
    if(!bmwCheckbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('bmw')){
                e4po4mack.style.display = 'block';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('bmw')){
               e4po4mack.style.display = 'none';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
   
}

LamborghiniCheckbox.onclick = function(){
    if(!LamborghiniCheckbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('Lamborghini')){
                e4po4mack.style.display = 'block';
            }
            else{
                if(!e4po4mack.classList.contains("allCars_first")) !e4po4mack.classList.toggle("allCars_first");
                bool = false;
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('Lamborghini')){
               e4po4mack.style.display = 'none';
                
                
            }
            else{

                if(!bool && e4po4mack.classList.contains("allCars_first")) {
                
                    bool = true;
                }
                else
                {
                    e4po4mack.classList.toggle("allCars_first");
                }
                
            }
        })
    }
   
}

astonCheckbox.onclick = function(){
    if(!astonCheckbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('aston')){
                e4po4mack.style.display = 'block';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('aston')){
               e4po4mack.style.display = 'none';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
   
}

PorscheCheckbox.onclick = function(){
    if(!PorscheCheckbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('Porsche')){
                e4po4mack.style.display = 'block';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('Porsche')){
               e4po4mack.style.display = 'none';
            }
            else{
                e4po4mack.classList.toggle("allCars_first");
             }
        })
    }
   
}

horp1Checkbox.onclick = function(){
    if(!horp1Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('400h')){
                e4po4mack.style.display = 'block';
            }
            
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('400h')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}
horp2Checkbox.onclick = function(){
    if(!horp2Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('500h')){
                e4po4mack.style.display = 'block';
            }
            else{

                e4po4mack.classList.remove("allCars_first");
                bool = false;
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('500h')){
               e4po4mack.style.display = 'none';
            }
            else{
                if(!e4po4mack.classList.contains("allCars_first") && !bool){
                    e4po4mack.classList.add("allCars_first");
                    bool = true;
               }
               else if(e4po4mack.classList.contains("allCars_first") && !bool){
                    bool2 = true
                    bool = true;
               }
               else{
                e4po4mack.classList.remove("allCars_first");
               }
            }
        })
    }
   
}
horp3Checkbox.onclick = function(){
    if(!horp3Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('600h')){
                e4po4mack.style.display = 'block';
            }
            else{
                count == 1;
                e4po4mack.classList.remove("allCars_first");
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('600h')){
               e4po4mack.style.display = 'none';
            }
            else{
                if(count == 1 || count / 5 == 0){
                    e4po4mack.classList.add("allCars_first");
                    count++;
                }
            }
        })
    }
   
}
horp4Checkbox.onclick = function(){
    if(!horp4Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('700h')){
                e4po4mack.style.display = 'block';
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('700h')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}
horp5Checkbox.onclick = function(){
    if(!horp5Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('800h')){
                e4po4mack.style.display = 'block';
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('800h')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}
col1Checkbox.onclick = function(){
    var count2 = 1;
    if(!col1Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('white')){
                e4po4mack.style.display = 'block';
            }
            else{
                count2 = 1;
                e4po4mack.classList.remove("allCars_first");
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('white')){
               e4po4mack.style.display = 'none';
            }
            else{
                if(count2 == 1 || count2 / 5 == 0 ){
                    e4po4mack.classList.add("allCars_first");
                    count2++;
                }
            }
        })
    }
   
}
col2Checkbox.onclick = function(){
    var count2 = 1;
    var bool2 = false;
    if(!col2Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('black')){
                e4po4mack.style.display = 'block';
            }
            else{
                count2 = 1;
                if(!bool2){
                    bool2 = true;
                }
                else{
                    e4po4mack.classList.remove("allCars_first");
                }
                
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('black')){
               e4po4mack.style.display = 'none';
            }
            else{
                if(count2 % 5 == 0 ){
                    e4po4mack.classList.add("allCars_first");
                    
                }
                count2++;
            }
        })
    }
   
}
col3Checkbox.onclick = function(){
    if(!col3Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('orange')){
                e4po4mack.style.display = 'block';
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('orange')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}
col4Checkbox.onclick = function(){
    if(!col4Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('blue')){
                e4po4mack.style.display = 'block';
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('blue')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}
col5Checkbox.onclick = function(){
    if(!col5Checkbox.checked){
        cars.forEach(function(e4po4mack){
           if(!e4po4mack.classList.contains('gray')){
                e4po4mack.style.display = 'block';
            }
        })
    }
    else{
        cars.forEach(function(e4po4mack){
            if(!e4po4mack.classList.contains('gray')){
               e4po4mack.style.display = 'none';
            }
        })
    }
   
}

butt.onclick = function() {
    var val1 = document.getElementById('num1').value;
    var val2 = document.getElementById('num2').value;
}


