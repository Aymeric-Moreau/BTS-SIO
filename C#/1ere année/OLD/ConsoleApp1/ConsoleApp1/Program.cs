using System;

namespace Enonce1
{
    class Program
    {
        static void Main(string[] args)
        {

            const float prixLitre = 1.60;
            const int litreau100 = 5;
            float montantreparation = 0;
            int nombreKms = 0

            int montantAnnuel = 0;
            float consommationcarburant = 0;


            Console.WriteLine("Saisir le nombre de kms");
            nombreKms = Int32.Parse(Console.ReadLine());

            Console.WriteLine("Saisir le montant des réparations");
            montantreparation = Single.Parse(Console.ReadLine());

            consommationcarburant = nombreKms / 100;
            montantAnnuel = montantreparation + prixLitre * consommationcarburant * litreau100;
            Console.WriteLine("le montant annuel de vos frais est de : " + montantAnnuel);

            Console.ReadKey();

        }
    }
}