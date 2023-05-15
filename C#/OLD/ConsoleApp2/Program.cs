

namespace Vinotiere
{
    class Program
    {
        static void Main(string[] args)
        {
            //Déclaration de variables
            int nbPersonnes = 0;
            int nbNuitees = 0;
            decimal montantReduc = 0;
            decimal tauxReduction = 0;
            decimal montantFacture = 0;


            //Saisie des données
            Console.WriteLine("Entrez le nombre de personnes de la famille");
            nbPersonnes = Int32.Parse(Console.ReadLine());
            Console.WriteLine("Entrez le nombre de nuitées");
            nbNuitees = Int32.Parse(Console.ReadLine());
            Console.WriteLine("Entrez le montant total facturé");
            montantFacture = Decimal.Parse(Console.ReadLine());

            //Nombre de nuitées recalculé (à écrire)
            if (nbPersonnes > 5)
            {
                nbNuitees = nbNuitees * 4;
            }
            else if (nbPersonnes > 2)
            {
                nbNuitees = nbNuitees * 3;
            }
            else
            {
                nbNuitees = nbNuitees * 2;
            }

            //Détermination du taux de réduction (à écrire)
            if (nbNuitees > 14)
            {
                tauxReduction = 0.30m;
            }
            else if (nbNuitees > 8)
            {
                tauxReduction = 0.25m;
            }
            else if (nbNuitees > 5)
            {
                tauxReduction = 0.20m;
            }

            if (montantFacture > 2000)
            {
                tauxReduction = tauxReduction + (tauxReduction * 0.50m);
            }
            else if (montantFacture > 1000)
            {
                tauxReduction = tauxReduction + (tauxReduction * 0.25m);
            }
            //Calcul du montant de la réduction (à écrire)
            montantReduc = montantFacture * tauxReduction;

            //affichage du montant réduction
            Console.WriteLine("Vous avez obtenu un taux de réduction de : " + tauxReduction);
            Console.WriteLine("le montant de la réduction est de " + montantReduc);
            Console.ReadKey();
        }
    }
}
