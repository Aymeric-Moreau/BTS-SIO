// aymeric moreau 
// variable 

using System.Text.Json.Serialization;

int nbr = 0;
int nbr1 = 0;
string nbrr = "= ";

Console.WriteLine("saisisez un nombre");
nbr = int.Parse(Console.ReadLine());


for(int i = 1; i <= 10; i++)
{
    nbr1 = nbr + i;
    nbrr = nbrr + (" " + nbr1.ToString() + " ");
}
Console.WriteLine("votre nombre saisie et c'est dix nombre suivant est éguale " +  nbrr  );

Console.ReadKey();