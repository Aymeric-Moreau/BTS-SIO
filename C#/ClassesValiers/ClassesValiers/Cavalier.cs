using System;


namespace ClassesValiers
{
    public class Cavalier
    {
        /// <summary>
        /// propriétés privées
        /// </summary>
        private int numLicence;
        private DateTime dateLicence;
        private string nomCavalier;
        private string prenomCavalier;
     // private int sexe;  //1 pour masculin, 2 pour féminin
        private Categorie categorieCavalier;

        /// <summary>
        /// Initialise une nouvelle instance de la classe Cavalier
        /// </summary>
        /// <param name="n">Numéro de la licence</param>
        /// <param name="d">date de la licence</param>
        /// <param name="nom">nom du cavalier</param>
        /// <param name = "prenom" >prenom du cavalier</param>
        /// <param name="s">sexe du cavalier</param>
        /// <param name="c">Catégorie du cavalier</param>
        public Cavalier(int n, DateTime d, string nom, string prenom, Categorie c) //int s
        {
            this.numLicence = n;
            this.dateLicence = d;
            this.nomCavalier = nom;
            this.prenomCavalier = prenom;
            //sexe = s;
            categorieCavalier = c;
        }
        /// <summary>
        ///retourne le numéro de licence
        /// </summary>
        public int NumLicence
        {
            get => numLicence;
        }
        /// <summary>
        ///retourne la date de la licence
        /// </summary>
        public DateTime DateLicence
        {
            get => dateLicence;
        }

        /// <summary>
        ///retourne le nom du cavalier
        /// </summary>
        public string NomCavalier
        {
            get => nomCavalier;
        }

        /// <summary>
        ///retourne le prenom du cavalier
        /// </summary>
        public string PrenomCavalier
        {
            get => prenomCavalier;
        }

        public Categorie CategoriCavalier
        {
            get => categorieCavalier;
            set => categorieCavalier = value;
        }


        

        /// <summary>
        ///Retourne la civilité, le nom et le prénom du cavalier dans une chaine de caractères
        /// </summary>
        public virtual string RetourneInfos()
        {
            
                 string result =  nomCavalier + " " + prenomCavalier;
            return result;
        }
    }
}
