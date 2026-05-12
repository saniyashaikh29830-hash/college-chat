function sendMessage(){
    let input=document.getElementById("msg");
    let msg=input.value.trim();
    if(msg==="") return;

    // Hide welcome screen on first message
    let welcome = document.getElementById("welcomeScreen");
    if (welcome) welcome.classList.add('hidden');

    let chat=document.getElementById("chat");

    let u=document.createElement("div");
    u.className="message user animate-message";
    u.innerHTML=`<span>${msg}</span><img src="assets/student.png" class="avatar">`;
    chat.appendChild(u);
    chat.scrollTop = chat.scrollHeight;

    // Show typing indicator
    let typing = document.createElement("div");
    typing.className = "message bot typing-container animate-message";
    typing.id = "typing-indicator";
    typing.innerHTML = `<img src="assets/baymax.png" class="avatar"><div class="typing"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>`;
    chat.appendChild(typing);
    chat.scrollTop = chat.scrollHeight;

    fetch("chat.php", {
        method: "POST",
        body: new URLSearchParams({ message: msg })
    })
    .then(res => res.text())
    .then(data => {
        // Simulate a natural delay
        setTimeout(() => {
            // Remove typing indicator
            let indicator = document.getElementById("typing-indicator");
            if (indicator) indicator.remove();

            let b = document.createElement("div");
            b.className = "message bot animate-message";
            b.innerHTML = `<img src="assets/baymax.png" class="avatar"><span>${data}</span>`;
            chat.appendChild(b);

            chat.scrollTop = chat.scrollHeight;
        }, 1000);
    });

    input.value = "";
}


document.getElementById("msg").addEventListener("keydown",function(e){
    if(e.key==="Enter"){
        sendMessage();
    }
});
function quickAction(text) {
    document.getElementById("msg").value = text;
    sendMessage();
}
