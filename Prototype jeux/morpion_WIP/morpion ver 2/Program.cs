using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace morpion_ver_2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //variable
            bool winU = false;
            bool winB = false;
            int nbr = 0;
            bool egalite = false;
            //tableau
            string[,] grid = new string[3, 3] {
                { "a1", "a2", "a3" },
                { "b1", "b2", "b3" },
                { "c1", "c2", "c3" }
                };

            while(winU == false && winB == false && egalite == false)
            {
                nbr++;
            
                if(nbr <= 10)
                {

                    Console.WriteLine(" ");
                    // Parcoure les valeurs du tableau
                    for (int i = 0; i < grid.GetLength(0); i++)
            {
                for (int j = 0; j < grid.GetLength(1); j++)
                {
                    // Affiche la valeur
                    Console.Write(grid[i, j] + "|");
                }

                // Saut de ligne
                Console.WriteLine();
            };
            //Partie utulisateur
            Non:
            // Affiche les boutons
            Console.WriteLine("Cliquez sur le chiffre corespondant a sa case voulu pour choisir :");
            Console.WriteLine("1. A1");
            Console.WriteLine("2. A2");
            Console.WriteLine("3. A3");
            Console.WriteLine("4. B1");
            Console.WriteLine("5. B2");
            Console.WriteLine("6. B3");
            Console.WriteLine("7. C1");
            Console.WriteLine("8. C2");
            Console.WriteLine("9. C3");

            // Attend une entrée clavier de l'utilisateur
            ConsoleKeyInfo key = Console.ReadKey();

                    // Récupère le bouton cliqué

            if (key.KeyChar == '1' && grid[0, 0] == "a1") grid[0, 0] = "XX";
            else if (key.KeyChar == '2' && grid[0, 1] == "a2") grid[0, 1] = "XX";
            else if (key.KeyChar == '3' && grid[0, 2] == "a3") grid[0, 2] = "XX";
            else if (key.KeyChar == '4' && grid[1, 0] == "b1") grid[1, 0] = "XX";
            else if (key.KeyChar == '5' && grid[1, 1] == "b2") grid[1, 1] = "XX";
            else if (key.KeyChar == '6' && grid[1, 2] == "b3") grid[1, 2] = "XX";
            else if (key.KeyChar == '7' && grid[2, 0] == "c1") grid[2, 0] = "XX";
            else if (key.KeyChar == '8' && grid[2, 1] == "c2") grid[2, 1] = "XX";
            else if (key.KeyChar == '9' && grid[2, 2] == "c3") grid[2, 2] = "XX";
            else
            {
                Console.WriteLine("erreur la case est déja prise veilez réessayer");
                goto Non;
            }; nbr++; Console.WriteLine("nbr est eguale a : " + nbr);
                }
                else{ 
                egalite = true;
            };
                // Affiche le bouton cliqué
                /*Console.WriteLine($"Vous avez cliqué sur le bouton {button}");


                string value = button;

                for (int i = 0; i < grid.GetLength(0); i++)
                {
                    for (int j = 0; j < grid.GetLength(1); j++)
                    {
                        if (grid[i, j].Equals(value))
                        {
                            grid[i, j] = "XX"
                            Console.WriteLine($"La valeur {value} a été trouvée en position ({i}, {j})");
                        }
                    }
                }*/

                //Partie Bot 

                if (nbr <= 10)
                {

                nonbot:

                    Random rnd = new Random();

                    // Choisit des coordonnées aléatoires dans le tableau
                    int x = rnd.Next(grid.GetLength(0));
                    int y = rnd.Next(grid.GetLength(1));

                    // Récupère la valeur à ces coordonnées
                    if (grid[x, y] != "XX" || grid[x, y] != "OO")
                    {
                        Console.WriteLine("le bot choisis la case au coordoner  : " + grid[x, y]);
                        grid[x, y] = "OO"; 
                    }
                    else
                    {
                        goto nonbot;
                    };
                    Console.WriteLine("nbr est eguale a : " + nbr);
                }
                else
                {
                    egalite = true;
                };

            //partie verif win utulisateur

            winU = grid[0, 0] == "XX" && grid[0, 0] == grid[0, 1] && grid[0, 1] == grid[0, 2];

            winU = grid[1, 0] == "XX" && grid[1, 0] == grid[1, 1] && grid[1, 1] == grid[1, 2];

            winU = grid[2, 0] == "XX" && grid[2, 0] == grid[2, 1] && grid[2, 1] == grid[2, 2];

            winU = grid[0, 0] == "XX" && grid[0, 0] == grid[1, 0] && grid[0, 0] == grid[2, 0];

            winU = grid[0, 1] == "XX" && grid[0, 1] == grid[1, 1] && grid[1, 1] == grid[2, 1];

            winU = grid[0, 2] == "XX" && grid[0, 2] == grid[1, 2] && grid[1, 2] == grid[2, 2];

            winU = grid[0, 0] == "XX" && grid[0, 0] == grid[1, 1] && grid[0, 1] == grid[2, 2];

            winU = grid[0, 2] == "XX" && grid[0, 2] == grid[1, 1] && grid[1, 1] == grid[2, 0];



            //partie verif win BOT

            winB = grid[0, 0] == "OO" && grid[0, 0] == grid[0, 1] && grid[0, 1] == grid[0, 2];

            winB = grid[1, 0] == "OO" && grid[1, 0] == grid[1, 1] && grid[1, 1] == grid[1, 2];

            winB = grid[2, 0] == "OO" && grid[2, 0] == grid[2, 1] && grid[2, 1] == grid[2, 2];

            winB = grid[0, 0] == "OO" && grid[0, 0] == grid[1, 0] && grid[0, 0] == grid[2, 0];

            winB = grid[0, 1] == "OO" && grid[0, 1] == grid[1, 1] && grid[1, 1] == grid[2, 1];

            winB = grid[0, 2] == "OO" && grid[0, 2] == grid[1, 2] && grid[1, 2] == grid[2, 2];

            winB = grid[0, 0] == "OO" && grid[0, 0] == grid[1, 1] && grid[0, 1] == grid[2, 2];

            winB = grid[0, 2] == "OO" && grid[0, 2] == grid[1, 1] && grid[1, 1] == grid[2, 0];


            };

            if (winU) {

                Console.WriteLine("Vous avez gagnez falicitation !!");

            } else if (winB) {

                Console.WriteLine("Dommge c'est l'ordinateur qui a gagner tes nul MDR ");

            }else if (egalite == false)
            {
                Console.WriteLine("Coup dure il y a égualité ");
            };


            Console.WriteLine( "nbr est eguale a : " +nbr);





            Console.ReadKey();
       
        
        }
    
        
    
    
    
    }
}
