using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using libBanque;


namespace AppConsolebanque
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //creation d'un objet compteBancaire
            CompteBancaires unCompte = new CompteBancaires("123", "jhon", 120);

            //Affichage du contenu des propriété 
            Console.WriteLine("Numéro du compte : "+ unCompte.NumCompte);
            Console.WriteLine("Titulaire du compte"+ unCompte.NomTitulaire);
            Console.WriteLine("Solde du compte : " + unCompte.SoldeCompte);

            //test de la valeur du titulaire
            if (unCompte.NomTitulaire == "")
            {
                Console.WriteLine("le nom du titulaire est une chaine vide ");
            }
            if (unCompte.NomTitulaire == null)
            {
                Console.WriteLine("le nom du titulaire est un valeur null");
            }

            //création des compte
            Console.WriteLine("Création des compte ...");
            CompteBancaires cbPatrick = new CompteBancaires("0211651079b", "M. Martin Patrick");
            CompteBancaires cbMathilde = new CompteBancaires("123123123D", "Mme. Nouveau Malthilde", 1500.00m);

            //consultation des comptes avant opération
            Console.WriteLine();
            Console.WriteLine("Consultation du compte "+ cbPatrick.NumCompte + " de " + cbPatrick.NomTitulaire + " : ");
            Console.WriteLine(" -> Solde : " + cbPatrick.SoldeCompte);
            Console.WriteLine("Consultation du compte " + cbMathilde.NumCompte + " de " + cbMathilde.NomTitulaire + " : ");
            Console.WriteLine(" -> Solde : " + cbMathilde.SoldeCompte);

            cbMathilde.CrediterCompte(20);

            Console.WriteLine(" -> Solde +20 : " + cbMathilde.SoldeCompte);

            cbMathilde.DebiterCompte(20);

            Console.WriteLine(" -> Solde -20 : " + cbMathilde.SoldeCompte);

            cbMathilde.CrediterCompte(-20);

            Console.WriteLine(" -> Solde +20 : " + cbMathilde.SoldeCompte);

            cbMathilde.DebiterCompte(2000000000);

            Console.WriteLine(" -> Solde -20 : " + cbMathilde.SoldeCompte);

            AgenceBancaire agence = new AgenceBancaire("agence");

            agence.AjouterCompte(cbMathilde);
            agence.AjouterCompte(cbPatrick);



            List<CompteBancaires> listeComptes = agence.LesComptes;

            foreach (CompteBancaires compte in listeComptes)
            {
                Console.WriteLine(" ");
                Console.WriteLine("il y a le compte :");
                Console.WriteLine(compte.NomTitulaire);
                Console.WriteLine(compte.NumCompte);
                Console.WriteLine(" ");
            }

            agence.SupprimerCompte(cbPatrick);

            foreach (CompteBancaires compte in listeComptes)
            {
                Console.WriteLine(" ");
                Console.WriteLine(" Maintenant il y a le compte :");
                Console.WriteLine(compte.NomTitulaire);
                Console.WriteLine(compte.NumCompte);
                Console.WriteLine(" ");
            }

            Console.ReadKey();
        }
    }
}
