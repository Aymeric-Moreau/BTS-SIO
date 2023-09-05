using System;
using System.Collections.Generic;
using System.Linq;
using ClassesMetiers;

namespace ProjetTests
{
    class Program
    {
        // Steven Coublant 
        static void Main(string[] args)
        {
            //Valorise le nom et prénom du responsable du magasin
            Magasin.ResponsableMagasin = "Marc Durand";

            //Instancie les objets
            Constructeur leConstructeur = new Constructeur("Arkwin", "Systèmes hydrauliques");
            Piece p1 = new PieceAgree("RE01", "Reacteur", 2000, new DateTime(2019, 2, 10), leConstructeur);
            Piece p2 = new PieceNonAgree("A01", "Aile", 4000, "VERT");
            Piece p3 = new PieceNonAgree("H01", "Hublot", 10000, "VERT");
            Piece p4 = new PieceNonAgree("R02", "Roue", 1000, "VERT");
            Piece p5 = new PieceNonAgree("E01", "Essieux", 4500, "VERT");
            Piece p6 = new PieceNonAgree("E02", "Turbine", 10, "VERT");
            Piece p7 = new PieceAgree("T01", "Turbine", 2000, new DateTime(2020, 2, 10), leConstructeur);

            Magasin.AjouterPiece(p1);
            Magasin.AjouterPiece(p2);
            Magasin.AjouterPiece(p3);
            Magasin.AjouterPiece(p4);
            Magasin.AjouterPiece(p5);
            Magasin.AjouterPiece(p6);
            Magasin.AjouterPiece(p7);

            //on affiche les information de p1 et de p2
            Console.WriteLine(p1.ToString());

            Console.WriteLine(p2.ToString());


            // on fais passer l'etat de p2 a rouge et on affiche ces information
            Magasin.Rebuter((PieceNonAgree)p2);

            Console.WriteLine(p2.ToString());


            //on passe toutes les piece non agree qui on plus de temp d'utilisaton ou éguale a 4400
            Magasin.Reviser(4000);


            // et on affiche les info de p5 comme c'est le seul toucher par la focntion reviser
            Console.WriteLine("p3 a été reviser : " + p3.ToString());
            Console.WriteLine("p 2 n'a pas été réviser vue que sont état est a rouge" + p2.ToString());
            Console.WriteLine(" p5 a été reviser : " + p5.ToString());


            Console.WriteLine(" \n Affichage des piece  agree");
            // appel de la fonction pour récupérer la liste des pièces agréées
            List<PieceAgree> listePiecesAgrees = Magasin.lesPiecesAgrees();

            // itération sur la liste pour afficher les infos de chaque pièce
            foreach (PieceAgree piece in listePiecesAgrees)
            {
                Console.WriteLine("dans la liste il y " + piece.ToString() + " en tant que piece agree");
            }

            Console.WriteLine(" \n Affichage des piece non agree d'ont l'etat est a vert ");
            // appel de la fonction pour récupérer la liste des pièces non agréées
            List<PieceNonAgree> listePiecesNonAgrees = Magasin.lesPiecesNonAgreees("VERT");

            // itération sur la liste pour afficher les infos de chaque pièce
            foreach (PieceNonAgree piece in listePiecesNonAgrees)
            {
                Console.WriteLine("dans la liste il y " + piece.ToString() + " en tant que piece non agree");
            }

            Console.WriteLine("\n E02 est supprimer");
            //on supprime de la liste la piece E02
            Magasin.Supprimer("E02");

            listePiecesNonAgrees = Magasin.lesPiecesNonAgreees("VERT");

            // et on r'affiche les piece non agree
            foreach (PieceNonAgree piece in listePiecesNonAgrees)
            {
                Console.WriteLine("dans la liste il y " + piece.ToString() + " en tant que piece non agree");
            }

            Console.ReadKey();
        }
    }
}
