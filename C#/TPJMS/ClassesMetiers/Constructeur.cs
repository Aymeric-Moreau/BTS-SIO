using System;


namespace ClassesMetiers
{

    /// <summary>
    /// Classe qui permet de définir les caractéristiques et le comportement 
    /// d'un objet de type Constructeur
    /// </summary>
    public class Constructeur
    {
        private String nomConstructeur;
        private String specialite;
        /// <summary>
        /// constructeur de la classe 
        /// </summary>
        /// <param name="nom">nom du constructeur</param>
        /// <param name="spe">spécialité du constructeur</param>
        public Constructeur(String nom, String spe)
        {
            nomConstructeur = nom;
            specialite = spe;
        }

        /// <summary>
        /// Retourne le nom du constructeur
        /// </summary>
        public string NomConstructeur
        {
            get => nomConstructeur;
        }

        /// <summary>
        /// Retourne la spécialité du constructeur
        /// </summary>
        public string Specialite
        {
            get => specialite;
        }

    
         
      /// <summary>
      /// retourne les caractéristiques du constructeur
      /// </summary>
      /// <returns></returns>
        public override string ToString()
        {
            return nomConstructeur + " " + specialite;
        }
    }
}
