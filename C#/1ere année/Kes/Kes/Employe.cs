using System;


namespace BibliothèqueKES {
    public class Employe {
        #region Propriétés privées de la classe
        private int numero;
        private string nom;
        private DateTime dateEmbauche;
        private Grade qualification;

        /// <summary>
        /// instancie un objet de type Employe
        /// </summary>
        /// <param name="c">numéro de l'employé</param>
        /// <param name="n">nom de l'employé</param>
        /// <param name="d">date embauche de l'employé</param>
        /// <param name="g">grade de l'employé</param>
        #endregion

        #region Constructeur
        public Employe(int c, string n, DateTime d, Grade g) {
            numero = c;
            nom = n;
            dateEmbauche = d;
            qualification = g;

        }
        #endregion

        #region Accesseurs et mutateurs
        /// <summary>
        /// retourne le numéro de l’employé
        /// </summary>
        public int Numero {
            get => numero;
        }
        
        /// <summary>
        /// retourne le nom de l’employé
        /// </summary>
        public string Nom {
            get => nom;
        }
       
        /// <summary>
        /// retourne la date d'embauche de l’employé
        /// </summary>
        public DateTime DateEmbauche { 
            get => dateEmbauche; 
        }

        /// <summary>
        /// retourne ou modifie le grade de l’employé
        /// </summary>
        public Grade Qualification { 
            get => qualification; 
            set => qualification = value; 
        }
        #endregion

        #region Méthodes
        /// <summary>
        /// détermine le coût horaire de l'employé en fonction de sa qualification et de son ancienneté
        /// </summary>
        /// <returns>Coût horaire</returns>
        public float CoutHoraire() {
            float result = 0f;
            DateTime todau = DateTime.Now;
            TimeSpan diff = todau.Subtract(DateEmbauche);
            float ecart = Convert.ToSingle( diff.TotalDays / 365.05);
            if (ecart >= 5 && ecart <= 10)
            {
                
               result = qualification.Taux * 1.05f;
            }else if(ecart > 10 &&  ecart <= 15)
            {
                
                result = qualification.Taux * 1.08f;
            }
            else if (ecart > 15)
            {
                
                result = qualification.Taux * 1.12f;
            }
            else
            {
                
                result = qualification.Taux * 1;
            }

            
            return result;
        }
        #endregion


    }
}
