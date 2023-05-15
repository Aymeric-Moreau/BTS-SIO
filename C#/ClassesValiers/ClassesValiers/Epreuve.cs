using System;
using System.Collections.Generic;


namespace ClassesValiers
{
    public class Epreuve
    {
        /// <summary>
        /// propriétés privées
        /// </summary>
        private int numEpreuve;
        private string nomEpreuve;
        private Categorie categorieEpreuve;
        
        Dictionary<Cavalier, Cheval> mesEngages = new Dictionary<Cavalier, Cheval>();

        /// <summary>
        /// constructeur
        /// </summary>
        /// <param name="numE">numéro de l'épreuve</param>
        /// <param name="nomE">nom de l'épreuve</param>
        /// <param name="c">catégorie de l'épreuve</param>
        public Epreuve(int numE, string nomE, Categorie c)
        {
            numEpreuve = numE;
            nomEpreuve = nomE;
            categorieEpreuve = c;
            mesEngages = new Dictionary<Cavalier, Cheval>();
        }

        /// <summary>
        /// retourne le numéro de l'épreuve
        /// </summary>
        public int NumEpreuve
        {
            get => numEpreuve;
        }

        /// <summary>
        /// retourne ou modifie le nom de l'épreuve
        /// </summary>
        public string NomEpreuve
        {
            get => nomEpreuve;
            set => nomEpreuve = value;
        }

        /// <summary>
        /// retourne ou modifie la liste des engagés
        /// </summary>
        public Dictionary<Cavalier, Cheval> MesEngages
        {
            get => mesEngages;
            set => mesEngages = value;
        }


        /// <summary>
        /// retourne la catégorie de l'épreuve
        /// </summary>
        public Categorie CategorieEpreuve
        {
            get => categorieEpreuve;

        }


        /// <summary>
        /// Inscrit un cavalier à l'épreuve en l'ajoutant à la liste des engagés
        /// </summary>
        /// <param name="c">un cavalier</param>
        public void Affecter(Cavalier c, Cheval ch)
        {
            if (c.CategoriCavalier == categorieEpreuve)
            {
                mesEngages.Add(c,ch);
            }



        }


        /// <summary>
        /// Compte le nombre de cavaliers engagés à l'épreuve
        /// qui ont obtenu leur licence au cours de l'année fournie en paramètre
        /// </summary>
        /// <param name="annee">année</param>

        public int CompterEngages(int annee)
        {
            int nbr = 0;

            foreach (KeyValuePair<Cavalier, Cheval> c in mesEngages)
            {
                if (c.Key.DateLicence.Year == annee)
                {
                    nbr++;
                }
            }
            return nbr;
        }






    }
}

