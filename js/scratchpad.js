/*
 * Ceci est une ardoise JavaScript.
 *
 * Saisissez du code JavaScript, puis faites un clic droit ou sélectionnez à partir du menu Exécuter :
 * 1. Exécuter pour évaluer le texte sélectionné (Ctrl+R),
 * 2. Examiner pour mettre en place un objet Inspector sur le résultat (Ctrl+I), ou,
 * 3. Afficher pour insérer le résultat dans un commentaire après la sélection. (Ctrl+L)
 */
 
t = [1,2,3,4,5];
t.nom = "zugzug";

console.log(t.nom);

t.push(6, 7, 8, 9, 10);

t.unshift(-3 ,-2, -1, 0);

function afficherTab(tab) {
    console.log(tab.nom+" : {"+tab.join("|")+"}");
}

afficherTab(t);

function occurences(tab, val) {
    for (var i=cpt=0; i < tab.length; i++) {
        if (val === t[i]) cpt++ ;
    }
return cpt;
}    

console.log(occurences(t, 9));

function capitalize(s) {
    if (('a' <= s[0]) && (s[0] <= 'z')) {
        s = s[0].toUpperCase() + s.slice(1,s.length);
        return s;
    }
    return s;
}

chaine = "aze rty uio p";

console.log(capitalize(chaine));

console.log(chaine);

function decoupe(s) {
    return s.split(' ');
}

rep = decoupe(chaine);

rep.nom = "ayyyyyyyyyy lmao";

afficherTab(rep);

console.log(chaine);

u = [0.001,2.148,2.718,3.1416];

function oAfficherTab() {
    console.log(this.nom+" : {"+this.join("|")+"}");
}

Array.prototype.image = oAfficherTab ;

u.image() ;

function compter(val) {
    for (var i=cpt=0; i < this.length; i++) {
        if (val === this[i]) cpt++ ;
    }
return cpt;
}

u.occ =  compter;

console.log(u.occ(3.1416));

Array.prototype.compte = compter;

function rotationGauche() {
    var t = this;
    var aux=t[0];
    for (var i=1; i < t.length; i++) {
        t[i - 1] = t[i] ;
    }
    t[i - 1] = aux ;
return t;
}

Array.prototype.rot = rotationGauche;

