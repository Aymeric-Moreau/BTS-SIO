// 1er chapitre :
// déclaration d'une variable en javascript 

let variable = 2;

// modifier la valuer de la variable :
variable = 69;

// ajouter ou soustraire ou multiplié ou divisé un nombre d'une variable
variable -= 2
variable += 6
variable /= 2
variable *= 9

// ajouter ou soustraire ou multiplié ou divisé une varible d'une variable

variable = variable + variable - variable * variable /variable

//ajouter ou enlever 1 
variable++ 
variable--

// déclaration d'une constante 
const constante = 20;

//2éme chapitre 
// attention au virgule 
variable = 1+2; // donne 3 
variable = 0.1 + 0.2; // on attend 0.3 mais cela donne 0.3000000000004

// valeur booleans 

let variableTrue = true;
let variableFalse = false;

// variable string 
let chaine = "salut";
let chaine1 = 'bonjour'
let chaine2 = chaine + " " + chaine1; // donnera : salut bonjour 

// string interpolation (nouvelle facon de concatené des variable )
const chainenom = `jojo`;
const chaine2nom = `salut ${chainenom} !`;
console.log(chaine2nom); // donnera : salut jojo !

// afficher une valeur dans la console 
console.log('texte ou variable ');

//3éme chapitre 

//création d'une varible objet (plusieur chose dans une méme variable 

let manga ={

    nom: 'kingdom',
    auteur: 'yasuhisa hara',
    nonbreDeChap : 738,
    dejaLue: true
};

//acéder au données d'un objet 
let auteurKingdom = manga.auteur; // cela donnera yasuhisa hara

// pas compris la notation bracket 

// créer une class 

class livre{
    constructor(titre, auteur, chap){
        this.titre = nom;
        this.auteur = auteur;
        this.Chap = nonbreDeChap
    }
}
// créer des instance 

let monmanga = new livre("kingdom","yasuhisa hara",738);
//cette ligne créer l'objet suivant : 
/*{
    titre: "kingdom",
    auteur: "yasuhisa hara",
    nonbreDeChap: 738,
}*/

// créer une variable avec un tableau vide(1) ou remplis (2) dedans 

let tableauv = [];

let tableaur = ["Sarah Kate", "Audrey simon", "Will Alexander"]

// accéder au élément d'un tableau 

let firstGuest = tableaur[0]; // cela rentre dans la variable le contenue de la 1ére case ici "Sarah Kate" 
let thirdGuest = tableaur[2]; // ATTENTION LE TABLEAU COMMENCE PAR LA CASE  0
let undefinGuest = tableaur[12] //si l'on rentre un nombre qui n'est pas dans le tableau cela donne undefined

// si l'on met une variable dans un tableau ce n'est pas le contenue de la variable qui vas dans le tableau mais bien la variable elle méme donc si l'on modifie la variable le tableau prendra compte de la modification automatiquement 

// la propriété length indique le nombre d'élément que contient le tableau

let guests = ["Will Alexander", "Sarah Kate", "Audrey Simon"];
let howManyGuests = guests.length; // cela donne 3

//Pour ajouter un élément à la fin d'un tableau, utilisez sa méthode push :

guests.push("Tao Perkington");

// pour ajouter un élément au début du tableau : unshift

guests.unshift("Tao Perkington");

//supprimer le dernier élément du tableau : pop

guests.pop();

// environnement JSBin : execute je js comme python ligne par ligne dans l'ordre 

//pour inclure du js dans un doc html : <script srv="./script.js"></script

// Structure conditionnelles (if/else)

// 1 avec les valeur boolean (true/false) pas besoin de mettre de =, la 1ére partie correspond au true et le else correspond au false 

let UserloggedIn = true 
if (UserloggedIn){ // si UserloggedIn = true
    console.log("Utilisateur connecté !"); 
}else{ // si UserloggedIn = false
    console.log("Alert, intrus!");
}

// 2 les expression de comparaison : < = inférieur à ; <= = inférieur ou égal à ; == = égal à ; >= = supérieur ou égal à ; > = supérieur à ; != = différent de.

