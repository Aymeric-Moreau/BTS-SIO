using System;
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

            Console.WriteLine(p1.ToString() + "\n");
            Console.WriteLine(p4.ToString() + "\n");

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Changement de l'état de la pièce p4 \n");
            ((PieceNonAgree)p4).SetRouge();
            Console.WriteLine(p4.ToString() + "\n");

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("On rebute la pièce p6 \n");
            Magasin.Rebuter(((PieceNonAgree)p6));
            Console.WriteLine(p6.ToString() + "\n");

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Révision des pièce ayant 4000 heures de fonctionnement ou plus \n");
            Magasin.Reviser(4000);

            Console.WriteLine(p2.ToString() + "\n");
            Console.WriteLine(p3.ToString() + "\n");
            Console.WriteLine(p5.ToString() + "\n");

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Affichage de la collection lesPieces \n");
            foreach (Piece p in Magasin.LesPieces)
            {
                Console.WriteLine(p.ToString() + "\n");
            }

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Suppression de la pièce E01 de la collection \n");

            Magasin.Supprimer("E01");

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Affichage de la collection lesPieces après suppression de la pièce \n");
            foreach (Piece p in Magasin.LesPieces)
            {
                Console.WriteLine(p.ToString() + "\n");
            }

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Affichage des pièces agrées \n");
            foreach (PieceAgree p in Magasin.lesPiecesAgrees())
            {
                Console.WriteLine(p.ToString() + "\n");
            }

            Console.WriteLine("_______________________________________________________________ \n");

            Console.WriteLine("Affichage des pièces non agrées \n");
            foreach (PieceNonAgree p in Magasin.lesPiecesNonAgreees("ORANGE"))
            {
                Console.WriteLine(p.ToString() + "\n");
            }

            Console.ReadKey();
        }
    }
}
