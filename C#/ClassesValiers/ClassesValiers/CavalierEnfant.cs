using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassesValiers
{
    public class CavalierEnfant : Cavalier
    {
        //propriéter
        private DateTime datenaisssance;
        private float taille;

        public CavalierEnfant(DateTime dateN , float tailleE, int n, DateTime d, string nom, string prenom, Categorie c) : base( n, d, nom, prenom, c)
        {
            datenaisssance = dateN;
            taille = tailleE;

        }

        //assesseur mutateur 
        public float Taille
        {
            get => taille;
            set => taille = value;
        }

        public int retournerAge()
        {
            return DateTime.Now.Year - datenaisssance.Year;
        }
        public override string RetourneInfos()
        {
            string result = (base.RetourneInfos() + " " + retournerAge() + " " + Taille);
            return result;
        }
    }
}
