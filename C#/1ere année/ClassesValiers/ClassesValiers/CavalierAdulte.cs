using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static System.Collections.Specialized.BitVector32;

namespace ClassesValiers
{
    public class CavalierAdulte : Cavalier
    {
        //propriété 
        int sexe;

        public CavalierAdulte(int sexe, int n, DateTime d, string nom, string prenom, Categorie c) : base( n,  d, nom,  prenom, c)
        {
            this.sexe = sexe;
            
        }



        /// <summary>
        /// Méthode qui retourne "Monsieur" ou "Madame" en fonction du sexe 
        /// </summary>
        /// <returns></returns>
        public string Civilite()
        {
            string result = null;
            if (sexe == 1)
            {
                result = "Monsieur";
            }
            else if (sexe == 2)
            {
                result = "Madame";
            }

            return result;
        }

        public override string RetourneInfos()
        {
            string result = (Civilite() + " " + base.RetourneInfos());
            return result;
        }
    }
}
