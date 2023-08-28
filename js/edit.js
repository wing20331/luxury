document.getElementById('profile_edit').onclick = function () {
    document.getElementById('profile_edit').style.display = "none";
    document.getElementById('profile_save').style.display = "block";
};

document.getElementById('profile_save').onclick = function () {
    document.getElementById('profile_save').style.display = "none";
    document.getElementById('profile_edit').style.display = "block";
};