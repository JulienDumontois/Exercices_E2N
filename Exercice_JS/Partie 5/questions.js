var CreationTableauLangages = function () {
var myArray = (["Html","CSS","Java","PHP"]);
    return myArray
}

var CreationTableauNombres = function () {
var nombres = ([0,1,2,3,4,5]);
    return nombres;
}

var RemplacementElement = function (langages) {
var myArray = (["Html","CSS","Java","PHP"]);
myArray[2] = "Javascript";
  return myArray;
}

var AjoutElementLangages = function (langages) {
var myArray = (["Html","CSS","Java","PHP"]);
myArray[2] = "Javascript";
myArray.push("Ruby","Python");
  return myArray;
}

var AjoutElementNombres = function (nombres) {
var nombres = [0,1,2,3,4,5];
nombres.unshift(-2,-1);
  return nombres;
}

var SuppressionPremierElement = function (langages) {
var langages = ['Html', 'CSS', 'Javascript', 'PHP', 'Ruby', 'Python'];
langages.shift()
  return langages;
}

var SuppressionDernierElement = function (langages) {
var langages = ['CSS', 'Javascript', 'PHP', 'Ruby', 'Python'];
langages.pop();
  return langages;
}

var ConversionChaineTableau = function (reseaux_sociaux_chaine) {
var reseaux_sociaux_chaine = 'Facebook,Twitter,Google +,Viadeo,LinkedIn';
reseaux_sociaux = reseaux_sociaux_chaine.split(',');
  return reseaux_sociaux;
}

var ConversionTableauChaine = function (langages) {
var langages = ['CSS', 'Javascript', 'PHP', 'Ruby'];
langages_chaine = langages.join();
  return langages_chaine;
}

var TriTableau = function (reseaux_sociaux) {
var reseaux_sociaux = ['Facebook','Twitter', 'Google +','Viadeo','LinkedIn'];
reseaux_sociaux.sort();
  return reseaux_sociaux;
}

var InversionTableau = function (reseaux_sociaux) {
var langages = ['CSS','Javascript','PHP','Ruby'];
langages.reverse();
  return langages;
}
