const profile = document.getElementById('profile');
const rent = document.getElementById('rent');
const docs = document.getElementById('docs');

const rentWrapper = document.querySelector('.wrapper_rent');
const profileWrapper = document.querySelector('.wrapper_profile');
const docsWrapper = document.querySelector('.wrapper-docs');

rent.onclick = function () {
    rentWrapper.style.display = "block";
    profileWrapper.style.display = "none";
    docsWrapper.style.display = "none";
}

profile.onclick = function () {
    rentWrapper.style.display = "none";
    profileWrapper.style.display = "block";
    docsWrapper.style.display = "none";
}

docs.onclick = function() {
    rentWrapper.style.display = "none";
    profileWrapper.style.display = "none";
    docsWrapper.style.display = "block";
}