window.onload = function(){
    document.getElementById('info').style.display = "none";
}
function searchValid() {

    var requete = new XMLHttpRequest();

    var url = "controller.php";

    var search = document.getElementById('search').value;

    var arg = "seachPersonne="+search;

    requete.open("POST",url,true);

    requete.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    requete.onreadystatechange = function(){

        if(requete.readyState == 4 && requete.status == 200){
            var donne = requete.responseText;
            ok = document.getElementById("trouve");
            ok.innerHTML = donne;

            const element = ok.children;
            for(var i = 0; i < element.length ; i++){
                if(search == element[i].value && element[i].value !=''){
                    document.getElementById('info').style.display = "block";

                }else{
                    document.getElementById('info').style.display = "none";
                }
             }
        }
    };
    requete.send(arg);
    document.getElementById("trouve").innerHTML = "processing..";

}

function FormValider() {
    var requete = new XMLHttpRequest();

    var url = "controller.php";

    var cni = document.getElementById('cni').value;
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var age = document.getElementById('age').value;

    var arg = "cni="+cni+"&prenom="+prenom+"&nom="+nom+"&age="+age;

    requete.open("POST",url,true);

    requete.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //requete.responseType = "json";;o

    requete.onreadystatechange = function(){
        if(requete.readyState == 4 && requete.status == 200){
            var donne = requete.responseText;
            ok = document.getElementById("resultat");
            ok.innerHTML = donne;
        }
    };
    requete.send(arg);
    document.getElementById("resultat").innerHTML = "processing..";

    setTimeout(function(){ 
        document.getElementById('notif').style.display = "none";
     }, 3000);
}


