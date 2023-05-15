#include "Header.h"
#include <iostream> //Inclut la biblioth�que iostream (affichage de texte)
#include <string>
#include <cmath>
#include <vector> //Ne pas oublier ! si l'on veut utiliser les tableau dynamique 
#include <fstream> // n�ccessaire pour g�r� des fichier 




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
    int ageUtilisateur2(16);  //D�claration d'une variable.

    int& maVariable(ageUtilisateur2); //D�claration d'une r�f�rence nomm�e maVariable qui est accroch�e � la variable ageUtilisateur


   //'ageUtilisateur' ou 'maReference' indistinctement
   //Puisque ce sont deux �tiquettes de la m�me case en m�moire

    cout << "Vous avez " << ageUtilisateur << "  ans. (via variable)" << endl;
    //On affiche, de la mani�re habituelle

    cout << "Vous avez " << maVariable << " ans. (via reference)" << endl;
    //Et on affiche en utilisant la r�f�rence







    //R�sumer du cour :D�clarez une variable et affichez sa valeur
   /* Une variable est une information stock�e en m�moire.

        Les noms de variables peuvent contenir des lettres, des chiffres et des tirets bas  _  uniquement;
        le premier caract�re doit �tre une lettre; on ne peut pas utiliser d'accents ou d'espaces.

        C++ est sensible � la casse; agemathieu est donc diff�rent de  ageMathieu  .

        Il existe diff�rents types de variables en fonction de la nature de l'information � stocker : int  , char  , bool  �

        Une variable doit �tre d�clar�e avant utilisation.Exemple : int ageUtilisateur(16);  .

        La valeur d'une variable peut �tre affich�e � tout moment avec cout  .

        Les r�f�rences sont des �tiquettes qui permettent d'appeler une variable par un autre nom. Exemple :  int& maReference(ageUtilisateur);  .
        */

    //cours 2 :

        //demander une valuer a l'utilisateur 
    cout << "Quel age avez-vous ?" << endl;

    int ageUtilisateur3(0); //On pr�pare une case m�moire pour stocker un entier

    cin >> ageUtilisateur3; //On fait entrer un nombre dans cette case

    cout << "Vous avez " << ageUtilisateur3 << " ans !" << endl; //Et on l'affiche

    cout << "Quel est votre prenom ?" << endl;
    string nomUtilisateur2("Sans nom"); //On cr�e une case m�moire pour contenir une chaine de caract�res
    cin >> nomUtilisateur2; //On remplit cette case avec ce qu'�crit l'utilisateur

    cout << "Combien de region avez vous conquis ?" << endl;
    double piUtilisateur(-1.); //On cr�e une case m�moire pour stocker un nombre r�el
    cin >> piUtilisateur; //Et on remplit cette case avec ce qu'�crit l'utilisateur

    cout << "Vous vous appelez " << nomUtilisateur2 << " et vous avez conquis " << piUtilisateur << " region " << endl;

    cin.ignore();
    // probl�me avec cin on peut r�cup�rer seulement le 1er mot cela s'arr�te a l'espace 
    //pour arranger cela il faut utiliser getline()

    cout << "Quel genre de personne �tes vous ?" << endl;
    string genreUtilisateur("un chad"); //On cr�e une case m�moire pour contenir une chaine de caract�res
    getline(cin, genreUtilisateur); //On remplit cette case avec toute la ligne que l'utilisateur a �crit

    cout << "Mais vous serais pas un "<< genreUtilisateur <<" ?" << endl;


    //affecter une valeur a une variable 
    int unNombre(0); //Je cr�e une case m�moire nomm�e 'unNombre' et qui contient le nombre 0

    unNombre = 5; //Je mets 5 dans la case m�moire 'unNombre'

    int a(4), b2(5); //D�claration de deux variables

    //a = b2; //Affectation de la valeur de 'b2' � 'a'.

    //test
    cout << "a vaut : " << a << " et b2 vaut : " << b2 << endl;

    cout << "Affectation !" << endl;
    a = b2; //Affectation de la valeur de 'b2' � 'a'.

    cout << "a vaut : " << a << " et b2 vaut : " << b2 << endl;

    // calcule 
    int a3(5), b3(8), resultat3(0);

    resultat3 = a3 + b3; //Et hop une addition pour la route !
    cout << "5 + 8 = " << resultat3 << endl;

    int a2(2), b(4), c(5), d; //Quelques variables
    d = ((a2 + b) * c) - c; //Un calcul compliqu� !
    cout << "((a + b) * c) - c = " << d << endl;

    // les constante 
    int const nombreNiveaux(10);
    string const motDePasse("wAsTZsaswQ"); //Le mot de passe secret
    double const pi2(3.14);
    unsigned int const pointsDeVieMaximum(100); //Le nombre maximal de points de vie

    cout << "saisiser un 1er nombre" << endl;
    double nbr1(-1.); //On cr�e une case m�moire pour stocker un nombre r�el
    cin >> nbr1; //Et on remplit cette case avec ce qu'�crit l'utilisateur

    cout << "saisiser un 2eme nombre" << endl;
    double nbr2(-1.); //On cr�e une case m�moire pour stocker un nombre r�el
    cin >> nbr2; //Et on remplit cette case avec ce qu'�crit l'utilisateur

    double resultnbr( nbr1 * nbr2);

    cout << "le r�sultat est �guale a : " << resultnbr << endl;

    //En r�sum� cours 2
    /*Pour demander � l'utilisateur de saisir une information au clavier, on utilise cin >> variable;  . La valeur saisie sera stock�e dans la variable.

        Il ne faut pas confondre le sens des chevrons cout << et cin >> .

        On utilise le symbole = pour effectuer un changement de valeur.Pour modifier le contenu d'une variable de type int  , on �crit le nom de la variable suivi du symbole = puis de la nouvelle valeur. C'est ce qu'on appelle l'affectation d'une variable.

        La fonction getline()  permet de r�cup�rer toute une chaine de caract�res, pas juste le premier mot.

        On peut faire toutes sortes d'op�rations math�matiques de base en C++ : addition, soustraction, multiplication�

        Les constantes sont des variables qu'on ne peut pas modifier une fois qu'elles ont �t� cr��es.On utilise le mot const pour les d�finir.*/

    //cours 3 les raccourcis 

    // ajouter 1 
    int nombreJoueur(4); //Il y a 4 joueurs dans la partie
    ++nombreJoueur;
    // ou 
    nombreJoueur++;

    //� partir d'ici, il y a 5 joueurs

    // si l'on affecte une variable++ a une autre variable il y aurra la valeur sans le ++ si l'on place le ++ avant il y aurra la valeur avec le ++
    int n;
    n = ++nombreJoueur;// n = 5

    n = nombreJoueur++;// n = 4 mais nombre joueur = 5

    // pareil pour le --

    // pour avoir plus de fonction math�matique il faut ajoute : #include <cmath> au programme 

    //Racine carr�e = sqrtx
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
        /* Instructions � r�p�ter */
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
    int meilleursScores[nombreMeilleursScores];   //D�claration du tableau

    meilleursScores[0] = 118218;  //Remplissage de la premi�re case
    meilleursScores[1] = 100432;  //Remplissage de la deuxi�me case
    meilleursScores[2] = 87347;   //Remplissage de la troisi�me case
    meilleursScores[3] = 64523;   //Remplissage de la quatri�me case
    meilleursScores[4] = 31415;   //Remplissage de la cinqui�me case

    for (int i(0); i < nombreMeilleursScores; ++i)
    {
        cout << meilleursScores[i] << endl;
    }

    // tableau dynamique 
    vector<int> tableau(5);

    vector<int> tableau(5, 3);  //Cr�e un tableau de 5 entiers valant tous 3
    vector<string> listeNoms(12, "Sans nom");
    //Cr�e un tableau de 12 strings valant toutes � Sans nom �

    vector<int> tableau(3, 2);  //Un tableau de 3 entiers valant tous 2
    tableau.push_back(8);
    //On ajoute une 4�me case au tableau qui contient la valeur 8

    //enlever une case 
    vector<int> tableau(3, 2); //Un tableau de 3 entiers valant tous 2
    tableau.pop_back(); //Et hop ! Plus que 2 cases
    tableau.pop_back(); //Et hop ! Plus que 1 case

    vector<int> tableau(5, 4); //Un tableau de 5 entiers valant tous 4
    int const taille(tableau.size());
    //Une variable qui contient la taille du tableau
    //La taille peut varier mais la valeur de cette variable ne changera pas
    //On utilise donc une constante
    //� partir d'ici, la constante 'taille' vaut donc 5

    //tableau a 2 dimension 
    int tableau[5][4];
    // ou plus 
    double grilleExtreme[5][4][6][2][7];

    // un string est un tableau 
    string nomUtilisateur("Julien");
    cout << "Vous etes " << nomUtilisateur << "." << endl;

    nomUtilisateur[0] = 'L';  //On modifie la premi�re lettre
    nomUtilisateur[2] = 'c';  //On modifie la troisi�me lettre

    cout << "Ah non, vous etes " << nomUtilisateur << "!" << endl;


    ofstream monFlux("C:/Nanoc/scores.txt");
    //D�claration d'un flux permettant d'�crire dans le fichier
    // C:/Nanoc/scores.txt

    string const nomFichier("C:/Nanoc/scores.txt");

    ofstream monFlux(nomFichier.c_str());
    //D�claration d'un flux permettant d'�crire dans un fichier.

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


