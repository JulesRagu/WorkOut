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
