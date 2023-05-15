using ClassesValiers;
using System;
using System.Collections.Generic;

namespace TestClasses
{
    class Program
    {
        static void Main(string[] args)
        {
            //instanciation des categorie
            Categorie national_1 = new Categorie("N1", "Nationale 1");
            Categorie national_2 = new Categorie("N2", "Nationale 2");
            Categorie departementale = new Categorie("D", "Departementale");
            Categorie regionale = new Categorie("R", "Regionale");

            //instanciation des cavalier 
            CavalierAdulte jacky = new CavalierAdulte(1,1, new DateTime(2023, 01, 10), "Durand", "jacky",  regionale);
            CavalierAdulte luke = new CavalierAdulte(1,3, new DateTime(2022, 10, 20), "Lucky", "luke",  departementale);
            CavalierAdulte marie = new CavalierAdulte(0, 4, new DateTime(2023, 02, 03), "Bertrand", "marie",  regionale);
            CavalierAdulte paul = new CavalierAdulte(1, 2, new DateTime(2022, 09, 15), "Louvin", "Paul", national_1);

            // instanciation des cavalier enfant
            CavalierEnfant annabelle = new CavalierEnfant(new DateTime(2008, 02, 5),145, 2, new DateTime(2022, 09, 15), "Durand", "annabelle", national_1);

            //instanciation des chevale
            Cheval bresil = new Cheval(new DateTime(2023, 01, 10), "brésile",1);
            Cheval margot = new Cheval(new DateTime(2023, 01, 10), "margot", 0);
            Cheval gavroche = new Cheval(new DateTime(2023, 01, 10), "gavroche", 1);
            Cheval esperence = new Cheval(new DateTime(2023, 01, 10), "esperence", 0);
            Cheval etoile = new Cheval(new DateTime(2023, 01, 10), "etoile", 0);

            //instanciation de l'epreuve
            Epreuve barrage = new Epreuve(1, "barrage", regionale);
            Epreuve deux_manche = new Epreuve(2, "2 manche", national_1);

            //affiche la civilite et la categorie 
            Console.WriteLine(annabelle.RetourneInfos() + " est de categorie : " + annabelle.CategoriCavalier.NomCategorie);

            //changement de categorie 
            luke.CategoriCavalier = regionale;
            Console.WriteLine(luke.CategoriCavalier.NomCategorie);

            //affectation des cavalier a l'épreuve barrage
            barrage.Affecter(luke, margot);
            barrage.Affecter(jacky, bresil);
            barrage.Affecter(marie, gavroche);

            //affectation des cavalier a l'epreuve en 2 manches
            deux_manche.Affecter(annabelle, esperence);
            deux_manche.Affecter(paul, etoile);

            //affichage du nombre de cavalier engager dans l'epreuve barage 
            Console.WriteLine("dans l'epreuve en 2 manches il y a " + barrage.MesEngages.Count + " engagés ");


            //affichage de liste des cavalier engager a l'epreuve barrage
            Console.WriteLine("Liste des engagés Epreuve à barrage immédiat :" + "\n");


            foreach (KeyValuePair<Cavalier, Cheval> engager in barrage.MesEngages)
            {
                Console.WriteLine(engager.Key.RetourneInfos() +" avec le chevale : "+ engager.Value.NomCheval);
            }

            //affichage du nombre de cavalier engager dans l'epreuve de deux manche 
            Console.WriteLine("dans l'epreuve en 2 manches il y a " + deux_manche.MesEngages.Count + " engagés ");


            //affichage de liste des cavalier engager a l'epreuve barrage
            Console.WriteLine("Liste des engagés Epreuve à barrage immédiat :" + "\n");


            foreach (KeyValuePair<Cavalier, Cheval> engager in deux_manche.MesEngages)
            {
                Console.WriteLine(engager.Key.RetourneInfos() + " avec le chevale : " + engager.Value.NomCheval);
            }
            //affichage du nombre de cavaliers engagés à l’épreuve 1 qui ont obtenu leur licence en 2022 et 2023

            Console.WriteLine("Le nombre de cavaliers engagés à l’épreuve 1 qui ont obtenu leur licence en 2022 est de : " + barrage.CompterEngages(2022));
            Console.WriteLine("Le nombre de cavaliers engagés à l’épreuve 1 qui ont obtenu leur licence en 2023 est de : " + barrage.CompterEngages(2023));
            Console.ReadKey();
        }
    }
}
