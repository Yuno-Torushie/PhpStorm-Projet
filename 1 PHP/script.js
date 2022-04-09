function addElementToList() {
    var ol = document.getElementById("ma-liste");
    var li = document.createElement("li");
    var textValue = document.getElementById("tache").value;
   
    li.setAttribute("onclick", "remove(this)");
    
    if(textValue !== ""){
        if("motdepasse" == "confirmemotdepasse"){
            li.appendChild(document.createTextNode(jsUcfirst(textValue)));
            ol.appendChild(li);
            document.getElementById("tache").value = '';
        }        
        else{
            alert("mot de passe non identique");
        }
    }
}

function remove(elem){
    elem.parentNode.removeChild(elem);
}

function jsUcfirst(string){
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function submitOnEnter(){
    if(event.keyCode == 13){
        addElementToList();
    }
}

(function(){
    (':text').bind('keydown',function(e){//on keydown for all textboxes  
        if(e.keyCode==13)e.preventDefault(); //if this is enter key  
    });  
});

const eye = document.querySelector(".feather-eye");
const eyeoff = document.querySelector(".feather-eye-off");
const passwordField = document.querySelector("input[type=password]");

eye.addEventListener("click", () => {
  eye.style.display = "none";
  eyeoff.style.display = "block";
  passwordField.type = "text";
});

eyeoff.addEventListener("click", () => {
  eyeoff.style.display = "none";
  eye.style.display = "block";
  passwordField.type = "password";
});