using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Pierre_feuille_ciseaux
{
    class Program
    {
        static void Main(string[] args)
        {   
            // constante 
            const int Pierre = 0;
            const int feuille = 1;
            const int ciseaux = 2;

            // variable 
            Random rnd = new Random();
            int choix = 0;
            string nvlP;
            int choixBot = 0;

            do
            {
                //choisissez soit pierre (0) soit feuille (1) et soit papier (2) 
                Console.WriteLine("choisissez soit pierre (0) soit feuille (1) et soit ciseaux (2) : ");
                choix = Int32.Parse(Console.ReadLine());

                while(0 <= choix && choix > 3)
                {
                    Console.WriteLine("erreur veillez choisissez soit pierre (0) soit feuille (1) et soit ciseaux (2) : ");
                    choix = Int32.Parse(Console.ReadLine());
                };

                choixBot = rnd.Next(3);

                Console.WriteLine("le bot a choisis le numéro :" + choixBot);

                if (choixBot == choix)
                {
                    Console.WriteLine("le bots a fais la méme chose que vous, il y a égalité");
                };

                if(choixBot == Pierre && choix == feuille)
                {
                    Console.WriteLine("l'utilisateur a gagné");
                };

                if (choixBot == feuille && choix == Pierre)
                {
                    Console.WriteLine("l'ordinateur a gagné");
                };

                if (choixBot == Pierre && choix == ciseaux)
                {
                    Console.WriteLine("l'ordinateur a gagné");
                };

                if (choixBot == feuille && choix == ciseaux)
                {
                    Console.WriteLine("l'utilisateur a gagné");
                };
                if (choixBot == ciseaux && choix == Pierre)
                {
                    Console.WriteLine("l'utilisateur a gagné");
                };
                if (choixBot == ciseaux && choix == feuille)
                {
                    Console.WriteLine("l'utilisateur a gagné");
                };

                Console.WriteLine("Voulez vous refaire une partie ? o/n");
                nvlP = Console.ReadLine();


            } while (nvlP == "o");

            Console.ReadKey();
        }
    }
}
