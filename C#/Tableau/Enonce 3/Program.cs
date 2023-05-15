using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce_3
{
    internal class Program
    {
        static void Main(string[] args)
        { //variable
            float cAM;
            int chiffreparSalarie;
            int cPS = 0;
            string bestPharma = " ";

            //tableau 

            string[] tabPharm = { "Des Arcades", "Des Halles", "Du Parc", "Giraudeau", "Halabi", "Horgreul", "Mutualiste", "principale" };
            int[] tabCA = { 82000, 74000, 18000, 97000, 145000, 20000, 78000, 120000, };
            int[] tabAl = { 5, 3, 2, 3, 6, 4, 2, 3, };

            // afficher le nom de toutes les pharmacie + les info corespondant 
            for (int i = 0; i < tabPharm.Length; i++)
            {
                Console.Write( "Le nom de la pharmacie est "+ tabPharm[i] + ", ");
                Console.Write("Le chiffre d'affaire de la pharmacie est de " + tabCA[i] + " euro et");
                Console.WriteLine(" le nombre d'employer dans la pharmacie est de " + tabAl[i] + "  ");
                Console.WriteLine("  ");
            };

            //calcule du chiffre d'affaire moyen
            cAM = tabCA.Sum() / tabCA.Length;

            Console.WriteLine("le chifre d'affaire moyen est de "+cAM +" euros");

            //calcule pour trouver la meilleur entreprise en fonction du chiffre d'affaire par salarié
            for (int i = 0; i < tabCA.Length; i++)
            {
                chiffreparSalarie = tabCA[i] / tabAl[i];

                if(chiffreparSalarie > cPS)
                {
                    cPS = chiffreparSalarie;
                    bestPharma = tabPharm[i];
                };
            };

            Console.WriteLine("la meilleur pharmacie est " + bestPharma + " avec "+ cPS + " euro par employer");

            Console.ReadKey();

        }
    }
}
