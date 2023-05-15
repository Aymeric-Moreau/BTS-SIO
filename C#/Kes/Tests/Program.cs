using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using BibliothèqueKES;



namespace Tests
{
    class Program
    {
        static void Main(string[] args)
        {
            //Instanciation des différents grades
            Grade gradeEleveGrade = new Grade('A', "Grade A", 20.5f);
            Grade gradeMoinsEleve = new Grade('B', "Grade B", 15f);
            Grade gradeBas = new Grade('C', "Grade V", 12.5f);

            // instanciation des différent employés
            Employe employe1 = new Employe(1, "Durand", new DateTime(2017, 05, 02), gradeEleveGrade);
            Employe employe2 = new Employe(2, "Dupond", new DateTime(2014, 05, 02), gradeMoinsEleve);
            Employe employe3 = new Employe(3, "Julia", new DateTime(2008, 05, 02), gradeBas);
            Employe employe4 = new Employe(4, "Sophie", new DateTime(2002, 05, 02), gradeMoinsEleve);
            Employe employe5 = new Employe(5, "Paul", new DateTime(2020, 05, 02), gradeBas);
            
            // Test pour le cout horaire des différent employé 
            Console.WriteLine("le cout horaire de " + employe1.Nom + " est de " + employe1.CoutHoraire() + " euros");
            Console.WriteLine("le cout horaire de " + employe2.Nom + " est de " + employe2.CoutHoraire() + " euros");
            Console.WriteLine("le cout horaire de " + employe3.Nom + " est de " + employe3.CoutHoraire() + " euros");
            Console.WriteLine("le cout horaire de " + employe4.Nom + " est de " + employe4.CoutHoraire() + " euros");
            Console.WriteLine("le cout horaire de " + employe5.Nom + " est de " + employe5.CoutHoraire() + " euros");

            // Instanciation des intervention 
            Intervention intervention1 = new Intervention(1, new DateTime(2023, 02, 10), 2, 1.50f, employe1);
            Intervention intervention2 = new Intervention(2, new DateTime(2023, 02, 15), 5, 1.25f, employe2);
            Intervention intervention3 = new Intervention(3, new DateTime(2023, 03, 03), 4, 2f, employe3);
            Intervention intervention4 = new Intervention(4, new DateTime(2023, 03, 10), 3, 1.25f, employe4);
            Intervention intervention5 = new Intervention(5, new DateTime(2023, 03, 08), 4, 2.25f, employe5);
            
            // Rest des frais kilométriques des intervention
            Console.WriteLine(" le cout kilométrique de I'intervention n°1 pour une distance de 45 kms est de " + intervention1.FraisKm(45)) ;
            Console.WriteLine(" le cout kilométrique de I'intervention n°2 pour une distance de 45 kms est de " + intervention2.FraisKm(45));
            Console.WriteLine(" le cout kilométrique de I'intervention n°3 pour une distance de 45 kms est de " + intervention3.FraisKm(50));
            Console.WriteLine(" le cout kilométrique de I'intervention n°4 pour une distance de 45 kms est de " + intervention4.FraisKm(10));
            Console.WriteLine(" le cout kilométrique de I'intervention n°5 pour une distance de 45 kms est de " + intervention5.FraisKm(10));
            Console.WriteLine();

            
            // Test des frois de main d'oeuvre occasionnés par l'intervention
            Console.WriteLine(" frais de main d'oeuvre occasionnés par l'intervention n°1 est de " + intervention1.FraisMo() + " euros");
            Console.WriteLine(" frais de main d'oeuvre occasionnés par l'intervention n°2 est de " + intervention2.FraisMo() + " euros");
            Console.WriteLine(" frais de main d'oeuvre occasionnés par l'intervention n°3 est de " + intervention3.FraisMo() + " euros");
            Console.WriteLine(" frais de main d'oeuvre occasionnés par l'intervention n°4 est de " + intervention4.FraisMo() + " euros");
            Console.WriteLine(" frais de main d'oeuvre occasionnés par l'intervention n°5 est de " + intervention5.FraisMo() + " euros");
            
            //instaciation des client
            Client client1 = new Client(1, "Delaroche", "17 Rue des fleurs jeunes", "37000", "Tours", 45);
            Client client2 = new Client(2, "François", "84 Rue des pierres", "37520", "La Riche", 20);
            Client client3 = new Client(3, "Daphné", "65 Rue de la Martin", "37700", "Saint—Pierre—des—Corps", 50);
            Client client4 = new Client(4, "Anna", "32 Rue de la campagne", "37700", "La Ville-aux-dames", 10);
            Client client5 = new Client(5, "Florian", "23 Rue Du chateau", "37550", "Saint-Avertin", 6);
            
            ////instanciation des contrat
            Contrat contrat1 = new Contrat(1, new DateTime(2023, 02, 07), 700.2f, client1);
            Contrat contrat2 = new Contrat(2, new DateTime(2023, 03, 01), 800.2f, client2);
            Contrat contrat3 = new Contrat(3, new DateTime(2023, 03, 02), 250.2f, client3);
            Contrat contrat4 = new Contrat(4, new DateTime(2023, 03, 04), 300.69f, client4);
            Contrat contrat5 = new Contrat(5, new DateTime(2023, 03, 06), 600.2f, client5);
            
            ////ajouter intervention dans la liste des intervention des contrat
            contrat1.ListeInterventions.Add(intervention1);
            contrat1.ListeInterventions.Add(intervention2);
            contrat3.ListeInterventions.Add(intervention3);
            contrat4.ListeInterventions.Add(intervention4);
            contrat4.ListeInterventions.Add(intervention5);
            
            ////Les écarts des intervention
            Console.WriteLine("Contrat " + contrat1.Numero + " " + contrat1.leClient.Nom + " " + contrat1.DateContrat.ToShortDateString() + " "+ contrat1.MontantContrat + " euros "+ contrat1.Ecart()+ " euros");
            Console.WriteLine("Contrat " + contrat2.Numero + " " + contrat2.leClient.Nom + " " + contrat2.DateContrat.ToShortDateString() + " "+ contrat2.MontantContrat + " euros " + contrat2.Ecart() + " euros");
            Console.WriteLine("Contrat " + contrat3.Numero + " " + contrat3.leClient.Nom + " " + contrat3.DateContrat.ToShortDateString() + " "+ contrat3.MontantContrat + " euros " + contrat3.Ecart() + " euros");
            Console.WriteLine("Contrat " + contrat4.Numero + " " + contrat4.leClient.Nom + " " + contrat4.DateContrat.ToShortDateString() + " " + contrat4.MontantContrat + " euros " + contrat4.Ecart() + " euros");
            Console.WriteLine("Contrat " + contrat5.Numero + " " + contrat5.leClient.Nom + " " + contrat5.DateContrat.ToShortDateString() + " "+ contrat5.MontantContrat + " euros " + contrat5.Ecart() + " euros");

            

            Console.ReadKey();
        }
    }
}
