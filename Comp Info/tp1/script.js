function alerte(){
    alert("ATTENTION NE PAS MODIFIER !")
}
let i=0;
function OnclickButton(){
    let button = document.getElementById("bouton");
    if(i === 0) {
        i=1;
        let text = "Non mais tu as cru quoi?";
        button.textContent = text;
    }else{
        i=0;
        let text ="tu sais lire !";
        button.textContent = text;
    }
    button.style.backgroundColor = getRandomColor();
    button.style.color = getRandomColor();
}
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function changeColor(){
    let menu = document.getElementById("menu");
    menu.style.color = getRandomColor();
}