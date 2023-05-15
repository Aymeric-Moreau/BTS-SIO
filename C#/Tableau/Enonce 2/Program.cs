using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce_2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //tableau
            string[] tabDept = { "Cher", "Eure et Loir", "Indre", "Indre et Loire", "Loir et Cher", "Loiret" };
            int[] tapPrecip = { 122, 230, 50, 170, 185, 140 };
            int[] tapCulture = { 2, 1, 2, 0, 1, 0 };
            int[] tapSeuil = { 130, 150, 70 };

            // variable 
            string nom = "";
            int i;
            int precipitation;
            int culture;
            Boolean ok = false;

            // saisie du département
            while (ok == false)
            {

            
            Console.WriteLine("Entrez le nom du département");
            nom = Console.ReadLine();

            for (int y = 0; y < tabDept.Length; y++)
            {
                if (nom == tabDept[y])
                {
                    ok = true;
                }
            };
            };

            i = Array.IndexOf(tabDept, nom);

            // récupération de la precipatation et le code de la culture de la region saisie
            precipitation = tapPrecip[i];
            culture = tapCulture[i];

            if(precipitation >= tapSeuil[culture])
            {
                Console.WriteLine("Ce département n'est pas sinistré");
            }else
            {
                Console.WriteLine("Ce département est sinistré");
            };
            Console.ReadKey();
        }
    }
}
