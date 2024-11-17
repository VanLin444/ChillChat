const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");

form.onsubmit = (e) =>{
    e.preventDefault();
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./signup.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formDAta = new FormData(form);
    xhr.send(formDAta);
}