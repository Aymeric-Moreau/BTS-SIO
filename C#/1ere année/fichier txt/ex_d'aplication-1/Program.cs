using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace exo_d_aplication_1
{
    class Program
    {
        static void Main(string[] args)
        {   //variable
            //int nbrF = 0;
            string ligne = " ";
            /*int nbranim;
            int nbraction;
            int nbrtriller;*/


            //dico
            Dictionary<string, int> genreFilms = new Dictionary<string, int>();

            //définit le répertoire de travail 
            Directory.SetCurrentDirectory("fichiersDonnees");

            // Instancie un objet de lecture
            StreamReader fichier = new StreamReader("films.txt");

            // Tant que ce n'est pas la fin de fichier while(!fichier.EndOfStream) {
            while (!fichier.EndOfStream)
            {
                // Lire une ligne du fichier
                ligne = fichier.ReadLine();

                //ajour de la ligne dans une liste
                string[] tab = new string[4];

                tab = ligne.Split(';');

                // verification du genre du film et ajout du genre et du nombre de film dans le dictionnaire
                if (tab[3]== "animation")
                {
                    if (genreFilms.ContainsKey("animation")){

                        genreFilms[tab[3]] += 1;
                    }
                    else
                    {
                        genreFilms.Add(tab[3], 1);
                    }    
                }
                else if (tab[3] == "triller")
                {
                    if (genreFilms.ContainsKey("triller"))
                    {

                        genreFilms[tab[3]] += 1;
                    }
                    else
                    {
                        genreFilms.Add(tab[3], 1);
                    }
                }
                else if (tab[3] == "action")
                {
                    if (genreFilms.ContainsKey("action"))
                    {

                        genreFilms[tab[3]] += 1;
                    }
                    else
                    {
                        genreFilms.Add(tab[3], 1);
                    }
                }
                else if (tab[3] == "drame")
                {
                    if (genreFilms.ContainsKey("drame"))
                    {

                        genreFilms[tab[3]] += 1;
                    }
                    else
                    {
                        genreFilms.Add(tab[3], 1);
                    }
                }
                else if (tab[3] == "comedie")
                {
                    if (genreFilms.ContainsKey("comedie"))
                    {

                        genreFilms[tab[3]] += 1;
                    }
                    else
                    {
                        genreFilms.Add(tab[3], 1);
                    }
                }

            }
            //affichage des chaque paire clé valeur du dictionnaire
            foreach (KeyValuePair<string, int> paire in genreFilms)
            {
                Console.WriteLine("Pour le genre : "+paire.Key + " il y a " + paire.Value+ " films");
            }



            // Fermer le fichier.
            fichier.Close();


            Console.ReadKey();
        }


    }
}
