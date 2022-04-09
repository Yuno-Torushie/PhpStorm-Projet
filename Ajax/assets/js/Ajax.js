function chercher(){
    var xhr
    var saisie;
    xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if((xhr.readyState == 4) && (xhr.status == 200)){
            document.getElementById("output").innerHTML = xhr.responseText;
        }
    }
    alert("coucou");
    saisie = document.getElementById("code").value;
    xhr.open('GET', 'main.php?output='+saisie, true)
    xhr.send(null);
};