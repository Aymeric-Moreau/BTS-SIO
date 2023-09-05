using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enonce_4
{
    class Program
    {
        static void Main(string[] args)
        {
            //variable
            char lettre;

            //saisie de la lettre 
            Console.WriteLine("Saisir la lettre :");
            lettre = char.Parse(Console.ReadLine());
            lettre = char.ToLower(lettre);

            if (char.IsLetter(lettre))
            {
                Console.WriteLine("erreur ce n'est pas une lettre :");
            }

            else
            {
                //swith
                switch (lettre)
                {
                    case 'a':
                    case 'e':
                    case 'i':
                    case 'o':
                    case 'u':
                    case 'y':
                        Console.WriteLine("la lettre est une voyelle ");
                        break;
                    default:
                        Console.WriteLine("la lettre est une consonne ");
                        break;


                }
            }
            Console.ReadKey();
        }
    }
}