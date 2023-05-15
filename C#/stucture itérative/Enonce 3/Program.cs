// aymeric Moreau 
// variable 

int note = 0;
int nbrE = 0;
int nbrE10 = 0;
float moyenne = 0;
string on;
do
{
    Console.WriteLine("saisisez une note");
    note = int.Parse(Console.ReadLine());

    while (note < 0 || note > 20)
    {
        Console.WriteLine("la note saisie dois être entre 0 et 20 veillez saisire une autre note");
        note = int.Parse(Console.ReadLine());
    }
    if (note > 10)
    {
        nbrE10++;

        
    } 
    nbrE++;
    moyenne = moyenne + note;

    Console.WriteLine("Voulez vous saisir une nouvelle note ? o/n");
    on = (Console.ReadLine());

} while (on == "o" || on == "O");

moyenne = moyenne / nbrE;

Console.WriteLine("la moyene de clase est : " + moyenne);
Console.WriteLine("Le nombre d'eleve ayant une note supérieur a 10 est de : "+ nbrE10);

Console.ReadKey();