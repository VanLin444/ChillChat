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
                scrollToBottom();
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
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }
    // Отправляем данные формы с помощью AJAX в PHP
    let formData = new FormData(form);
    xhr.send(formData);
},500);


function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}

chatBox.onmouseleave =()=>{
    chatBox.classList.remove("active");
}

chatBox.onmouseenter =()=>{
    chatBox.classList.add("active");
}