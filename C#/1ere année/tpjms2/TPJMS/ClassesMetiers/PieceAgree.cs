using System;

namespace ClassesMetiers
{
    //Steven Coublant 

    /// <summary>
    /// Classe qui permet de définir les caractéristiques et le comportement spécifiques
    /// d'un objet de type PieceAgree
    /// </summary>
    public class PieceAgree : Piece
    {
        // Proprietes privees de la classe
        private DateTime dateAgrement;
        private Constructeur leConstructeur;

        /// <summary>
        /// constructeur de la classe
        /// </summary>
        /// <param name="ns">numéro de série de la pièce</param>
        /// <param name="lib">libellé de la pièce</param>
        /// <param name="nb">nombre d'heures de fonctionnement</param>
        /// <param name="d">date de l'agrément</param>
        /// <param name="c">Constructeur de la pièce</param>
        public PieceAgree(String ns, String lib, int nb, DateTime d, Constructeur c) : base(ns, lib, nb)
        {
            // initialise les proprietes de la classe

            dateAgrement = d;
            leConstructeur = c;
        }

        /// <summary>
        /// Retourne la date d'agrément
        /// </summary>
        public DateTime DateAgrement
        {
            get => dateAgrement;

        }

        
        /// <summary>
        /// retourne les caracteristiques d'une piece agréée
        /// </summary>
        public override string ToString()
        {
            return base.ToString() + "Date de l'agrement : " + dateAgrement + "\nConstructeur de la pièce : " + leConstructeur ;
        }

    }
}
