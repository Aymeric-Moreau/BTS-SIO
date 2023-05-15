using System;


namespace ClassesMetiers
{
    //Steven Coublant 

    /// <summary>
    /// Classe qui permet de définir les caractéristiques et le comportement spécifiques
    /// d'un objet de type PieceNonAgree
    /// </summary>
    public class PieceNonAgree : Piece
    {
        // Proprietes privees de la classe
        private String etat;

        /// <summary>
        /// constructeur de la classe
        /// </summary>
        /// <param name="ns">numéro de série</param>
        /// <param name="lib">libellé de la pièce</param>
        /// <param name="nb">nombre d'heures de fonctionnement</param>
        /// <param name="e">Etat de la pièce</param>
        public PieceNonAgree(String ns, String lib, int nb, String e) : base(ns, lib, nb)
        {
            // initialise les propriétes de la classe
            etat = e;
        }
        /// <summary>
        /// Retourne l'état de la pièce
        /// </summary>
        public string Etat
        {
            get => etat;

        }
        /// <summary>
        /// passe l'etat à VERT
        /// </summary>
        public void SetVert()
        {
            etat = "VERT";
        }

        /// <summary>
        /// passe l'etat à ROUGE
        /// </summary>
        public void SetRouge()
        {
            etat = "ROUGE";
        }


        /// <summary>
        /// passe l'etat à ORANGE
        /// </summary>
        public void SetOrange()
        {
            etat = "ORANGE";
        }


        /// <summary>
        /// retourne les caracteristiques d'une piece non agree
        /// </summary>
        public override string ToString()
        {
            return base.ToString() + "Etat de la pièce : " + etat;
        }

    }
}
