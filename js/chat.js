const form = document.querySelector(".typing-area");
inputField = form.querySelector(".input-field");
sendBtn = form.querySelector("button");

form.onsubmit = (e) =>{
    e.preventDefault();
}

sendBtn.onclick =()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formData = new FormData(form);
    xhr.send(formData);
}