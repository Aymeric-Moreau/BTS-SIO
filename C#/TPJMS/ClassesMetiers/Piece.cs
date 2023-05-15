using System;


namespace ClassesMetiers
{
    /// <summary>
    /// Classe qui permet de définir les caractéristiques et le comportement 
    /// d'un objet de type Piece
    /// </summary>
    public abstract class Piece
    {
        // Proprietes privees de la classe
        private String numSerie;
        private String libellePiece;
        private int nbHeures;

        /// <summary>
        /// constructeur de la classe
        /// </summary>
        /// <param name="ns">numéro de série</param>
        /// <param name="l">libellé de la pièce</param>
        /// <param name="nb">nombre d'heures de fonctionnement</param>
        public Piece(String ns, String l, int nb)
        {
            // initialise les proprietes de la classe
            numSerie = ns;
            libellePiece = l;
            nbHeures = nb;
        }

        /// <summary>
        /// Retourne le numéro de série
        /// </summary>
        public string NumSerie
        {
            get => numSerie;
        }

        /// <summary>
        /// Retourne le libéllé de la pièce
        /// </summary>
        public string LibellePiece
        {
            get => libellePiece;
        }

        /// <summary>
        /// Retourne le nombre d'heures de fonctionnement
        /// Modifie la valeur de la propriété nbHeures
        /// </summary>
        public int NbHeures
        {
            get => nbHeures;
            set => nbHeures = value;
        }

        
        /// <summary>
        /// retourne les caracteristiques d'une piece
        /// </summary>

        public override string ToString()
        {
            return numSerie + "  " + libellePiece + "  " + nbHeures;
        }
    }











}