const numberOfSeats = 30;
const numberOfGuests = 25;
if (numberOfGuests == numberOfSeats) {
// tous les siége sont occupé
}else if (numberOfGuests < numberOfSeats) {
// autoriser plus d'invités
 } else {
// ne pas autoriser de nouveaux invités
}

// apeler une fonction 

"nom de la fonction"();

// il y a 2 sort d'égalité :
// l'égualité simple (==): il verifie la valeur mais pas le type donc 5 == "5" fonctionne  
// l'égualité stricte (===): il verifie la valeur et le type donc 5 === "5" n'est pas éguale a vraie 
// c'est pareil avec les inégalité : != !==

// condition multiple 

// && : le et logique pour vérifier si les 2 condition sont bonne 
// || : Ou logique pour verifier si ou moin une des 2 condition est vraie 
// ! : Non logique pour verifier si une condition n'est pas vraie 

// en js les variable déclarer avec let sont disponible uniquement dans leur "bloc" ({}) 

let userLoggedIn = true;

if (userLoggedIn) {
   let welcomeMessage = 'Welcome back!'; // la varaible est dans le bloc if
} else {
   let welcomeMessage = 'Welcome new user!';
}

console.log(welcomeMessage); // renvoie une erreur

// la meilleur solutin est de déclarer la variable avant de faire le if dans la portée exterieur 


// les instruction "switch"
// pour vérifier la valeur d'une variable par rapport a une liste de valeurs 
// voici 3 variable objet avec des valeur correpondant au nom, a l'age et au niveau du compte 

let firstUser = {
    name: "Will Alexander",
    age: 33,
    accountLevel: "normal"
};

let secondUser = {
    name: "Sarah Kate",
    age: 21,
    accountLevel: "premium"
};

let thirdUser = {
    name: "Audrey Simon",
    age: 27,
    accountLevel: "mega-premium"
};

// le switch est l'équivalent d'un if mais simplifier 
// ce switch selectionne le 1er user et le niveau du compte dans la variable objet du 1er user 
// si le niveau du compe est éguale a normal il affiche le phrase 'You have a normal account!' si elle est eguale a premium il affiche 'You have a premium account!' et ainsi de suite 
// on est obliger de mettre un break pour séparer il condition
// le default est la si il y a aucune valeur correspondant 

switch (firstUser.accountLevel) {
    case 'normal':
          console.log('You have a normal account!');
    
    break;
    case 'premium':
          console.log('You have a premium account!');
    
    break;
    case 'mega-premium':
          console.log('You have a mega premium account!');
    break;
    
    default:
          console.log('Unknown account type!');
    }

// les boucle 

// cette boucle for créer un variable i qui sert de compteur pour le nom d'éxécution de la boucle elle démare a 0
// tant que i < numberOfPassengers est vraie la boucle refait un passage et ajoute 1 a i a chaque fois dés que le relation est fausse que donc i est plus grand que numberOfPassengers la boucle s'arréte

const numberOfPassengers = 10;
for (let i = 0; i < numberOfPassengers; i++) {
   console.log("Passager embarqué !");
}

// la boucle for in 
// cette boucle s'éxécute le bomnre de fois qu'il y a de valeur dans le tableau 

const passengers = [
    "Will Alexander",
    "Sarah Kate'",
    "Audrey Simon",
    "Tao Perkington"
]

for (let i in passengers) {
   console.log("Embarquement du passager " + passengers[i]);
}

// la boucle for of 
// c'est pareil que for in mais de facon plus lisible vous recever simplement chaque élément dans l'ordre

const passengers1 = [
    "Will Alexander",
    "Sarah Kate",
    "Audrey Simon",
    "Tao Perkington"
]

for (let passengers1 of passengers1) {
   console.log("Embarquement du passager " + passenger);
}

//boucle while
// la boucle while vérifie si une condition est vraie si c'est la cas la boucle continue 

let seatsLeft = 10;
let passengersStillToBoard = 8;
let passengersBoarded = 0;

while (seatsLeft > 0 && passengersStillToBoard > 0) { // tant qu'il y a des passager et des siege vacant 
    passengersBoarded++; // un passager embarque
    passengersStillToBoard--; // donc il y a un passager de moins à embarquer
    seatsLeft--; // et un siège de moins
}

