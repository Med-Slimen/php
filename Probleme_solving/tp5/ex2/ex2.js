function verif() {
    let nom=document.getElementById("nom").value;
    let prenom=document.getElementById("prenom").value;
    let adress=document.getElementById("adress").value;
    let ville=document.getElementById("ville").value;
    let code=document.getElementById("code").value;
    if (nom=="" || prenom=="" || adress=="" || ville=="" || code=="") {
        alert("tous les champs doivent etre non vide")
        return false;
    }
    else{
        return true;
    }
    
}
