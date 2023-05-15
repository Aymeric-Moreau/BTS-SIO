//variable
int mois = 0;
int mois3 = 0;

// tableau 
int[] tableau = {0000,1200,1700,1900,2300,1500,3100,3300,3800,1400,1800,2000,2900 };

Console.WriteLine("saisissez le numéro d'un mois ");
mois = Int32.Parse(Console.ReadLine());

while (mois < 1 && mois > 12)
{
    Console.WriteLine("la valeur saisie est invalide ");
    Console.WriteLine("veillez saisie le numéro d'un mois valide (entre 1 et 12) ");
    mois = Int32.Parse(Console.ReadLine());
}

Console.WriteLine("dans le mois numéro "+ mois + " il y a "+ tableau[mois] + " client");

Console.WriteLine("le nombre total de client dans l'années est de "+ tableau.Sum() );

foreach(int i in tableau)
{
    if (i > 3000)
    {
        mois3++;
    }
}

Console.WriteLine("il y a " + mois3 + " mois avec plus de 3000 client ");

Console.ReadKey();
