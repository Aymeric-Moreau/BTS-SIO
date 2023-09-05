using System;


namespace ClassesValiers
{
    public class Categorie
    {
        /// <summary>
        /// propriétés privées
        /// </summary>
        private string numCategorie;
        private string nomCategorie;

        /// <summary>
        /// constructeur
        /// </summary>
        public Categorie(string num, string nom)
        {
            this.numCategorie = num;
            this.nomCategorie = nom;

        }




        /// <summary>
        /// retourne le nom de la catégorie
        /// </summary>
        public string NomCategorie
        {
            get => nomCategorie;
        }
    }
}