console.log(passengersBoarded); // imprime 8, car il y a 8 passagers pour 10 sièges


// les fonction 
// on définis la fonction 

function afficherDeuxValeur(valeur1, valeur2){
    console.log('Première valeur: ' + valeur1);
    console.log('Deuxième valeur: ' + valeur2);
}
// on execute la fonction 
afficherDeuxValeur(12, 'salut');

// cela affichera 
// Première valeur: 12
// Deuxième valeur: salut

// parcourire un tableau 
for (let elementDeTableau of monTableau) {
    console.log(elementDeTableau); //Affiche chaque élément individuellement
}

// retour sur les classe et les instance 

// la class BankAccount sock 2 valeur : owner(le nom) et balance(la solde)  
class BankAccount {
    constructor(owner, balance) {
       this.owner = owner;
       this.balance = balance;
    }
    showBalance() { // showbalnce est une methode de la classe quand ona l'appel de mettant le nom d'une instance existant cela exectute le code prévu
       console.log("Solde: " + this.balance + " EUR");
    }
 }

// exemple 
const newAccount = new BankAccount("Will Alexander", 500);

newAccount.showBalance(); // imprime "Solde: 500 EUR" à la console

// exmeple de méthode utilisable :
//La méthode   deposit()  affiche le montant du dépôt sur la console, ajoute le montant au solde de l'instance, puis appelle la méthode   showBalance()  de l'instance, imprimant ainsi le nouveau solde sur la console.
//La méthode   withdraw()  vérifie si le montant demandé est supérieur au solde actuel. Si c'est le cas, il refuse le retrait ; sinon, il l'autorise, en soustrayant le montant du solde et en affichant le nouveau solde sur la console.

showBalance(){
    console.log("Solde: " + this.balance + " EUR");
};

deposit(amount){
    console.log("Dépôt de " + amount + " EUR");
    this.balance += amount;
    this.showBalance();
};

withdraw(amount) {
    if (amount > this.balance) {
             console.log("Retrait refusé !");
    } else {
        console.log("Retrait de " + amount + " EUR");
        this.balance -= amount;
        this.showBalance();
    }
}

//les méthodes statiques c'est comme des boite a outil en gros c'est des fonction ranger dans une class

class BePolit{
    static seyHello(){
        console.log("Hello!") 
    }
}

BePolite.sayHello(); // imprime "Hello!""

// Toutes ces fonctionnalités pourraient être des fonctions, mais l'avantage d'utiliser des méthodes de classe statiques est par exemple de pouvoir les regrouper par catégorie ou par type.

// dans ce programe on fais les méme action pour plusieur utilisateur 

if (firstUser.online) {
    if (firstUser.accountType === "normal") {
        console.log("Hello " + firstUser.name + "!");
    } else {
       console.log("Welcome back premium user " + firstUser.name + "!");
    }
    
    }
    if (secondUser.online) {
    if (secondUser.accountType === "normal") {
        console.log("Hello " + secondUser.name + "!");
    } else {
       console.log("Welcome back premium user " + secondUser.name + "!");
    }
    }
    
    if (thirdUser.online) {
    if (thirdUser.accountType === "normal") {
        console.log("Hello " + thirdUser.name + "!");
    } else {
       console.log("Welcome back premium user " + thirdUser.name + "!");
    }
    }

// pour simplifier on peut factoriser le programme dans une fonction 

const sendWelcomeMessageToUser = (user) => {
    if (user.online) {
    if (user.accountType === "normal") {
           console.log("Hello " + user.name + "!");
    } else {
          console.log("Welcome back premium user " + user.name + "!");
    }
    }
    }
    
    sendWelcomeMessageToUser(firstUser);
    
    sendWelcomeMessageToUser(secondUser);
    
    sendWelcomeMessageToUser(thirdUser);


// les test sont vraiment important car cela permer trouver d'ou vien le probléme beaucoup plus facilement  

// fonction récursive : Une fonction qui s'apelle elle-méme



























































