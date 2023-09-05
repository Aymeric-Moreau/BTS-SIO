using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce_1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //variable
            int choixId = 5;
            float idMC;
            int idmc;
            // tableau
            int[] id = { 0, 1, 2, 3, 4 };

            string[] noms = { "Crayon", "Gomme", "Stylo", "Equerre", "Regle" };

            float[] prix = { 0.5f, 1.5f, 2f, 1.5f, 1.8f };

            //boucle for pour donner tout les nom des produit et leur prix 

            for (int i = 0; i < noms.Length; i++)
            {
                Console.Write(noms[i] + " : ");
                Console.WriteLine(prix[i] + " euro");
            };
            // saisie le numéro d'un produit et on donne le nom et le prix du produit choisie 
            while (choixId > 4)
            {

            
            Console.WriteLine("veillez saisir le numéro d'un produit (entre 0 et 4) : ");
            choixId = int.Parse(Console.ReadLine());

                if(choixId >= 0 && choixId <= 5)
                {
                    Console.Write("le produit numéro " + choixId + " est " + noms[choixId] + " : ");
                    Console.WriteLine(prix[choixId] + " euro");
                }

            };
            // affichage du produit le moins chére 

            idmc = (int)prix.Min(); 
            
            
            Console.Write("le produit le moins chére est le numéro " + idmc + "qui est " + noms[idmc] + " : ");
            Console.WriteLine(prix[idmc] + " euro");
            Console.ReadKey();
        }
    }
}
