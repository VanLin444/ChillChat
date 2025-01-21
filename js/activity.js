var timeout = false;
function checkActivity() {
    clearTimeout(timeout);
    timeout = setTimeout(function () { 
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "php/logout.php");
        let data = "logout_id=" + userId;
        xhr.send(data);
     }, 5000);
}
document.addEventListener('keydown', checkActivity);
document.addEventListener('mousedown', checkActivity);
document.addEventListener('mousemove', checkActivity);
checkActivity();