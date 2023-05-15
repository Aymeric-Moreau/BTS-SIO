
using System;

namespace Enonce1
{
    class Program
    {
        static void Main(string[] args)
        {
            //constante
            const int BILLET100 = 100;
            const int BILLET50 = 50;
            const int BILLET20 = 20;
            const int BILLET10 = 10;
            const int BILLET5 = 5;
            const int PIECE2 = 2;
            const int PIECE1 = 1;


            // variable
            int argent = 0;

            int result100 = 0;
            int result50 = 0;
            int result20 = 0;
            int result10 = 0;
            int result5 = 0;
            int result2 = 0;
            int result1 = 0;

            int rest100 = 0;
            int rest50 = 0;
            int rest20 = 0;
            int rest10 = 0;
            int rest5 = 0;
            int rest2 = 0;
            int rest1 = 0;


            //saisie de l'argent 
            Console.WriteLine("saisiser une somme d'argent : ");
            argent = Int32.Parse(Console.ReadLine());

            //calcule
            result100 = argent / BILLET100;
            rest100 = argent % BILLET100;

            result50 = rest100 / BILLET50;
            rest50 = rest100 % BILLET50;

            result20 = rest50 / BILLET20;
            rest20 = rest50 % BILLET20;

            result10 = rest20 / BILLET10;
            rest10 = rest20 % BILLET10;

            result5 = rest10 / BILLET5;
            rest5 = rest10 % BILLET5;

            result2 = rest5 / PIECE2;
            rest2 = rest5 % PIECE2;

            result1 = rest2 / PIECE1;
            rest1 = rest2 % PIECE1;

            // affichage du resltat
            Console.WriteLine("la somme ce d ecompose en : " + argent + "= (" + result100 + "*" + BILLET100 + ") + (" + result50 + "*" + BILLET50 + ") + (" + result20 + "*" + BILLET20 + ") + (" + result10 + "*" + BILLET10 + ") + (" + result5 + "*" + BILLET5 + ") + (" + result2 + "*" + PIECE2 + ") + (" + result1 + "*" + PIECE1 + ")");

            Console.ReadKey();

        }
    }
}