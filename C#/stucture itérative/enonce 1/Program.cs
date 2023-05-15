// aymeric moreau 
// variable 
int nbr = 0;
int nbrG = 0;
int nbrS = 0;
int nbrF = 0;

do
{
    Console.WriteLine("saisir un nombre");
    nbr = int.Parse(Console.ReadLine());
    nbrS++;
    if(nbr> nbrG)
    {
        nbrG = nbr;
        nbrF = nbrS;
    }


} while(nbr != 0);


Console.WriteLine("le nombre le plus grand parmis les nombre saisie est : " + nbrG + " il a été saisie a la position : " + nbrF );

Console.ReadKey();