using System;
using System.Xml.Serialization;

namespace test

{

    class Program

    {

        static void Main(string[] args)
        {

            //variable 
            int nbr1 = 0;
            int nbr2 = 0;
            int nbr3 = 0;
            int nbr4 = 0;
            int nbr5 = 0;
            int nbr6 = 0;
            int nbr7 = 0;
            int nbr8 = 0;
            int nbr9 = 0;
            int nbr10 = 0;



            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr1 = Int32.Parse(Console.ReadLine());
                if (nbr1 > 30 || nbr1 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr1 > 30 || nbr1 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr2 = Int32.Parse(Console.ReadLine());
                if (nbr2 > 30 || nbr2 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr2 > 30 || nbr2 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr3 = Int32.Parse(Console.ReadLine());
                if (nbr3 > 30 || nbr3 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr3 > 30 || nbr3 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr4 = Int32.Parse(Console.ReadLine());
                if (nbr4 > 30 || nbr4 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr4 > 30 || nbr4 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr5 = Int32.Parse(Console.ReadLine());
                if (nbr5 > 30 || nbr5 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr5 > 30 || nbr5 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr6 = Int32.Parse(Console.ReadLine());
                if (nbr6 > 30 || nbr6 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr6 > 30 || nbr6 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr7 = Int32.Parse(Console.ReadLine());
                if (nbr7 > 30 || nbr7 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr7 > 30 || nbr7 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr8 = Int32.Parse(Console.ReadLine());
                if (nbr8 > 30 || nbr8 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr8 > 30 || nbr8 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr9 = Int32.Parse(Console.ReadLine());
                if (nbr9 > 30 || nbr9 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr9 > 30 || nbr9 < 1);

            do
            {
                Console.WriteLine("saisir un nombre compris entre 1 et 30");
                nbr10 = Int32.Parse(Console.ReadLine());
                if (nbr10 > 30 || nbr10 < 1)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                }
            } while (nbr10 > 30 || nbr10 < 1);

            Console.WriteLine("la somme des élément saisi est éguale a : " + (nbr1 + nbr2 + nbr3 + nbr4 + nbr5 + nbr6 + nbr7 + nbr8 + nbr9 + nbr10));






            // corection 

            int n;
            int somme = 0;
            int i = 0;

            for(i =0; i < 10; i++)
            {
                Console.WriteLine("saisisez un nombre entre 1 et 30")
                    n=int.Parse(Console.ReadLine());
                while(n < 1 ||  n > 30)
                {
                    Console.WriteLine("Erreur de saisie, entrz un nombre entre 1 et 30");
                    n = int.Parse(Console.ReadLine());

                }
                somme = somme + n;

            }
            Console.WriteLine("la somme des élément saisi est éguale a : " + somme);
           Console.ReadKey();
        }
    }
}
