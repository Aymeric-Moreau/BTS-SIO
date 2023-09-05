using System;


namespace BibliothèqueKES {
    public class Intervention {
        #region Propriétés privées de la classe
        private int numero;
        private DateTime dateIntervention;
        private float duree;
        private float tarifKm; /*tarif kilométrique retenu*/
        private Employe technicien; /*employé qui a effectué l'intervention*/
        #endregion

        #region Constructeur
        /// <summary>
        /// instancie un objet de type Intervention
        /// </summary>
        /// <param name="n">numéro de l'intervention</param>
        /// <param name="d">date de l'intervention</param>
        /// <param name="duree">durée de l'intervention</param>
        /// <param name="t">tarif kilométrique</param>
        /// <param name="e">employé ayant effectué l'intervention</param>
        public Intervention(int n, DateTime d, float duree, float t, Employe e) {
            numero = n;
            dateIntervention = d;
            this.duree = duree;
            tarifKm = t;
            technicien = e;
        }
        #endregion

        #region Accesseurs
        /// <summary>
        /// retourne le numéro de l'intervention
        /// </summary>
        public int Numero
        {
            get => numero;
        }
        /// <summary>
        /// retourne la date de l'intervention
        /// </summary>
        public DateTime DateIntervention
        {
            get => dateIntervention;
        }
        /// <summary>
        /// retourne la durée l'intervention
        /// </summary>
        public float Duree
        {
            get => duree;
        }
        /// <summary>
        /// retourne le tarif kms de l'intervention
        /// </summary>
        public float TarifKm
        {
            get => tarifKm;
        }
        /// <summary>
        /// retourne le technicien qui a effecté l'intervention
        /// </summary>
        public Employe Technicien
        {
            get => technicien;
        } 
        #endregion

        #region Méthodes de la classe
        /// <summary>
        /// calcule les frais kilométriques occasionnés par une intervention
        /// </summary>
        /// <param name="dist"> distance parcourue</param>
        /// <returns>les frais kilométriques pour l'intervention</returns>
        public float FraisKm(int dist) {
            float result = dist * tarifKm;
            return result;
        }
        /// <summary>
        /// calcule les frais de main d'oeuvre occasionnés par une intervention
        /// </summary>
        /// <returns>les frais de main d'oeuvre pour l'intervention</returns>
        public float FraisMo() {
            float result = technicien.CoutHoraire() * duree;
            return result;
        }
        #endregion
    }
}
