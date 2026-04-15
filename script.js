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
    u.innerHTML=`<span>${msg}</span><img src="assets/user.png" class="avatar">`;
    chat.appendChild(u);

    // Show typing indicator
    let t=document.createElement("div");
    t.className="message bot animate-message";
    t.innerHTML=`<img src="assets/logo.png" class="avatar"><span class="typing"><div class="dot"></div><div class="dot"></div><div class="dot"></div></span>`;
    chat.appendChild(t);
    chat.scrollTop=chat.scrollHeight;

    fetch("chat.php",{
        method:"POST",
        body:new URLSearchParams({message:msg})
    })
    .then(res=>res.text())
    .then(data=>{
        t.remove(); // Remove indicator

        let b=document.createElement("div");
        b.className="message bot animate-message";
        b.innerHTML=`<img src="assets/logo.png" class="avatar"><span>${data}</span>`;
        chat.appendChild(b);

        chat.scrollTop=chat.scrollHeight;
    });

    input.value="";
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
