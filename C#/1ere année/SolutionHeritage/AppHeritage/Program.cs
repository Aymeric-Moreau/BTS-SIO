using System;
using System.Collections.Generic;
using System.Runtime.Remoting.Metadata.W3cXsd2001;
using ClassesHeritage;

namespace AppHeritage
{
    class Program
    {

        static void Main(string[] args)
        {
            List<Personne> listePersonnes;  // Déclaration liste (ou collection)
            listePersonnes = new List<Personne>();  // Instanciation = création d'une liste de 0 personnes

            GenererDesPersonnesDeBase(listePersonnes);

            AjouterDesEleves(listePersonnes);
            AjouterDesProfs(listePersonnes);
            AfficherListeDesPersonnes(listePersonnes);
            ConseilDeClasse(listePersonnes);

            Console.ReadKey();
        }

        // Génère quelques personnes et les ajoute à la liste
        private static void GenererDesPersonnesDeBase(List<Personne> listeP)
        {
            Console.WriteLine("Création de 3 personnes ... ");
            listeP.Add(new Personne("BORDEAU", "Marc"));
            listeP.Add(new Personne("COUSIN", "Eric"));
            listeP.Add(new Personne("DELAUNAY", "Annie"));
        }

        // Affiche la liste complète des personnes présentes dans la liste
        private static void AfficherListeDesPersonnes(List<Personne> listeP)
        {
            foreach (Personne pers in listeP)
            {
                Console.WriteLine(pers.GetIdentite());
            }

        }





        // Génère quelques élèves et les ajoute à la liste
        private static void AjouterDesEleves(List<Personne> listeP)
        {
            List<String> listeEleve3;  // Déclaration liste (ou collection)
            listeEleve3 = new List<String>() { "Math approfondie", "Espagnol", "Allemend" };  // Instanciation = création d'une liste de 0 personnes

            Console.WriteLine("Création de 3 eleve ... ");
            Eleve eleve1 = new Eleve("BERNE", "Stephane", "CP1");
            Eleve eleve2 = new Eleve("BERNE", "Jean", "CP2");
            Eleve eleve3 = new Eleve("BERNE", "Paul", "CP3", listeEleve3);

            eleve1.EvaluerEleve(12, 14, 17);
            eleve2.EvaluerEleve(10, 10, 19);
            eleve3.EvaluerEleve(4, 16, 9);

            listeP.Add(eleve1);
            listeP.Add(eleve2);
            listeP.Add(eleve3);


        }

        // Génère quelques profs et les ajoute à la liste
        private static void AjouterDesProfs(List<Personne> listeP)
        {
            Console.WriteLine("Création de 3 Prof ... ");
            listeP.Add(new Prof("CHOURAVE", "Fabrice", "anglais"));
            listeP.Add(new Prof("TERPREAU", "Bernard", "francais"));
            listeP.Add(new Prof("SIMPSON", "Anne", "math"));


        }


        // Le conseil de classe "se réunit" pour donner les résultats
        private static void ConseilDeClasse(List<Personne> listeP)
        {
            foreach (Personne personne in listeP)
            {
                if (personne is Eleve)
                {
                    Eleve unEleve = (Eleve)personne;
                    Console.WriteLine(unEleve.RecupererBulletin());

                    if (unEleve.Option.Count == 0)
                    {
                        Console.WriteLine("Option = aucune \n");

                    }
                    else
                    {
                        Console.Write("Option = ");
                        foreach (string opt in unEleve.Option)
                        {
                            Console.Write(opt + ", ");
                        }
                        Console.WriteLine("\n");
                    }
                }

                // ... et du coup je peux faire toutcequ'on peut faire sur un élève :récupérer son bulletinpar exemple
            }


        }


    }
}
