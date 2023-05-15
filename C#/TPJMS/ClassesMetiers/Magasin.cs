using System;
using System.Collections.Generic;


namespace ClassesMetiers
{
    /// <summary>
    /// Classe qui permet de définir les caractéristiques et le comportement
    /// d'un objet de type Magasin
    /// </summary>
    public static class Magasin
    {

        private  static List<Piece> lesPieces = new List<Piece>();
        private  static String responsableMagasin;

        

        /// <summary>
        /// Retourne le nom et prénom du responsable du magasin
        /// Modifie le nom et prénom du responsable du magasin
        /// </summary>
        public static string ResponsableMagasin
        {
            get => responsableMagasin;
            set => responsableMagasin = value;
        }
        /// <summary>
        /// Retourne la liste des pieces
        /// Modifie la liste de pièces
        /// </summary>
        public static List<Piece> LesPieces
        {
            get => lesPieces;
            set => lesPieces = value;
        }


        /// <summary>
        /// Permet d'ajouter une pièce à la collection des pièces
        /// </summary>
        /// <param name="e">une pièce</param>
        public  static void AjouterPiece(Piece e)
        {
            lesPieces.Add(e);
        }

        /// <summary>
        /// L'état de la pièce passée en paramètre prend la valeur ROUGE
        /// </summary>
        /// <param name="p">piece non agrée</param>
        public static void Rebuter(PieceNonAgree p)
        {
            p.SetRouge();
        }

        /// <summary>
        /// L'état passe à la valeur ORANGE
        /// pour toutes les pièces non agréées qui sont à l'état VERT
        ///et qui ont un nombre d'heures d'utilisation égal ou supérieur à la valeur du paramètre
        /// </summary>
        /// <param name="nbH">nombre d'heures</param>
        public  static void Reviser(int nbH)
        {
            foreach(Piece piece in lesPieces)
            {
                if(piece is PieceNonAgree )
                {
                    if (((PieceNonAgree)piece).Etat == "VERT"  && piece.NbHeures >= nbH)
                    {
                        
                        ((PieceNonAgree)piece).SetOrange();
                    }
                    
                }
            }
        }

        /// <summary>
        /// Permet de supprimer de la collection la pièce dont le numéro de série est passé en paramètre
        /// </summary>
        /// <param name="n">numéro de série de la pièce</param>
        public  static void Supprimer(String n)
        {
            Piece pieceASupprimer = null;
            foreach (Piece piece in LesPieces)
            {
                if (piece.NumSerie == n)
                {
                    pieceASupprimer = p;
                    break;
                }
            }
            if (pieceASupprimer != null)
            {
                LesPieces.Remove(pieceASupprimer);
            }
            
        }

        /// <summary>
        /// Retourne la liste des pièces agréées
        /// </summary>
        /// <returns>liste des pièces agréées</returns>
        public  static List<PieceAgree> lesPiecesAgrees()
        {
             List<PieceAgree> lesPiecesA = new List<PieceAgree>();

            foreach (Piece piece in lesPieces)
            {
                if (piece is PieceAgree)
                {
                    
                    lesPiecesA.Add((PieceAgree)piece);
                }
            }
            return lesPiecesA;
        }



        /// <summary>
        /// Retourne la liste des pièces non agréées relatives à l'état passé en paramètre
        /// </summary>
        /// <param name="etat">état souhaité</param>
        /// <returns>Retourne la liste des pièces non agréées relatives à l'état passé en paramètre</returns>
        public static List<PieceNonAgree> lesPiecesNonAgreees(string etat)
        {

            List<PieceNonAgree> lesPiecesN = new List<PieceNonAgree>();

            foreach (Piece piece in lesPieces)
            {
                if (piece is PieceNonAgree && ((PieceNonAgree)piece).Etat == etat)
                {
                   
                    

                        lesPiecesN.Add((PieceNonAgree)piece);
                    
                    
                }
            }
            return lesPiecesN;
        }

       

    }
}

