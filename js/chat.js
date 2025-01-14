const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) =>{
    e.preventDefault();
}

sendBtn.onclick =()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = ""; // Очищаем поле ввода сообщения после отправки сообщения
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formData = new FormData(form);
    xhr.send(formData);
}

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formData = new FormData(form);
    xhr.send(formData);
},500);