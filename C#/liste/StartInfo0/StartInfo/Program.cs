using System;
using System.Collections.Generic;
using static System.Net.Mime.MediaTypeNames;


namespace StartInfo
{
    class Program
    {

        static void Main(string[] args)
        {
            List<string> salarie = new List<string> {"ALOUI Jeanne",  "DUPONT Paul", "GUILLEMET Aurore",
                                "JOURDAIN Sophie", "RACINE Caroline", "ROUSSEAU Joël",
                                "SOLIDAIRE Alice", "VALLAS Joris"};
            List<double> tauxHoraire = new List<double> { 15.00, 30.00, 45.00, 42.00, 12.00, 40.00, 50.00 };
            List<int> niveauSalarie = new List<int> { 2, 0, 5, 1, 6, 3, 3, 3 };
            List<int> heuresMensuelles = new List<int> { 115, 155, 150, 120, 143, 120, 75, 145 };

            int somme = 0;
            int nbr = 0;
            double moyenne = 0;
            double coutP = 0;

            //ajout des 2 salarié
            salarie.Add("ALPHA Sylvain");
            salarie.Add("MARTIN Jean");
            salarie.Sort();

            niveauSalarie.Insert(salarie.IndexOf("ALPHA Sylvain"), 1);
            niveauSalarie.Insert(salarie.IndexOf("MARTIN Jean"), 4);

            heuresMensuelles.Insert(salarie.IndexOf("ALPHA Sylvain"), 80);
            heuresMensuelles.Insert(salarie.IndexOf("MARTIN Jean"), 125);

            //Affichage de la liste des salariés 
            // à écrire
            Console.WriteLine("liste des salariés");
            foreach (String nom in salarie)
            {
                Console.WriteLine(nom);
            };
            Console.WriteLine(" ");
            //Affichage de la moyenne des heures
            // à écrire
            foreach (int heures in heuresMensuelles)
            {
                somme = somme + heures;
                nbr++;
                
            };
            moyenne = (double)somme / nbr;
            Console.WriteLine("la moyenne des heures est eguale a : " + moyenne);
            Console.WriteLine(" ");
            //Affichage des salariés qui ont effectué un nombre d'heures supérieur à la moyenne
            // à écrire

            Console.WriteLine("les salarié avec plus d'heure que la moyenne est : ");

            for (int i = 0; i < heuresMensuelles.Count; i++)
            {   if(heuresMensuelles[i] > moyenne)
                   Console.WriteLine(salarie[i]);
            };

            //Affichage du côut du personnel
            // à écrire

            for (int i = 0; i < heuresMensuelles.Count; i++)
            {
               coutP = coutP + (double)heuresMensuelles[i] * tauxHoraire[niveauSalarie[i]];
            };
            Console.WriteLine("le cout du personnel pour ce mois est de "+coutP);

             
           
            Console.ReadKey();


        }


        /// <summary>
        /// Affichage de la liste des salariés
        /// </summary>
        /// <param name="liste">Liste des salariés</param>
        static void AfficheListeSalaries(List<string> liste)
        {
            //à écrire
        }

        /// <summary>
        /// Affiche les salariés qui ont un nombre d'heures supérieur
        /// à la moyenne des heures mensuelles
        /// </summary>
        /// <param name="liste1">Liste des heures mensuelles</param>
        /// <param name="liste2">Liste des salariés</param>
        /// <param name="m">moyenne des heures mensuelles</param>
        static void AfficheSalariesNbHSuperieurMoyenne(List<int> liste1, List<string> liste2, double m)
        {

            //à écrire
        }


        /// <summary>
        /// Détermine la moyenne des heures mensuelles
        /// </summary>
        /// <param name="liste">Liste des heures mensuelles</param>
        /// <returns>Retourne la moyenne des heures mensuelles</returns>
        static double MoyenneHeures(List<int> liste)
        {

            return 0;
        }


        /*
         * Retourne le coût du personnel
        */
        /// <summary>
        /// Détermine le côut du personnel
        /// </summary>
        /// <param name="liste1">Liste des heures mensuelles</param>
        /// <param name="liste2">Liste des niveaux des salariés</param>
        /// <param name="liste3">Liste des taux horaires</param>
        /// <returns>Retourne le coût du personnel</returns>
        static double CoutPersonnel(List<int> liste1, List<int> liste2, List<double> liste3)
        {

            return 0;
        }

    }
}
