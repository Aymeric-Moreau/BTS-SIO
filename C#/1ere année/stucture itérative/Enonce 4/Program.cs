// aymeric moreau 
// constante 
const int film = 15000000;
const double premSemaine = 4000000;

// variable
double recetteSemaine = premSemaine;
double recetteGlobal = premSemaine;
int nbrSemaine = 1;


do
{

    recetteSemaine = recetteSemaine * 0.80;
    Console.WriteLine(recetteSemaine);
    recetteGlobal = recetteGlobal + recetteSemaine;
    Console.WriteLine(recetteGlobal);
    nbrSemaine++;
    Console.WriteLine(nbrSemaine);


} while (recetteGlobal <= film);

Console.WriteLine("le film sera bénéficiaire a partire de : " + nbrSemaine + " semaine.");

Console.ReadKey();
