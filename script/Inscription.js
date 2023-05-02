var test1, test2, test3, test4, test5;
function test(){
    if (test1 && test2 && test3 && test4 && test5){
        document.getElementById('inscrire').disabled = false;
        
    }
    
}

function verifNom() {
    var Nom = document.getElementById('Nom').value;
    var regex = /^[a-zA-Z\-].{2,100}$/;
    if (Nom.match(regex)){
        //Mettre la 1ere lettre en maj
        Nom = document.getElementById('Nom').style.backgroundColor = 'lightgreen';
        var erreurNom = document.getElementById('erreurNom');
        erreurNom.innerHTML = "";
        test1 = true;
    }
    else 
    {
        Nom = document.getElementById('Nom').style.backgroundColor = '#FFCCCB';
        var erreurNom = document.getElementById('erreurNom');
        erreurNom.innerHTML = "<font color = red> Attention, rentrez au moins 3 lettres et uniquement des lettres !</font>";
        test1 = false;
    }
    test();
}

function verifPrenom() {
    var Prenom = document.getElementById('Prenom').value;
    var regex = /^[a-zA-Z\-].{1,100}$/;
    if (Prenom.match(regex)){
        //Mettre la 1ere lettre en maj
        Prenom = document.getElementById('Prenom').style.backgroundColor = 'lightgreen';
        var erreurPrenom = document.getElementById('erreurPrenom');
        erreurPrenom.innerHTML = "";
        test2 = true;
    }
    else 
    {
        Prenom = document.getElementById('Prenom').style.backgroundColor = '#FFCCCB';
        var erreurPrenom = document.getElementById('erreurPrenom');
        erreurPrenom.innerHTML = "<font color = red> Attention, rentrez au moins 2 lettres et uniquement des lettres !</font>";
        test2 = false;
    }
    test();
}

function verifMail() {
    var Mail = document.getElementById('Mail').value;
    var regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if (Mail.match(regex)){
        //Mettre la 1ere lettre en maj
        Mail = document.getElementById('Mail').style.backgroundColor = 'lightgreen';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "";
        test3 = true;
    }
    else 
    {
        Mail = document.getElementById('Mail').style.backgroundColor = '#FFCCCB';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "<font color = red> Attention, rentrez une adresse mail valide !</font>";
        test3 = false;
    }
    test();
}


function verifCfMail(){
    var Mail = document.getElementById('Mail').value;
    var CfMail = document.getElementById('CfMail').value;
    if(CfMail == Mail){
        CfMail = document.getElementById('CfMail').style.backgroundColor = 'lightgreen';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "";
        test4 = true;
    }
    else 
    {
        CfMail = document.getElementById('CfMail').style.backgroundColor = '#FFCCCB';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "<font color = red> Attention, rentrez la même adresse mail !</font>";
        test4 = false;
    }

    if (document.getElementById('CfMail').value == ""){
        CfMail = document.getElementById('CfMail').style.backgroundColor = '#FFCCCB';
        var erreurCfMail = document.getElementById('erreurCfMail');
        erreurCfMail.innerHTML = "<font color = red>Attention, la case ne peut pas être vide !</font>";
        test4= false;
    }
    test();
}

function TestMdp_verif() {
    var diverreurMdp=document.getElementById("erreurMdp");  
    
    var mdp=document.getElementById("mdp").value;
    var mdp_verif=document.getElementById("mdp_verif").value;


    if (mdp!=mdp_verif) {
        mdp = document.getElementById('mdp_verif').style.backgroundColor = '#FFCCCB';
        diverreurMdp.innerHTML="<font color = red>Attention, votre mot de passe ne correspond pas à celui renseigné !</font>";
        test5 = false;
    }
    else {
        CfMail = document.getElementById('mdp_verif').style.backgroundColor = 'lightgreen';
        var diverreurMdp = document.getElementById('diverreurMdp');
        diverreurMdp.innerHTML="";
        test5 = true;
    }
    test();
}





var nom = ""
var prenom = ""
var mail = ""



var checkLetter = /^[a-zA-Z- ]+$/;
var checkNumber = /^[0-9]+$/;
var checkFloat = /^[0-9-.]+$/;
var checkMail= /^([a-zA-Z0-9_-]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;