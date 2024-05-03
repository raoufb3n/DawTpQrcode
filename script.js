//recuperation de l'input text 
const input=document.getElementById("input");
//recuperation du bouton
const button=document.getElementById("btn");
//recuperation de l'image
const image=document.getElementById("img");
//eventlistener sur le bouton
button.addEventListener("click",generate);
input.addEventListener("keydown",generate2);
//fonction generate
function generate(){
    if(input.value==""){
        alert("Veuillez entrer une URL");
    }else{
    image.src=" https://api.qrserver.com/v1/create-qr-code/?size=200x200&data="+input.value;
    }
}
function generate2(event){
    if(event.keyCode==13){
        if(input.value==""){
            alert("Veuillez entrer une URL");
        }else{
        image.src=`https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${input.value}`;
        }
    }
}


 