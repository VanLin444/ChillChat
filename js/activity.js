var timeout = false;
function checkActivity() {
    clearTimeout(timeout);
    timeout = setTimeout(function () { 
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "php/logout.php?logout_id=" + userId);
        xhr.send();
     }, 60000);
     
}
document.addEventListener('keydown', checkActivity);
document.addEventListener('mousedown', checkActivity);
document.addEventListener('mousemove', checkActivity);
document.addEventListener("visibilitychange", checkActivity);
checkActivity();