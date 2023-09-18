#include "Header.h"
#include <iostream> //Inclut la bibliothèque iostream (affichage de texte)
#include <string>
#include <cmath>
#include <vector> //Ne pas oublier ! si l'on veut utiliser les tableau dynamique 
#include <fstream> // néccessaire pour géré des fichier 




using namespace std; //Indique quel espace de noms on va utiliser

/*
Fonction principale "main"
Tous les programmes commencent par la fonction main
*/
int main()
{
    cout << "Hello world!" << endl; //Affiche un message
    

    //declaration de variable 
    int nbr(15);
    string mots("fd");
    double pi(3.14159);
    string m("a");

    bool vraieTrue(true);   

    char lettre('a');

    //si on a plusieur variable 
    string prenom("Albert"),
        nom("Einstein");

    int jsp;

    //afficher une variable endl sert a indiquer que c'est la fin de la ligne 
    int ageUtilisateur(16);
    cout << "Votre age est : " << ageUtilisateur << endl;
    cout << ageUtilisateur;

    int qiUtilisateur(150);
    string nomUtilisateur("Albert Einstein");

    cout << "Vous vous appelez " << nomUtilisateur << " et votre QI vaut " << qiUtilisateur << endl;

    // donner plusieur nom pour une seul varaible 
    int ageUtilisateur2(16);  //Déclaration d'une variable.

    int& maVariable(ageUtilisateur2); //Déclaration d'une référence nommée maVariable qui est accrochée à la variable ageUtilisateur


   //'ageUtilisateur' ou 'maReference' indistinctement
   //Puisque ce sont deux étiquettes de la même case en mémoire

    cout << "Vous avez " << ageUtilisateur << "  ans. (via variable)" << endl;
    //On affiche, de la manière habituelle

    cout << "Vous avez " << maVariable << " ans. (via reference)" << endl;
    //Et on affiche en utilisant la référence







    //Résumer du cour :Déclarez une variable et affichez sa valeur
   /* Une variable est une information stockée en mémoire.

        Les noms de variables peuvent contenir des lettres, des chiffres et des tirets bas  _  uniquement;
        le premier caractère doit être une lettre; on ne peut pas utiliser d'accents ou d'espaces.

        C++ est sensible à la casse; agemathieu est donc différent de  ageMathieu  .

        Il existe différents types de variables en fonction de la nature de l'information à stocker : int  , char  , bool  …

        Une variable doit être déclarée avant utilisation.Exemple : int ageUtilisateur(16);  .

        La valeur d'une variable peut être affichée à tout moment avec cout  .

        Les références sont des étiquettes qui permettent d'appeler une variable par un autre nom. Exemple :  int& maReference(ageUtilisateur);  .
        */

    //cours 2 :

        //demander une valuer a l'utilisateur 
    cout << "Quel age avez-vous ?" << endl;

    int ageUtilisateur3(0); //On prépare une case mémoire pour stocker un entier

    cin >> ageUtilisateur3; //On fait entrer un nombre dans cette case

    cout << "Vous avez " << ageUtilisateur3 << " ans !" << endl; //Et on l'affiche

    cout << "Quel est votre prenom ?" << endl;
    string nomUtilisateur2("Sans nom"); //On crée une case mémoire pour contenir une chaine de caractères
    cin >> nomUtilisateur2; //On remplit cette case avec ce qu'écrit l'utilisateur

    cout << "Combien de region avez vous conquis ?" << endl;
    double piUtilisateur(-1.); //On crée une case mémoire pour stocker un nombre réel
    cin >> piUtilisateur; //Et on remplit cette case avec ce qu'écrit l'utilisateur

    cout << "Vous vous appelez " << nomUtilisateur2 << " et vous avez conquis " << piUtilisateur << " region " << endl;

    cin.ignore();
    // probléme avec cin on peut récupérer seulement le 1er mot cela s'arréte a l'espace 
    //pour arranger cela il faut utiliser getline()

    cout << "Quel genre de personne étes vous ?" << endl;
    string genreUtilisateur("un chad"); //On crée une case mémoire pour contenir une chaine de caractères
    getline(cin, genreUtilisateur); //On remplit cette case avec toute la ligne que l'utilisateur a écrit

    cout << "Mais vous serais pas un "<< genreUtilisateur <<" ?" << endl;


    //affecter une valeur a une variable 
    int unNombre(0); //Je crée une case mémoire nommée 'unNombre' et qui contient le nombre 0

    unNombre = 5; //Je mets 5 dans la case mémoire 'unNombre'

    int a(4), b2(5); //Déclaration de deux variables

    //a = b2; //Affectation de la valeur de 'b2' à 'a'.

    //test
    cout << "a vaut : " << a << " et b2 vaut : " << b2 << endl;

    cout << "Affectation !" << endl;
    a = b2; //Affectation de la valeur de 'b2' à 'a'.

    cout << "a vaut : " << a << " et b2 vaut : " << b2 << endl;

    // calcule 
    int a3(5), b3(8), resultat3(0);

    resultat3 = a3 + b3; //Et hop une addition pour la route !
    cout << "5 + 8 = " << resultat3 << endl;

    int a2(2), b(4), c(5), d; //Quelques variables
    d = ((a2 + b) * c) - c; //Un calcul compliqué !
    cout << "((a + b) * c) - c = " << d << endl;

    // les constante 
    int const nombreNiveaux(10);
    string const motDePasse("wAsTZsaswQ"); //Le mot de passe secret
    double const pi2(3.14);
    unsigned int const pointsDeVieMaximum(100); //Le nombre maximal de points de vie

    cout << "saisiser un 1er nombre" << endl;
    double nbr1(-1.); //On crée une case mémoire pour stocker un nombre réel
    cin >> nbr1; //Et on remplit cette case avec ce qu'écrit l'utilisateur

    cout << "saisiser un 2eme nombre" << endl;
    double nbr2(-1.); //On crée une case mémoire pour stocker un nombre réel
    cin >> nbr2; //Et on remplit cette case avec ce qu'écrit l'utilisateur

    double resultnbr( nbr1 * nbr2);

    cout << "le résultat est éguale a : " << resultnbr << endl;

    //En résumé cours 2
    /*Pour demander à l'utilisateur de saisir une information au clavier, on utilise cin >> variable;  . La valeur saisie sera stockée dans la variable.

        Il ne faut pas confondre le sens des chevrons cout << et cin >> .

        On utilise le symbole = pour effectuer un changement de valeur.Pour modifier le contenu d'une variable de type int  , on écrit le nom de la variable suivi du symbole = puis de la nouvelle valeur. C'est ce qu'on appelle l'affectation d'une variable.

        La fonction getline()  permet de récupérer toute une chaine de caractères, pas juste le premier mot.

        On peut faire toutes sortes d'opérations mathématiques de base en C++ : addition, soustraction, multiplication…

        Les constantes sont des variables qu'on ne peut pas modifier une fois qu'elles ont été créées.On utilise le mot const pour les définir.*/

    //cours 3 les raccourcis 

    // ajouter 1 
    int nombreJoueur(4); //Il y a 4 joueurs dans la partie
    ++nombreJoueur;
    // ou 
    nombreJoueur++;

    //À partir d'ici, il y a 5 joueurs

    // si l'on affecte une variable++ a une autre variable il y aurra la valeur sans le ++ si l'on place le ++ avant il y aurra la valeur avec le ++
    int n;
    n = ++nombreJoueur;// n = 5

    n = nombreJoueur++;// n = 4 mais nombre joueur = 5

    // pareil pour le --

    // pour avoir plus de fonction mathématique il faut ajoute : #include <cmath> au programme 

    //Racine carrée = sqrtx
    //Sinus = sin(x)
    //Cosinus = cos()
    //Tangente = tan()
  

     
    // les if else
    int nbAnimaux(2);

    if (nbAnimaux == 0)
    {
        cout << "Vous n'avez pas d'animaux de compagnie" << endl;
    }
    else if (nbAnimaux == 1)
    {
        cout << "C'est super d'avoir un fidele compagnon !" << endl;
    }
    else if (nbAnimaux == 2)
    {
        cout << "Ca doit en faire du monde a la maison !" << endl;
    }
    else
    {
        cout << "Votre budget croquettes doit etre important" << endl;
    }

    //switch 


    switch (nbAnimaux)
    {
    case 0:
        cout << "Vous n'avez pas d'animaux de compagnie" << endl;
        break;

    case 1:
        cout << "C'est super d'avoir un fidele compagnon !" << endl;
        break;

    case 2:
        cout << "Ca doit en faire du monde a la maison !" << endl;
        break;

    default:
        cout << "Votre budget croquettes doit etre important" << endl;
        break;
    }
    bool condition = false;
    // les boucle 
    //while 
    while (condition)
    {
        /* Instructions à répéter */
    }
    // do while 
    do
    {
        /* Instructions */
    } while (condition);

    //for 
    int compteur(0);

    for (compteur = 0; compteur < 10; compteur++)
    {
        cout << compteur << endl;
    }



    int const nombreMeilleursScores(5);           //La taille du tableau
    int meilleursScores[nombreMeilleursScores];   //Déclaration du tableau

    meilleursScores[0] = 118218;  //Remplissage de la première case
    meilleursScores[1] = 100432;  //Remplissage de la deuxième case
    meilleursScores[2] = 87347;   //Remplissage de la troisième case
    meilleursScores[3] = 64523;   //Remplissage de la quatrième case
    meilleursScores[4] = 31415;   //Remplissage de la cinquième case

    for (int i(0); i < nombreMeilleursScores; ++i)
    {
        cout << meilleursScores[i] << endl;
    }

    // tableau dynamique 
    vector<int> tableau(5);

    vector<int> tableau(5, 3);  //Crée un tableau de 5 entiers valant tous 3
    vector<string> listeNoms(12, "Sans nom");
    //Crée un tableau de 12 strings valant toutes « Sans nom »

    vector<int> tableau(3, 2);  //Un tableau de 3 entiers valant tous 2
    tableau.push_back(8);
    //On ajoute une 4ème case au tableau qui contient la valeur 8

    //enlever une case 
    vector<int> tableau(3, 2); //Un tableau de 3 entiers valant tous 2
    tableau.pop_back(); //Et hop ! Plus que 2 cases
    tableau.pop_back(); //Et hop ! Plus que 1 case

    vector<int> tableau(5, 4); //Un tableau de 5 entiers valant tous 4
    int const taille(tableau.size());
    //Une variable qui contient la taille du tableau
    //La taille peut varier mais la valeur de cette variable ne changera pas
    //On utilise donc une constante
    //À partir d'ici, la constante 'taille' vaut donc 5

    //tableau a 2 dimension 
    int tableau[5][4];
    // ou plus 
    double grilleExtreme[5][4][6][2][7];

    // un string est un tableau 
    string nomUtilisateur("Julien");
    cout << "Vous etes " << nomUtilisateur << "." << endl;

    nomUtilisateur[0] = 'L';  //On modifie la première lettre
    nomUtilisateur[2] = 'c';  //On modifie la troisième lettre

    cout << "Ah non, vous etes " << nomUtilisateur << "!" << endl;


    ofstream monFlux("C:/Nanoc/scores.txt");
    //Déclaration d'un flux permettant d'écrire dans le fichier
    // C:/Nanoc/scores.txt

    string const nomFichier("C:/Nanoc/scores.txt");

    ofstream monFlux(nomFichier.c_str());
    //Déclaration d'un flux permettant d'écrire dans un fichier.

    return 0; //Termine la fonction main et donc le programme
}
// les fonction 
int addition(int a, int b)
{
    return a + b;
}

double multiplication(double a, double b, double c)
{
    return a * b * c;
}

// une fonction qui ne renvoie rien 
void direBonjour()
{
    cout << "Bonjour !" << endl;
    //Comme rien ne ressort, il n'y a pas de return !

}


