using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace morpion
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // variable 
            string a1 = "a1";
            string a2 = "a2";
            string a3 = "a3";
            string b1 = "b1";
            string b2 = "b2";
            string b3 = "b3";
            string c1 = "c1";
            string c2 = "c2";
            string c3 = "c3";
            string choix;
            Random rnd = new Random();
            int choixBot;
            int nbrE = 0;
            int win = 0;
            Boolean ok = true;
            Boolean okB = false;

            do { // on affiche la grille avec les variable dans les case 

            Console.WriteLine("Tableau 1");
            Console.WriteLine("|--|--|--|");
            Console.WriteLine("|" + a1 + "|" + a2 + "|" + a3 + "|");
            Console.WriteLine("|--|--|--|");
            Console.WriteLine("|" + b1 + "|" + b2 + "|" + b3 + "|");
            Console.WriteLine("|--|--|--|");
            Console.WriteLine("|" + c1 + "|" + c2 + "|" + c3 + "|");
            Console.WriteLine("|--|--|--|");

                // on demande qu'elle case veut choisir le joueur 
            Console.WriteLine("choisissez sur quelle case placer votre croix :");
            choix = Console.ReadLine();

                // on fait correspondre la case choisis avec la bonne case et on verifie si la case n'est pas déja utiliser 
            do {
                ok = true;
                if (choix == a1)
                {
                        Console.WriteLine(" vous avez tapez a1 (cette partie est ok)");
                    while (a1 == "XX" || a1 == "OO")
                    {

                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }
                    a1 = "XX";
                } else if (choix == a2)
                {
                    while (a2 == "XX" || a2 == "OO")
                    {

                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }
                    a2 = "XX";
                } else if (choix == a3)
                {
                    while (a3 == "XX" || a3 == "OO")
                    {

                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }
                    a3 = "XX";
                } else if (choix == b1)
                { while (b1 == "XX" || b1 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    b1 = "XX";
                } else if (choix == b2)
                { while (b2 == "XX" || b2 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    b2 = "XX";
                } else if (choix == b3)
                { while (b3 == "XX" || b3 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    b3 = "XX";
                } else if (choix == c1)
                { while (c1 == "XX" || c1 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    c1 = "XX";
                } else if (choix == c2)
                { while (c2 == "XX" || c2 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    c2 = "XX";
                } else if (choix == c3)
                { while (c3 == "XX" || c3 == "OO")
                    {
                        Console.WriteLine("erreur cette case est déja prise, veillez choisir une autre case: ");
                        choix = Console.ReadLine();
                    }

                    c3 = "XX";
                }
                else
                {
                    Console.WriteLine("Erreur veillez choisir sur quelle case placer votre croix : (a1, a2, a3, b1...)");
                    choix = Console.ReadLine();
                    ok = false;
                };
            } while (ok == false);

            // au tour du bot on commence par générer un chifre aléatoirment entre 0 et 8 

            choixBot = rnd.Next(8);
                Console.WriteLine("la valeur choisis par le bot est " + choixBot);
                do
            {

                // ensuite on regarde a quelle casse correspond le chiffre générer et si il ne coorespond pas a une case déja utiliser 

                if (choixBot == 0)// && (a1 != "OO" || a1 != "XX") )
                {
                        if (a1 == "XX" || a1 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            a1 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 0");
                        }

                    }
                else if (choixBot == 1)// && (a2 != "OO" || a2 != "XX"))
                {
                        if (a2 == "XX" || a2 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            a2 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 1");
                        }

                    }
                else if (choixBot == 2 )//&& (a3 != "OO" || a3 != "XX"))
                {
                        if (a3 == "XX" || a3 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            a3 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 2");
                        }
                    }
                else if (choixBot == 3)// && (b1 != "OO" || b1 != "XX"))
                {
                        if (b1 == "XX" || b1 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            b1 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 3");
                        }
                    }
                else if (choixBot == 4)// && (b2 != "OO" || b2 != "XX"))
                {
                        if (b2 == "XX" || b2 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            b2 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 4");
                        }
                    }
                else if (choixBot == 5)// && (b3 != "OO" || b3 != "XX"))
                {
                        if (b3 == "XX" || b3 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            b3 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 5");
                        }
                    }
                else if (choixBot == 6 )//&& (c1 != "OO" || c1 != "XX"))
                {
                        if (c1 == "XX" || c1 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            c1 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 6");
                        }
                    }
                else if (choixBot == 7 )//&& (c2 != "OO" || c2 != "XX"))
                {
                        if (c2 == "XX" || c2 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            c2 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 7");
                        }
                    }
                else if (choixBot == 8 )//&& (c3 != "OO" || c3 != "XX"))
                {
                        if (c3 == "XX" || c3 == "OO")
                        {
                            choixBot = rnd.Next(8);
                            okB = true;
                        }
                        else
                        {
                            c3 = "OO";
                            Console.WriteLine("le if pour le bot fonctionne 8");
                        }
                    } //else // si elle est déja utiliser on regénere un chifre et on refait la boucle 
                {
                        //Console.WriteLine("le if pour le bot refait un tours");
                        //choixBot = rnd.Next(8);
                    //okB = true;
                };
                } while (okB == true);

                Console.WriteLine("Tableau 2");
                Console.WriteLine("|--|--|--|");
                Console.WriteLine("|" + a1 + "|" + a2 + "|" + a3 + "|");  
                Console.WriteLine("|--|--|--|");
                Console.WriteLine("|" + b1 + "|" + b2 + "|" + b3 + "|");
                Console.WriteLine("|--|--|--|");
                Console.WriteLine("|" + c1 + "|" + c2 + "|" + c3 + "|");
                Console.WriteLine("|--|--|--|");

                // on verifie si il y a 3 variable de suite éguale a XX ou OO si il y a 3 variable de suite eguale a XX on met 1 dans win et si elles sont éguale a OO on met 2 dans win 
             if (a1 + a2 + a3 == "XXXXXX")
            {
                win = 1;
            };
            if (b1 + b2 + b3 == "XXXXXX")
            {
                win = 1;
            };
            if (c1 + c2 + c3 == "XXXXXX")
            {
                win = 1;
            };
            if (a1 + b2 + c3 == "XXXXXX")
            {
                win = 1;
            };
            if (c1 + b2 + a3 == "XXXXXX")
            {
                win = 1;
            };
            if (a1 + b1 + c1 == "XXXXXX")
            {
                win = 1;
            };
            if (a2 + b2 + c2 == "XXXXXX")
            {
                win = 1;
            };
            if (a3 + b3 + c3 == "XXXXXX")
            {
                win = 1;
            };

            if (a1 + a2 + a3 == "OOOOOO")
            {
                win = 2;
            };
            if (b1 + b2 + b3 == "OOOOOO")
            {
                win = 2;
            };
            if (c1 + c2 + c3 == "OOOOOO")
            {
                win = 2;
            };
            if (a1 + b2 + c3 == "OOOOOO")
            {
                win = 2;
            };
            if (c1 + b2 + a3 == "OOOOOO")
            {
                win = 2;
            };
            if (a1 + b1 + c1 == "OOOOOO")
            {
                win = 2;
            };
            if (a2 + b2 + c2 == "OOOOOO")
            {
                win = 2;
            };
            if (a3 + b3 + c3 == "OOOOOO")
            {
                win = 2;
            };
                Console.WriteLine(a1+a2+a3);
                Console.WriteLine(a1 + b2 + c3);
                nbrE++;

                Console.WriteLine("nombre de répetition :"+ nbrE);
                Console.WriteLine("valeur de la variable win"+win);
                Console.WriteLine("choix qu'a effectuer le bot "+choixBot);

            } while (win == 0 || nbrE < 9); // la boucle continue tant que win est eguale a 0 ou que nbrE est inferieur 

            if(win == 1)
            {
                Console.WriteLine("Le joueur a gagné !!");
            }else if (win == 2)
            {
                Console.WriteLine("L'ordinateur a gagné ! ! ");
            };

            Console.ReadKey();
        }
    }
}
