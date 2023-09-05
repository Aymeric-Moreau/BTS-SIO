using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassesValiers
{
    public class Cheval
    {
        //property
        private DateTime dateNaissance;
        private string nomCheval;
        private int numCheval;

        //constucteur 
        public Cheval(DateTime dateN, string nom, int s)
        {
            
            dateNaissance = dateN;
            nomCheval = nom;
            numCheval = s;
            
        }
        //assesseur mutateur
        public DateTime DateNaissance
        {
            get => dateNaissance;
            set => dateNaissance = value;
        }
        public string NomCheval
        {
            get => nomCheval;
            set => nomCheval = value;
        }
        public int NumCheval
        {
            get => numCheval;
            set => numCheval = value;
        }
    }
}
