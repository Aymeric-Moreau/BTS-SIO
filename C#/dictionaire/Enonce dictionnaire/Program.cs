﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce_dictionnaire
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //variable 
            string motC = "Google";
            bool ok = false;
            //dictionnaire 
            Dictionary<string, string> mots = new Dictionary<string, string>() {
                {"Google", "Moteur de recherche sur internet" },
                {"Houara", "Une ville marocaine située entre Agadir et Taroudant." },
                {"Election", "Choix qu’on exprime par l’intermédiaire d’un vote" },
                {"C#", "Un langage de programmation, commercialisé par Microsoft" }

            };


            mots.Add("Smartphone ", "Téléphone intelligent");

            while (ok == false) { 
            Console.WriteLine("saisir une clé : (Google,Houara,Election,C#,Smartphone");
            motC = Console.ReadLine();
            if (mots.TryGetValue(motC, out motC))
            {
                Console.WriteLine(motC); 
                    ok = true;
            }
            else
            {
                Console.WriteLine("Impossible de trouver la clé spécifiée. veillez saisir une de ces clé (Google,Houara,Election,C#,Smartphone)");
            }
        };


          
            mots["C#"] = "Un langage de\r\nprogrammation orienté objet, commercialisé par Microsoft";


            foreach (string cle in mots.Keys)
            {
                Console.WriteLine(cle);
                Console.WriteLine(" ");
            }
            foreach (string cle in mots.Keys)
            {
                Console.WriteLine(cle + " : " + mots[cle]);
                Console.WriteLine(" ");
            }


            var liste = mots.OrderBy(x => x.Key);

            foreach (var cle in liste)
            {
                Console.WriteLine(cle.Key+ ":" + cle.Value);
                Console.WriteLine(" ");
            }

            Console.ReadKey();
        }
    }
}
