const ysl = document.getElementById('ysl');
const yslBlock = document.getElementById('yslBlock');
const yslImg = document.getElementById('yslImg');

ysl.onclick = function(){
    if(yslBlock.style.display == 'flex'){
        yslBlock.style.display = 'none';
        yslBlock.style.position = 'absolute';
        yslImg.style.rotate = '0deg';
    }
    else{
        yslBlock.style.display = 'flex';
        yslBlock.style.position = 'relative';
        yslImg.style.rotate = '-45deg';
    }
}

const dop = document.getElementById('dop');
const dopBlock = document.getElementById('dopBlock');
const dopImg = document.getElementById('dopImg');

dop.onclick = function(){
    if(dopBlock.style.display == 'flex'){
        dopBlock.style.display = 'none';
        dopBlock.style.position = 'absolute';
        dopImg.style.rotate = '0deg';
    }
    else{
        dopBlock.style.display = 'flex';
        dopBlock.style.position = 'relative';
        dopImg.style.rotate = '-45deg';
    }
}

const dos = document.getElementById('dos');
const dosBlock = document.getElementById('dosBlock');
const dosImg = document.getElementById('dosImg');

dos.onclick = function(){
    if(dosBlock.style.display == 'flex'){
        dosBlock.style.display = 'none';
        dosBlock.style.position = 'absolute';
        dosImg.style.rotate = '0deg';
    }
    else{
        dosBlock.style.display = 'flex';
       dosBlock.style.position = 'relative';
        dosImg.style.rotate = '-45deg';
    }
}

const ter = document.getElementById('ter');
const terBlock = document.getElementById('terBlock');
const terImg = document.getElementById('terImg');

ter.onclick = function(){
    if(terBlock.style.display == 'flex'){
        terBlock.style.display = 'none';
        terBlock.style.position = 'absolute';
        terImg.style.rotate = '0deg';
    }
    else{
        terBlock.style.display = 'flex';
        terBlock.style.position = 'relative';
        terImg.style.rotate = '-45deg';
    }
}

const bro = document.getElementById('bro');
const broBlock = document.getElementById('broBlock');
const broImg = document.getElementById('broImg');

bro.onclick = function(){
    if(broBlock.style.display == 'flex'){
        broBlock.style.display = 'none';
        broBlock.style.position = 'absolute';
        broImg.style.rotate = '0deg';
    }
    else{
        broBlock.style.display = 'flex';
        broBlock.style.position = 'relative';
        broImg.style.rotate = '-45deg';
    }
}

const zap = document.getElementById('zap');
const zapBlock = document.getElementById('zapBlock');
const zapImg = document.getElementById('zapImg');

zap.onclick = function(){
    if(zapBlock.style.display == 'block'){
        zapBlock.style.display = 'none';
        zapBlock.style.position = 'absolute';
        zapImg.style.rotate = '0deg';
    }
    else{
        zapBlock.style.display = 'block';
        zapBlock.style.position = 'relative';
        zapImg.style.rotate = '-45deg';
    }
}