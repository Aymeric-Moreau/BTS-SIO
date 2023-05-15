using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce1
{
    class Program
    {
        static void Main(string[] args)
        {
            //variable
            int total =0;
           

            //Déclaration et initialisation des tableaux
            int[,] ventes = { { 7, 2, 2, 1 }, { 4, 5, 2, 0 }, { 3, 5, 4, 1 }, { 5, 8, 1, 1 }, { 7, 2, 0, 2 } };
            int[] prix = { 10000, 20000, 30000, 40000 };


            Console.WriteLine("il y a " + ventes.GetLength(0) + "ligne");
            Console.WriteLine("il y a " + ventes.GetLength(1) + "ligne");

            //Affichage des ventes de chaque vendeur
            //Partie à écrire

            for (int i = 0; i < ventes.GetLength(0); i++)
            {
                Console.WriteLine("pour le vendeur numéro " + i );
                for (int y = 0; y < ventes.GetLength(1); y++)
                {
                     total = total + (prix[y] * ventes[i,y]);
                    
                };
                Console.WriteLine("il y a " + total + " euros de vente total");
                total = 0;
            };

            Console.ReadKey();
        }
    }
}
