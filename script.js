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

    fetch("chat.php",{
        method:"POST",
        body:new URLSearchParams({message:msg})
    })
    .then(res=>res.text())
    .then(data=>{
        let b=document.createElement("div");
        b.className="message bot animate-message";
        b.innerHTML=`<img src="assets/baymax.png" class="avatar"><span>${data}</span>`;
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
