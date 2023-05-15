using System;
using System.Collections.Generic;
using System.Linq;

namespace TP_Emmaus
{
    class Program
    {
        static void Main(string[] args)
        {
            //variable
            string keyLot = " ";
            int valeurLot = 0;
            string entrepotOk = " ";

            Dictionary<string, int> entrepots = new Dictionary<string, int>() { { "E1", 0 }, { "E2", 10 }, { "E3", 50 }, { "E4", 100 }, { "E5", 110 }, { "E6", 130 } };
            Dictionary<string, string> lotsEntreposes = new Dictionary<string, string>();
            Dictionary<string, int> lotsNonEntreposes = new Dictionary<string, int>();

            //Traitement des lots à entreproser
            Console.WriteLine("Veillez saisir la référence du lot : ");
            keyLot = Console.ReadLine();

            Console.WriteLine("Veuillez saisir la surface que prend le lot :");
            valeurLot = Int32.Parse(Console.ReadLine());

            foreach ( KeyValuePair<string, int> valeur in entrepots) //foreach (KeyValuePair<string, string> paire in employe)

            {
                if (entrepotOk == " " && valeur.Value > valeurLot)
                {
                    entrepotOk = valeur.Key;
                };
            }
            Console.WriteLine(entrepotOk);

            //Affichage des informations sur les lots entreposés


            //Affichage des références des lots non entreposés


            //affichage de l'espace nécessaire pour entreposer les lots restants




            Console.ReadKey();
        }

        /// <summary>
        /// Recherche un entrepôt avec une surface suffisante
        /// </summary>
        /// <param name="entrepots">Liste des entrepôts</param>
        /// <param name="surfaceNecessaire">surface nécessaire pour entreproser le lot</param>
        /// <returns>le numéro de l'entrepôt avec une surface suffisante ou une valeur nulle si aucun entrepôt</returns>
        public static string RechercheEntrepot(Dictionary<string, int> entrepots, int surfaceNecessaire)
        {

            return entrepots.FirstOrDefault(p => p.Value > surfaceNecessaire).Key;
        }

        /// <summary>
        /// Affiche pour chaque lot entreposé la référence du lot et le numéro de l'entrepôt
        /// </summary>
        /// <param name="lotsEntreposes">Collection des lots entreposés</param>
        public static void AfficherListeLotsEntrepose(Dictionary<string, int> lotsEntreposes)
        {
















        }


        /// <summary>
        /// Affiche la référence de chaque lot non entreposé
        /// </summary>
        /// <param name="lotsNonEntreposes">Collection des lots non entreposés</param>
        public static void AfficherListeLotsNonEntreposes(Dictionary<string, int> lotsNonEntreposes)
        {













        }
    }
}
