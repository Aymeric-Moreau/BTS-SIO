using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataTime
{
    class Program
    {
        static void Main(string[] args)
        {// auteur : Aymeric Moreau finis le 18/11/2022
         //variable 
            DateTime dateNow = DateTime.Now;
            DateTime dateAjout;
            int jourentre = 0;
            int anneEntre = 0;
            int jourentreR = 0;


            //demande de saisire une date 
            Console.WriteLine("saisiser une date");
            dateAjout = DateTime.Parse(Console.ReadLine());

            // afichage de la date du jour et de la date saisie 
            Console.WriteLine("la date du jours est " + dateNow);

            Console.WriteLine("la date saisie est " + dateAjout);

            // affichage de la date du jour en format court 

            Console.WriteLine("la date du jour en format court est " + dateNow.ToShortDateString());

            // affichage seulement du jour, du mois et de l'année

            Console.WriteLine("le jour dans la date actuelle est : " + (int)dateNow.Day);
            Console.WriteLine("le mois dans la date actuelle est : " + (int)dateNow.Month);
            Console.WriteLine("l'année dans la date actuelle est : " + (int)dateNow.Year);

            // afiche le jour de la semaine 

            Console.WriteLine("le jour de la semaine dans la date actuelle est : " + dateNow.DayOfWeek);


            // calcul de l'enttrevale (nombre de jours) entre 2 date 
            if (dateAjout < dateNow)
            {
                jourentre = dateNow.DayOfYear - dateAjout.DayOfYear;
                anneEntre = dateNow.Year - dateAjout.Year;
                jourentreR = 365*anneEntre + jourentre;
            }
            else
            {
                jourentre = dateAjout.DayOfYear - dateNow.DayOfYear;
                anneEntre = dateAjout.Year - dateNow.Year;
                jourentreR = 365 * anneEntre + jourentre;
            };

            Console.WriteLine("L'intérvale entre la du jour est la date saisie en jours est : " + jourentreR);

            //afichage de la date du jour + 2  jour 
            Console.WriteLine("la date actuele + 2 jours est eguale a  : " + dateNow.AddDays(2));

            //afichage de la date du jour + 3 heur 
            Console.WriteLine("la date actuele + 3 heure est eguale a  : " + dateNow.AddHours(3));

            if (dateAjout > dateNow)
            {
                Console.WriteLine("la date saisie est postérieur a la date du jour");
            }
            else if (dateAjout < dateNow)
            {
                Console.WriteLine("la date saisie est antérieur a la date du jour");
            }
            else
            {
                Console.WriteLine("la date saisie est éguale a la date du jour");
            }



            Console.ReadKey();
        }
    }
}
