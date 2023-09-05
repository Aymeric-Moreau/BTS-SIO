using System;


namespace BibliothèqueKES {
    public class Grade {
        #region Propriétés privées de la classe
        private char code;
        private string libelle;
        private float taux;
        #endregion

        #region Constructeur 
        /// <summary>
        /// instancie un objet de type grade
        /// </summary>
        /// <param name="c">code du grade</param>
        /// <param name="l">libellé du grade</param>
        /// <param name="t">taux horaire spécifique au grade</param>
        public Grade(char c, string l, float t)
        {
            code = c;
            libelle = l;
            taux = t;
        }
        #endregion

        #region Accesseurs
        /// <summary>
        /// retourne le code du grade
        /// </summary>
        public char Code { 
            get => code; 
        }
        /// <summary>
        /// retourne le libellé du grade
        /// </summary>
        public string Libelle
        {
            get => libelle;
        }

        /// <summary>
        /// retourne le taux horaire spécifique au grade
        /// </summary>
        public float Taux
        {
            get => taux;
        }
       
        #endregion

    }
}
