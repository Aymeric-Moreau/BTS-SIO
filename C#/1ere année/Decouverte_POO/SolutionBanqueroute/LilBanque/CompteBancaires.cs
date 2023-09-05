using System;
using System.Collections.Generic;

namespace libBanque
{
    public class CompteBancaires
    {
        #region Propriétés privées de la classse
        //propriété privé
        private string numCompte;
        private string nomTitulaire;
        private Decimal soldeCompte;
        #endregion

        #region Property = acesseur et mutateur
        /// <summary>
        /// Obtient ou modifie le numéro du compte
        /// </summary>
        //property
        public string NumCompte
        {
            get => numCompte;
            set => numCompte = value;
        }
        /// <summary>
        /// Obtien ou modifie le nom du titulaire
        /// </summary>
        public string NomTitulaire
        {
            get => nomTitulaire;
            set => nomTitulaire = value;
        }
        /// <summary>
        /// obtien le solde du compte
        /// </summary>
        public decimal SoldeCompte
        {
            get => soldeCompte;
        }
        #endregion


        //Methode
        #region Constructeur de la classe

        /// <summary>
        /// Initialise une nouvelle instance de la classe CompteBancaire
        /// </summary>
        /// <param name="sonNumero"></param>
        /// <param name="sonTitulaire"></param>
        /// <remarks>Le solde sera initialisé a 0</remarks>
        public CompteBancaires(string sonNumero, string sonTitulaire)
        {
            numCompte = sonNumero;
            nomTitulaire = sonTitulaire;
            soldeCompte = 0;
        }
        /// <summary>
        /// Initialise une nouvelle instance de la classe CompteBancaire avec un solde en plus
        /// </summary>
        /// <param name="sonNumero"></param>
        /// <param name="sonTitulaire"></param>
        /// <param name="solde"></param>
        public CompteBancaires(string sonNumero, string sonTitulaire, decimal solde)
        {
            numCompte = sonNumero;
            nomTitulaire = sonTitulaire;
            soldeCompte = solde;
        }


        /// <summary>
        /// credite de l'argent sur le compte
        /// </summary>
        /// <param name="somme"></param>
        /// <returns>true si la transaction a plus s'effectuer et false si elle n'a pas pus ce faire</returns>
        public bool CrediterCompte(decimal somme)
        {
            Boolean ok;

            if (somme < 0)
            {
                ok = false;
            }
            else
            {
                ok = true;
                soldeCompte += somme;
            }

            return ok;
        }

        /// <summary>
        /// débite de l'argent de son compte
        /// </summary>
        /// <param name="somme"></param>
        /// <returns>cela returne si oui ou non on peut debiter le compte </returns>
        public bool DebiterCompte(decimal somme)
        {
            Boolean ok;

            if (somme > soldeCompte)
            {
                ok = false;
            }
            else
            {
                ok = true;
                soldeCompte -= somme;
            }

            return ok;
        }


        #endregion




    }

}   