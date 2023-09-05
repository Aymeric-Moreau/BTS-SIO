using System;
using System.Collections.Generic;
using System.Text;
using static System.Collections.Specialized.BitVector32;

namespace ClassesHeritage
{
    public class Prof : Personne
    {
        private string matiere;
        public Prof(string nomProf, string prenomProf, string matiereProf) : base(nomProf, prenomProf)
        {
            matiere = matiereProf;

        }

        public string Matiere
        {
            get => matiere;
            
        }
        public override string  GetIdentite()
        {
            return (base.GetIdentite() + ", prof de : " + Matiere);
        }
    }
}
