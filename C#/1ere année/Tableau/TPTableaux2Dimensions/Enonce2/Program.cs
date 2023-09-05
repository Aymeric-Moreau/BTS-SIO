using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce2
{
    class Program
    {
        static void Main(string[] args)
        {
            //variable 
            int age45=0;
            int nb45=0;
            int age355 = 0;
            int nb355 = 0;
            int age35 = 0;
            int nb35 = 0;
            DateTime dateNow = DateTime.Now;
            int date35 = dateNow.Year - 35;
            //déclaration et initialisation du tableau colone 1 = durée de la connection colone 2 = années de naissance colone 3 = nombre de page consulter 
            int[,] tabInfosConnexions = { { 17, 1986, 12 }, { 5, 1966, 8 }, { 10, 1969, 3 }, { 14, 1973, 5 }, { 5, 1978, 2 }, { 1, 1989, 2 },
                                        { 10, 1970, 6 }, { 9, 1962, 4 }, { 1, 1969, 1 }, { 11, 1977, 10 },
                                        { 5, 1972, 8 }, { 11, 1975, 5 } };

            //Affichage du contenu du tableau

            //Partie à écrire 


            //Calcul du nombre de connexions par tranche d'âge 
            //et affichage des résultats

            //Partie à écrire 
            for (int i = 0; i < tabInfosConnexions.GetLength(0); i++)
            {
                if( tabInfosConnexions[i,1] <= date35)
                {
                    //Console.WriteLine(" <= date35"+tabInfosConnexions[i, 2]);
                    age45 = age45 + tabInfosConnexions[i,2];
                    nb45++;
                }
                
                else if (tabInfosConnexions[i, 1] >= date35 && tabInfosConnexions[i, 1] <= (date35+10))
                {
                    Console.WriteLine(" >= date35" + tabInfosConnexions[i, 2]);
                    age355 = age355 + tabInfosConnexions[i, 2];
                    nb355++;
                }
               
                else //if (tabInfosConnexions[i, 1] < (date35))
                {
                    Console.WriteLine(" < date35" + tabInfosConnexions[i, 2]);
                    age35 = age35 + tabInfosConnexions[i, 2];
                    nb35++;
                };
                
            };
            age45 = age45 / nb45;
            age355 = age355 / nb355;
            //age35 = age35 / nb35;
            Console.WriteLine("Nombre de connexions par tranche d'âge :");
            Console.WriteLine("");
            Console.WriteLine("Tranche de moins de 35 ans " + age35);
            Console.WriteLine("Tranche de plus de 35 ans et de moins de 45 ans " + age355);
            Console.WriteLine("Tranche de plus de 45 ans " + age45);

            //Calcul du tempsMoyen de connexion par page et affichage du résultat

            //Partie à écrire 

            Console.ReadKey();
        }
    }
}
