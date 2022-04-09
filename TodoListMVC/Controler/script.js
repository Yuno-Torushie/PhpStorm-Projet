function addElementToList() {
    let ul = document.getElementById("ma-liste");
    let p = document.createElement("p");
    let textValue = document.getElementById("text").value;
    let pseudoValue = document.getElementById("pseudo").value;

    p.setAttribute("onclick", "remove(this)");

    if(textValue == "" || pseudoValue == ""){
        alert("Entrez un pseudo ou un text");
    }else{
        p.appendChild(document.createTextNode(jsUcfirst(pseudoValue+ " - " + textValue)));
        ul.appendChild(p);
        document.getElementById("text").value = '';
        document.getElementById("pseudo").value = '';
    }
S
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
