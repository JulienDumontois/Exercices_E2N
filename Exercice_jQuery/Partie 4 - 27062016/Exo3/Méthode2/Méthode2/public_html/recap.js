 class Recap {
   constructor(nom, prenom, adresse_mail,telephone) {
       this.nom = nom;
       this.prenom = prenom;
       this.adresse_mail = adresse_mail;
       this.telephone = telephone;
   }

checkNumber(number_test){
    var number = new RegExp(/0[1-9](([-. ])?[0-9]){8}/);
    if (number.test(number_test) == true){
        return "Numéro correct";
    }
    else {
        return "Votre numéro n'est pas correcte";
    };
}
checkMail(mail_test){
    var email = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$/i);
    if (email.test(mail_test) == true){
        return "Mail correct";
    }
    else {
        return "Votre mail n'est pas valide";
    }
}
checkName(name_test){
    var name = new RegExp(/^[a-z-]+$/i);
    if (name.test(name_test) == true) {
        return "Nom / Prénom corrects";
    }
    else {
        return "Vous ne savez pas écrire votre Nom / Prénom";
    }
}
   verif() {
       if ((number.test(number_test) == true) && (email.test(mail_test) == true) && (name.test(name_test) == true)){
       return this.nom + ' ' + this.prenom + ' ' + this.adresse_mail + ' ' + this.telephone;
   }
   else {
       return 'Veillez a bien remplir le formulaire';
   }
   }
}



 /*if ((name.test(name_test) == true)  && (email.test(mail_test) == true) && (number.test(number_test) == true)){
       return this.nom + ' ' + this.prenom + ' ' + this.adresse_mail+ ' ' + this.telephone;
   }
   else {
       alert('Veillez a bien remplir le formulaire');
   }*/