using System;
using System.IO;

namespace TP_suivi_des_connexions
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //variable
            string ligne;
            int i = 0;
            string ip = " ";
            Boolean ok = false;

            //tableau a 2 dimension 
            string[,] connexions = new string[10, 4];

            // Instancie un objet de lecture
            StreamReader fichier = new StreamReader("FichierSuiviAccès.txt");

            // Tant que ce n'est pas la fin de fichier while(!fichier.EndOfStream) {
            while (!fichier.EndOfStream)
            {
                ligne = fichier.ReadLine();

                //ajour de la ligne dans une liste
                string[] tab = new string[3];

                tab = ligne.Split(';');

                //ajout de chaque valeur de la liste dans la collone correspondant 
                connexions[i, 0] = tab[0];
                connexions[i, 1] = tab[1];
                connexions[i, 2] = tab[2];
                connexions[i, 3] = tab[3];

                i++;

            }
            while (ok == false)
            {
                Console.WriteLine("veillez saisir une adresse ip valide (10.1.0.xx): ");
                ip = Console.ReadLine();

                for (int y = 0; y < connexions.GetLength(0); y++)
                {
                    if (connexions[y, 0] == ip)
                    {
                        ok = true;
                        for (int x = 1; x < connexions.GetLength(1); x++)
                        {

                            Console.WriteLine("l'IP : " + ip + " corespond a : " + connexions[y, x]);
                        }

                    }
                }
            }

            Console.ReadKey();
        }
    }
}