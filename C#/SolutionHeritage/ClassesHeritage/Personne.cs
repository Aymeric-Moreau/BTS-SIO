using System;

namespace ClassesHeritage
{
    public class Personne
    {
        // Propriétés privées
        private string nom;
        private string prenom;
        
        // Constructeur de la classe Personne
        public Personne(string nomPersonne, string prenomPersonne)
        {
            nom = nomPersonne;
            prenom = prenomPersonne;
        }
        // Accesseurs ou property
        public string Nom
        {
            get => nom;
            set => nom = value;
        }
        public string Prenom
        {
            get => prenom;
            set => prenom = value;
        }
                          
        // Méthodes
        public virtual string GetIdentite()
        {
            return (Nom + " " + Prenom);
        }
    }
}
